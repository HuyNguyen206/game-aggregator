<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class IGDBService
{
    public PendingRequest $client;

    public function __construct()
    {
        $clientId = config('services.igdb.client_id');
        $clientSecret = config('services.igdb.client_secret');

        $token = $this->getToken($clientId, $clientSecret);

        $this->client = Http::withHeaders([
            'Client-ID' => $clientId,
            'Authorization' => "Bearer $token"
        ])->baseUrl(config('services.igdb.base_url'));
    }

    public function getPopularGame()
    {
        $from = Carbon::now()->subMonth(4)->timestamp;
        $to = Carbon::now()->timestamp;
        $result = $this->client
            ->withBody(
                "fields name, platforms.*, screenshots.url, cover.url, rating, slug, aggregated_rating, rating_count;
                where (first_release_date >= $from & first_release_date <= $to)
                & rating_count > 5
                & platforms = (39,6,48,49,130);
                sort rating_count desc; limit 10;", 'text/plain')->post('games')->json();
      
        return $this->formatResult($result);
    }

    public function getRecentViewedGame()
    {
        $from = Carbon::now()->subMonth(2)->timestamp;
        $current = Carbon::now()->timestamp;
        $result = $this->client
            ->withBody(
                "fields name, summary, platforms.*, screenshots.url, cover.url, rating, slug;
                where (release_dates.date >= $from & release_dates.date <= $current)
                & platforms = (39,6,48,49,130)
                & rating_count > 5;
                sort rating desc; limit 5;", 'text/plain')->post('games')->json();

        return $this->formatResult($result);
    }

    public function getMostAnticipate()
    {
        $to = Carbon::now()->addMonth(4)->timestamp;
        $current = Carbon::now()->timestamp;
        $result = $this->client
            ->withBody(
                "fields name, summary, platforms.*, screenshots.url, cover.url, rating, release_dates.date, slug;
                where (release_dates.date >= $current & release_dates.date <= $to)
                & platforms = (39,6,48,49,130);
                sort rating desc; limit 5;", 'text/plain')->post('games')->json();

        return $this->formatResult($result);
    }

    public function getComingGame()
    {
        $to = Carbon::now()->addMonth(4)->timestamp;
        $current = Carbon::now()->timestamp;
        $result = $this->client
            ->withBody(
                "fields name, summary, platforms.*, screenshots.url, cover.url, rating, release_dates.date, slug;
                where (release_dates.date >= $current & release_dates.date <= $to)
                & platforms = (39,6,48,49,130);
                sort release_dates.date asc; limit 5;", 'text/plain')->post('games')->json();

        return $this->formatResult($result);
    }

    public function getGameBySlug($slug)
    {
        $result = $this->client
            ->withBody(
                "fields name, websites.*, videos.video_id, summary, platforms.*, screenshots.url, cover.url, rating, release_dates.date, similar_games.name,
                aggregated_rating, similar_games.cover.url, similar_games.slug, similar_games.platforms.*;
                where slug = \"$slug\";
                sort rating desc; limit 5;", 'text/plain')->post('games')->json();
        abort_if(!$result, 404);
        return $this->formatResult($result);
    }

    public function searchGame($q)
    {
        $result = $this->client->withBody("fields name, id, slug, cover.url; search \"$q\"; limit 8;", 'text/plain')->post('games')->json();

        return $this->formatResult($result);
    }

    private function getImagePath($game, $size = 't_cover_big')
    {
        if (isset($game['cover'])) {
            $imageUrl = $game['cover']['url'];
        } elseif (isset($game['screenshots'])) {
            $imageUrl = $game['screenshots'][0]['url'];
        } else {
            $imageUrl = asset('images/no_img.jpg');
        }

        return str_replace('t_thumb', $size, $imageUrl);
    }

    private function getPlatforms($game)
    {
        if (isset($game['platforms'])) {
            return collect($game['platforms'])->map(function ($platform) {
                return $platform['abbreviation'] ?? $platform['alternative_name'] ?? 'no-info';
            })->implode(', ');;
        }
        return 'no-info';
    }

    /**
     * @param $result
     * @return \Illuminate\Support\Collection
     */
    private function formatResult($gameInfos)
    {
        return collect($gameInfos)->map(function ($game) {
            $game = $this->formatData($game);

            if (isset($game['similar_games'])) {
                $game['similar_games'] = collect($game['similar_games'])->map(function ($similarGame) {
                    return $this->formatData($similarGame);
                });
            }

            if (isset($game['screenshots'])) {
                $game['screenshots'] = collect($game['screenshots'])->map(function ($sc) {
                    $originUrl = $sc['url'];
                    $sc['url'] = str_replace('t_thumb', 't_screenshot_med', $originUrl);
                    $sc['screenshot'] = str_replace('t_thumb', 't_screenshot_huge', $originUrl);
                    return $sc;
                });
            }

            return $game;
        });
    }

//    private function initPoolClient($pool)
//    {
//        $clientId = config('services.igdb.client_id');
//        $clientSecret = config('services.igdb.client_secret');
//
//        $token = Cache::get('token');
//        if (!$token) {
//            Cache::remember('token', 5080072, function () use ($clientId, $clientSecret){
//                $result = Http::retry(3, 200)
//                    ->post("https://id.twitch.tv/oauth2/token?client_id=$clientId&client_secret=$clientSecret&grant_type=client_credentials")
//                    ->json();
//                return $result['access_token'];
//            });
//        }
//
//       return $pool->withHeaders([
//            'Client-ID' => $clientId,
//            'Authorization' => "Bearer $token"
//        ])->baseUrl(config('services.igdb.base_url'));
//    }
    /**
     * @param $game
     * @return mixed
     * @throws \Exception
     */
    function formatData($game)
    {
        $game['cover_image_path'] = $this->getImagePath($game);
        $game['platform'] = $this->getPlatforms($game);
        $latestIndex = isset($game['release_dates']) ? count($game['release_dates']) - 1 : 0;
        $game['release_date'] = isset($game['release_dates']) ? Carbon::parse($game['release_dates'][$latestIndex]['date'])->format('M d, Y') : 'no-info';
        $game['rating'] = isset($game['rating']) ? round($game['rating']) / 100 : 0;
        $game['aggregated_rating'] = isset($game['aggregated_rating']) ? round($game['aggregated_rating']) / 100 : 0;

        return $game;
    }

    /**
     * @param mixed $clientId
     * @param mixed $clientSecret
     * @return mixed
     */
    public function getToken(mixed $clientId, mixed $clientSecret): mixed
    {
        $token = Cache::get('token');
        if (!$token) {
            $token = Cache::remember('token', 5080072, function () use ($clientId, $clientSecret) {
                $result = Http::retry(3, 200)
                    ->post("https://id.twitch.tv/oauth2/token?client_id=$clientId&client_secret=$clientSecret&grant_type=client_credentials")
                    ->json();
                return $result['access_token'];
            });
        }
        return $token;
    }
}

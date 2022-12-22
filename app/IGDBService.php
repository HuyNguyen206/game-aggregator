<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Http\Client\PendingRequest;

class IGDBService
{
    public PendingRequest $client;

    public function __construct()
    {
        $this->client = resolve('IgdbClient');
    }

    public function getPopularGame()
    {
        $from = Carbon::now()->subMonth(2)->timestamp;
        $to = Carbon::now()->addMonth(2)->timestamp;
        $result = $this->client
            ->withBody(
                "fields name, platforms.*, screenshots.url, cover.url, rating, slug;
                where (release_dates.date >= $from & release_dates.date <= $to)
                & platforms = (39,6,48,49,130);
                sort rating desc; limit 10;", 'text/plain')->post('games')->json();

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

    private function getSimilarGames($ids)
    {
        $result = $this->client
            ->withBody(
                "fields name, summary, platforms.*, screenshots.url, cover.url, rating, release_dates.date, slug;
                where id = ($ids); limit 7;", 'text/plain')->post('games')->json();

        return $this->formatResult($result);
    }

    public function getGameBySlug($slug)
    {
        $result = $this->client
            ->withBody(
                "fields name, summary, platforms.*, screenshots.url, cover.url, rating, release_dates.date, similar_games.id;
                where slug = \"$slug\";
                sort rating desc; limit 5;", 'text/plain')->post('games')->json();

        return $this->formatResult($result);
    }

    private function getImagePath($game)
    {
        if (isset($game['cover'])) {
            $imageUrl = $game['cover']['url'];
        } elseif (isset($game['screenshots'])) {
            $imageUrl = $game['screenshots'][0]['url'];
        } else {
            $imageUrl = asset('images/no_img.jpg');
        }

        return str_replace('t_thumb', 't_cover_big', $imageUrl);
    }

    private function getPlatforms($game)
    {
        if (isset($game['platforms'])) {
            $data = collect($game['platforms'])->map(function ($platform) {
                return $platform['abbreviation'] ?? $platform['alternative_name'] ?? 'no-info';
            })->toArray();

            return implode(', ', $data);
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
            $game['cover_image_path'] = $this->getImagePath($game);
            $game['platform'] = $this->getPlatforms($game);
            $game['rating'] = $game['rating'] ?? random_int(20, 100);
            $latestIndex = isset($game['release_dates']) ? count($game['release_dates']) - 1 : 0;
            $game['release_date'] = isset($game['release_dates']) ? Carbon::parse($game['release_dates'][$latestIndex]['date'])->format('M d, Y') : 'no-info';

            if (isset($game['similar_games'])) {
                $ids = implode(',', collect($game['similar_games'])->pluck('id')->toArray());
                $game['similar_games'] =  $this->getSimilarGames($ids);
            }

            if (isset($game['screenshots'])) {
                $game['screenshots'] =  collect($game['screenshots'])->map(function ($sc){
                     $sc['url'] = str_replace('t_thumb', 't_cover_big', $sc['url']);
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
}

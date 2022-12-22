<?php

namespace App\Providers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('IgdbClient', function (){
            $clientId = config('services.igdb.client_id');
            $clientSecret = config('services.igdb.client_secret');

            $token = Cache::get('token');
            if (!$token) {
                Cache::remember('token', 5080072, function () use ($clientId, $clientSecret){
                    $result = Http::retry(3, 200)
                        ->post("https://id.twitch.tv/oauth2/token?client_id=$clientId&client_secret=$clientSecret&grant_type=client_credentials")
                        ->json();
                    return $result['access_token'];
                });
            }
            return Http::withHeaders([
                'Client-ID' => $clientId,
                'Authorization' => "Bearer $token"
            ])->baseUrl(config('services.igdb.base_url'));
        });
    }
}

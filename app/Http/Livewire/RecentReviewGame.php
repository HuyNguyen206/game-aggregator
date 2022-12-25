<?php

namespace App\Http\Livewire;

use App\IGDBService;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class RecentReviewGame extends Component
{
    public $recentReviewGames = [];

    public function render()
    {
        return view('livewire.recent-review-game');
    }

    public function loadGames()
    {
        $service = resolve(IGDBService::class);

        $this->recentReviewGames = Cache::remember('recentReviewGames', 3600, function () use($service){
            return $service->getRecentViewedGame();
        });

        $this->recentReviewGames->each(function ($game){
           $this->emit('addRating', [
             'id' => $game['id'],
             'rating' => $game['rating'] ?? $game['aggregated_rating'] ?? 0,
               'prefix' => 'recent_game'
           ]);
        });
    }
}

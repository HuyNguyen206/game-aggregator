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
    }
}

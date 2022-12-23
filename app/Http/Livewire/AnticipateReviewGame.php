<?php

namespace App\Http\Livewire;

use App\IGDBService;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class AnticipateReviewGame extends Component
{
    public $mostAnticipateGames = [];

    public function render()
    {
        return view('livewire.anticipate-review-game');
    }

    public function loadGames()
    {
        $service = resolve(IGDBService::class);

        $this->mostAnticipateGames = Cache::remember('mostAnticipateGames', 3600, function () use($service){
            return $service->getMostAnticipate();
        });
    }
}

<?php

namespace App\Http\Livewire;

use App\IGDBService;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class CommingGame extends Component
{
    public $comingSoonGames = [];

    public function render()
    {
        return view('livewire.comming-game');
    }

    public function loadGames()
    {
        $service = new IGDBService;

        $this->comingSoonGames = Cache::remember('comingSoonGames', 3600, function () use($service){
            return $service->getComingGame();
        });
    }
}

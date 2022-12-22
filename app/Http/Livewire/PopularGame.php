<?php

namespace App\Http\Livewire;

use App\IGDBService;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class PopularGame extends Component
{
    public $popularGames = [];

    public function render()
    {
        return view('livewire.popular-game');
    }

    public function loadGames()
    {
        $service = new IGDBService;

        $this->popularGames = Cache::remember('popularGames', 3600, function () use($service){
           return $service->getPopularGame();
        });
    }
}

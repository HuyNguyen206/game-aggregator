<?php

namespace App\Http\Livewire;

use App\IGDBService;
use Livewire\Component;

class SearchGame extends Component
{
    public $q;

    public function render()
    {
        $games = collect();
        if (trim($this->q)) {
            $service = resolve(IGDBService::class);
            $games = $service->searchGame($this->q);
            $this->dispatchBrowserEvent('search');
        }

        return view('livewire.search-game', compact('games'));
    }
}

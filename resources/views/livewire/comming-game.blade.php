<div wire:init="loadGames">
    <h2 class="py-4 text-2xl font-semibold mt-2 uppercase">Coming soon</h2>
    <div class="flex flex-col space-y-4">
        @forelse($comingSoonGames as $comingSoonGames)
            <x-game-partials.game-card :game="$comingSoonGames"/>
            @empty
            <x-game-partials.loading-animation/>
            @endforelse
    </div>
</div>

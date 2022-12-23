<div wire:init="loadGames">
    <h2 class="py-4 text-2xl font-semibold">Most anticipated</h2>
    <div class="flex flex-col space-y-4">
        @forelse($mostAnticipateGames as $mostAnticipateGame)
            <x-game-partials.game-card :game="$mostAnticipateGame"/>
        @empty
            <x-game-partials.loading-animation/>
            @endforelse
    </div>
</div>

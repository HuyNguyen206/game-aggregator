<section wire:init="loadGames" class="list-games grid gap-7 grid-cols-1 md:grid-cols-3 lg:grid-cols-6 mb-4">
    @forelse($popularGames as $game)
        <a href="{{route('games.detail', $game['slug'])}}">
            <article class="flex flex-col" wire:key="{{$game['id']}}">
                <div class="">
                    <div class="flex-none relative">
                        <img src="{{$game['cover_image_path']}}" alt="" class="w-full h-full">
                        @isset($game['aggregated_rating'])
                            <div
                                class="bg-gray-500 rounded-full absolute -right-6 -bottom-6 w-14 h-14 flex items-center justify-center"
                                id="popular_game_{{$game['id']}}">
                            </div>
                        @endisset
                    </div>
                </div>
                <span class="mt-4 inline-block text-xl font-semibold">{{$game['name']}}</span>
                <span>{{$game['platform']}}</span>
            </article>
        </a>
    @empty
        <x-game-partials.loading-animation/>
    @endforelse
</section>

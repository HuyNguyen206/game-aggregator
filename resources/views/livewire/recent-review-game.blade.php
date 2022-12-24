<div wire:init="loadGames" class="col-span-12 lg:col-span-6">
    <h2 class="py-4 text-2xl font-semibold">Recently Reviewed</h2>
    <div class="flex flex-col space-y-4">
        @forelse($recentReviewGames as $recentReviewGame)
            <a href="{{route('games.detail', $recentReviewGame['slug'])}}"
               class="inline-block flex space-x-2 bg-gray-400 rounded-xl p-4 hover:opacity-75 transition duration-200">
                <img src="{{$recentReviewGame['cover_image_path']}}" class="w-44 h-44 flex-none" alt="">
                <div>
                    <div class="bg-gray-700 flex items-center justify-center rounded-full w-14 h-14 relative" id="game_{{$recentReviewGame['id']}}">
                    </div>
                </div>
                <div>
                    User score
                </div>

                <div>
                    <h3 class="text-xl font-semibold">{{$recentReviewGame['name']}}</h3>
                    <span>{{$recentReviewGame['platform']}}</span>
                    <p class="mt-4 hidden md:block">
                        {{$recentReviewGame['summary']}}
                    </p>
                </div>
            </a>
        @empty
            <x-game-partials.loading-animation/>
        @endforelse
    </div>

</div>

@push('scripts')
    <x-game-partials.livewire-rating-animation-script></x-game-partials.livewire-rating-animation-script>
@endpush


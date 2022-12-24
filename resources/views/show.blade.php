<x-app-layout>
    <main class="px-8">
        <article class="flex flex-col items-center sm:items-start sm:flex-row space-x-4 my-4">
            <div class="flex-none w-full sm:w-4/12">
                <img src="{{$game['cover_image_path']}}" alt="">
            </div>
            <div class="w-full mt-4 sm:mt-0 sm:w-7/12">
                <h1 class="text-2xl font-semibold">{{$game['name']}}</h1>
                <div>{{$game['platform']}}</div>
                <div class="flex space-x-4">
                    <div>
                        <x-game-partials.rating-animation-script id="rating_game_{{$game['id']}}" ratingPoint="{{$game['rating']}}" label="User score"/>
                    </div>
                    <div>
                        <x-game-partials.rating-animation-script id="aggregated_rating_game_{{$game['id']}}" ratingPoint="{{$game['aggregated_rating']}}" label="Critic score"/>
                    </div>
                    @isset($game['websites'])
                        <div class="social-contact flex space-x-3">
                            @foreach($game['websites'] as $website)
                                <a href="{{$website['url']}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/>
                                    </svg>
                                </a>
                            @endforeach
                        </div>
                    @endisset
                </div>
                @isset($game['summary'])
                    <p class="mt-4">{{$game['summary']}}</p>
                @endisset
                @isset($game['videos'])
                    <a href="https://www.youtube.com/watch?v={{$game['videos'][0]['video_id']}}" target="_blank">
                        <button
                            class="hover:opacity-80 flex items-center transition mt-4 px-4 pl-8 py-4 bg-blue-400 text-white relative rounded-md">
                            <span>Play trailer</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 absolute left-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z"/>
                            </svg>

                        </button>
                    </a>
                @endisset
            </div>
        </article>
        <hr>
        @isset($game['screenshots'])
            <div class="my-4">
                <h2 class="text-2xl uppercase">
                    IMAGES
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($game['screenshots'] as $screenshot)
                        <div class="flex-none">
                            <a href="" class="hover:opacity-80 transition">
                                <img src="{{$screenshot['url']}}" alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @endisset
        @isset($game['similar_games'])
            <div class="similar-game">
                <h2 class="py-4 text-2xl font-semibold">Similar game</h2>
                <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:space-x-4">
                    @foreach($game['similar_games'] as $similarGame)
                        <x-game-partials.game-card :game="$similarGame"/>
                    @endforeach
                </div>
            </div>
        @endisset
    </main>
</x-app-layout>

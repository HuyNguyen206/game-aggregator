<x-app-layout>
    <main class="px-8">
        <article class="flex flex-col items-center sm:items-start sm:flex-row space-x-4 my-4">
            <div class="flex-none w-full sm:w-4/12">
                <img src="{{asset('images/tlou.jpg')}}" alt="">
            </div>
            <div class="w-full mt-4 sm:mt-0 sm:w-7/12">
                <h1 class="text-2xl font-semibold">The last of us</h1>
                <div>Action, Adventure</div>
                <div class="flex space-x-4">
                    <div>
                        <div class="bg-gray-400 flex items-center justify-center rounded-full w-12 h-12">90%</div>
                        <div>
                            Member score
                        </div>
                    </div>
                    <div>
                        <div class="bg-gray-400 flex items-center justify-center rounded-full w-12 h-12">90%</div>
                        <div>
                            Critic score
                        </div>
                    </div>
                    <div class="social-contact flex space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"/>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"/>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"/>
                        </svg>

                    </div>
                </div>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet architecto atque
                    aut consectetur culpa cupiditate delectus deserunt error facilis hic ipsam laborum libero minus modi
                    molestiae necessitatibus nihil nisi, obcaecati pariatur rem reprehenderit soluta tempora temporibus
                    veritatis voluptas voluptatum.</p>
                <button class="hover:opacity-80 transition mt-4 px-4 pl-8 py-4 bg-blue-400 text-white relative rounded-md">
                    <span>Play trailer</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 absolute h-full top-0 left-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                    </svg>

                </button>
            </div>
        </article>
        <hr>
        <div class="my-4">
            <h2 class="text-2xl uppercase">
                IMAGES
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="flex-none">
                    <a href="" class="hover:opacity-80 transition">
                        <img src="{{asset('images/tlou.jpg')}}" alt="">
                    </a>
                </div>
                <div class="flex-none">
                    <a href="" class="hover:opacity-80 transition">
                        <img src="{{asset('images/tlou.jpg')}}" alt="">
                    </a>
                </div>
                <div class="flex-none">
                    <a href="" class="hover:opacity-80 transition">
                        <img src="{{asset('images/tlou.jpg')}}" alt="">
                    </a>
                </div>
                <div class="flex-none">
                    <a href="" class="hover:opacity-80 transition">
                        <img src="{{asset('images/tlou.jpg')}}" alt="">
                    </a>
                </div>
                <div class="flex-none">
                    <a href="" class="hover:opacity-80 transition">
                        <img src="{{asset('images/tlou.jpg')}}" alt="">
                    </a>
                </div>
                <div class="flex-none">
                    <a href="" class="hover:opacity-80 transition">
                        <img src="{{asset('images/tlou.jpg')}}" alt="">
                    </a>
                </div>
                <div class="flex-none">
                    <a href="" class="hover:opacity-80 transition">
                        <img src="{{asset('images/tlou.jpg')}}" alt="">
                    </a>
                </div>

            </div>
        </div>
        <div class="similar-game">
            <h2 class="py-4 text-2xl font-semibold">Similar game</h2>
            <div class="flex flex-col space-y-4 sm:space-y-0 sm:flex-row sm:space-x-4">
                <a href="" class="flex space-x-2">
                    <img src="{{asset('images/tlou.jpg')}}" class="w-16 h-16 flex-none" alt="">
                    <div>
                        <h4 class="font-semibold">The last of us</h4>
                        <span class="text-sm">PS4</span>
                    </div>
                </a>
                <a href="" class="flex space-x-2">
                    <img src="{{asset('images/tlou.jpg')}}" class="w-16 h-16 flex-none" alt="">
                    <div>
                        <h4 class="font-semibold">The last of us</h4>
                        <span class="text-sm">PS4</span>
                    </div>
                </a>
                <a href="" class="flex space-x-2">
                    <img src="{{asset('images/tlou.jpg')}}" class="w-16 h-16 flex-none" alt="">
                    <div>
                        <h4 class="font-semibold">The last of us</h4>
                        <span class="text-sm">PS4</span>
                    </div>
                </a>
                <a href="" class="flex space-x-2">
                    <img src="{{asset('images/tlou.jpg')}}" class="w-16 h-16 flex-none" alt="">
                    <div>
                        <h4 class="font-semibold">The last of us</h4>
                        <span class="text-sm">PS4</span>
                    </div>
                </a>
            </div>
        </div>
    </main>
</x-app-layout>

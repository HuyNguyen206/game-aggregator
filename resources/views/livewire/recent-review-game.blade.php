<div wire:init="loadGames" class="col-span-12 lg:col-span-6">
    <h2 class="py-4 text-2xl font-semibold">Recently Reviewed</h2>
    <div class="flex flex-col space-y-4">
        @forelse($recentReviewGames as $recentReviewGame)
            <a href=""
               class="inline-block flex space-x-2 bg-gray-400 rounded-xl p-4 hover:opacity-75 transition duration-200">
                <img src="{{$recentReviewGame['cover_image_path']}}" class="w-44 h-44 flex-none" alt="">
                <div>
                    <h3 class="text-xl font-semibold">{{$recentReviewGame['name']}}</h3>
                    <span>{{$recentReviewGame['platform']}}</span>
                    <p class="mt-4 hidden md:block">
                        {{$recentReviewGame['summary']}}
                    </p>
                </div>
            </a>
            @empty
                <div class="border border-blue-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
                    <div class="animate-pulse flex space-x-4">
                        <div class="rounded-full bg-slate-200 h-10 w-10"></div>
                        <div class="flex-1 space-y-6 py-1">
                            <div class="h-2 bg-slate-200 rounded"></div>
                            <div class="space-y-3">
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="h-2 bg-slate-200 rounded col-span-2"></div>
                                    <div class="h-2 bg-slate-200 rounded col-span-1"></div>
                                </div>
                                <div class="h-2 bg-slate-200 rounded"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforelse
    </div>

</div>

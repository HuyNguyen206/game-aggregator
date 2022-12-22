<div wire:init="loadGames">
    <h2 class="py-4 text-2xl font-semibold mt-2 uppercase">Coming soon</h2>
    <div class="flex flex-col space-y-4">
        @forelse($comingSoonGames as $comingSoonGame)
            <a href="" class="flex space-x-2">
                <img src="{{$comingSoonGame['cover_image_path']}}" class="w-16 h-16 flex-none" alt="">
                <div>
                    <h4 class="font-semibold">{{$comingSoonGame['name']}}</h4>
                    <div class="text-sm">{{$comingSoonGame['platform']}}</div>
                    <div>{{$comingSoonGame['release_date']}}</div>
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

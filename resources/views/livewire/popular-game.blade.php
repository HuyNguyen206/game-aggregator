<section wire:init="loadGames" class="list-games grid gap-7 grid-cols-1 md:grid-cols-3 lg:grid-cols-6 mb-4">
    @forelse($popularGames as $game)
        <article class="flex flex-col" wire:key="{{$game['id']}}">
            <div class="">
                <div class="flex-none relative">
                    <img src="{{$game['cover_image_path']}}" alt="" class="w-full h-full">
                    <div
                        class="bg-gray-500 rounded-full absolute -right-6 -bottom-6 w-14 h-14 flex items-center justify-center">
                        {{$game['rating']}}%
                    </div>
                </div>
            </div>
            <span class="mt-4 inline-block text-xl font-semibold">{{$game['name']}}</span>
            <span>{{$game['platform']}}</span>
        </article>
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
</section>

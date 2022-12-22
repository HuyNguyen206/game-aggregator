<x-app-layout>
    <main class="px-8">
        <h2 class="py-4 text-2xl font-semibold">Popular game</h2>
        <livewire:popular-game/>
        <hr>
        <section>
            <div class="grid grid-cols-12">
                <livewire:recent-review-game/>
                <div class="col-span-12 lg:col-start-9 lg:col-span-4">
                    <div class="flex flex-row mt-3 justify-between lg:flex-col">
                        <livewire:anticipate-review-game/>
                        <livewire:comming-game/>
                    </div>
                </div>
            </div>

        </section>
    </main>
</x-app-layout>

<div class="hidden md:block">
    <div class="ml-10 flex items-baseline space-x-4">
        <x-nav-link href="/movies" :active="request()->is('movies')" >Movies</x-nav-link>
        <x-nav-link href="/series" :active="request()->is('series')" >Series</x-nav-link>
        <x-nav-link href="/cinema" :active="request()->is('cinema')" >Cinema</x-nav-link>
        <x-nav-link href="/tv" :active="request()->is('tv')" >TV</x-nav-link>
    </div>
</div>




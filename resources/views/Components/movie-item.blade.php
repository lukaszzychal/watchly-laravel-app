{{--<strong>Title:</strong> <a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a>--}}

<li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
        <a href="/movies/{{ $movie->slug }}">
        <img class="size-12 flex-none rounded-full bg-gray-50"
             src="{{ $movie->poster }}"
             alt="">
        </a>

        <div class="min-w-0 flex-auto">
            <a href="/movies/{{ $movie->slug }}">
                <p class="text-sm/6 font-semibold text-gray-900">{{ $movie->title }}</p>
            </a>
            <p class="mt-1 truncate text-xs/5 text-gray-500">
                {{ strlen($movie->description) > 255 ? substr($movie->description, 0, 255) . '...' : $movie->description }}
            </p>
            <p class="mt-1 truncate text-xs/5 text-gray-500">
                <strong>Director:</strong> {{ $movie->director }},
                <strong>Writer:</strong> {{ $movie->writer }},

            </p>
            <p class="mt-1 truncate text-xs/5 text-gray-500">
                <strong>Actors:</strong>
                @foreach(json_decode($movie->actors, true) as $actor)  {{ $actor }}, @endforeach
            </p>
            <p class="mt-1 truncate text-xs/5 text-gray-500">
                <strong>Genre:</strong>
                @foreach(json_decode($movie->genre, true) as $genre)  {{ $genre }}, @endforeach
            </p>
        </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
        <p class="mt-1 truncate text-xs/5 text-gray-500"><strong>Rating: </strong> {{ $movie->rating }}</p>
        <p class="mt-1 truncate text-xs/5 text-gray-500"><strong>Duration: </strong> {{ $movie->duration }}</p>
        <p class="mt-1 truncate text-xs/5 text-gray-500"><strong>Country: </strong> {{ $movie->country }}</p>
        <p class="mt-1 truncate text-xs/5 text-gray-500"><strong>Release Date: </strong> {{ $movie->release_date }}</p>

    </div>

</li>

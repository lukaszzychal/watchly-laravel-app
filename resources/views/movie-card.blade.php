<strong>Title:</strong> <a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a>

<x-layout>
    <x-slot:title>
        Movie Card - {{ $movie->title }}
    </x-slot:title>

    <div>
        <strong>Title</strong>: {{ $movie->title }}
        <br>
        <strong>Description</strong>: {{ $movie->description }}
        <br>
        <strong>Genre</strong>: {{ $movie->genre }}
        <br>
        <strong>Release Date</strong>: {{ $movie->release_date }}
        <br>
       <strong> Rating:</strong> {{ $movie->rating }}
        <br>
        <strong>Duration:</strong> {{ $movie->duration }}
        <br>
        <strong>Actors:</strong> {{ $movie->actors }}
        <br>
        <strong>Director:</strong> {{ $movie->director }}
        <br>
        <strong>Writer:</strong> {{ $movie->writer }}
        <br>
        <strong>Poster:</strong> {{ $movie->poster }}
    </div>

</x-layout>

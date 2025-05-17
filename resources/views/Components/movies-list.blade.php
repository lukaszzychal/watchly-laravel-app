<div>
      <ul role="list" class="divide-y divide-gray-100">
            @foreach($movies as $movie)
              <x-movie-item :movie="$movie"></x-movie-item>
            @endforeach
        </ul>
</div>

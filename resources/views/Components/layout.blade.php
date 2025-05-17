<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Watchly - {{ $title }}</title>
</head>
<body >
<nav>
    <x-nav-link href="/" >Home</x-nav-link>
    <x-nav-link href="/movies">Movies</x-nav-link>
</nav>

{{ $slot }}

</body>
</html>

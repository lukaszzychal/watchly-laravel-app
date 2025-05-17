<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Watchly - {{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <a href="/">
                            <img class="size-8"
                                 src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                                 alt="Your Company">
                        </a>
                    </div>
{{--                    <x-menu></x-menu>--}}
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
{{--                        <x-notifications></x-notifications>--}}
                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            {{--                            <x-profile></x-profile>--}}
                            {{--                       <x-profile_menu></x-profile_menu>--}}
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- mobile menu button -->
                    <button type="button"
                            class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                            aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- mobile menu, show/hide based on menu state. -->
        <div class="md:hidden" id="mobile-menu">
{{--            <x-mobile.mobile_menu></x-mobile.mobile_menu>--}}
            <div class="border-t border-gray-700 pt-4 pb-3">
                <div class="flex items-center px-5">
                    {{--                <x-mobile.mobile_profile></x-mobile_profile>--}}
                    {{--                <x-mobile.mobile_notifications></x-mobile_notifications>--}}
                </div>
                {{--                 <x-mobile.mobile_profile_menu></x-mobile_profile_menu>--}}
            </div>
        </div>
    </nav>
{{--    <x-header :title="$title"></x-header>--}}
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
</div>

</body>
</html>

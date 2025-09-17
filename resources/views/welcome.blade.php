<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <div class="container mx-auto px-4 py-8">
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Watchly</h1>
                    <p class="text-xl text-gray-600 mb-8">Your Laravel application is ready!</p>
                    
                    <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl mx-auto">
                        <h2 class="text-2xl font-semibold mb-4">Getting Started</h2>
                        <div class="text-left space-y-3">
                            <p class="text-gray-700">• Laravel {{ app()->version() }} is installed and configured</p>
                            <p class="text-gray-700">• TailwindCSS is ready for styling</p>
                            <p class="text-gray-700">• Vue.js is available for frontend development</p>
                            <p class="text-gray-700">• CI/CD pipeline is configured</p>
                            <p class="text-gray-700">• Environment files are set up for local, staging, and production</p>
                        </div>
                        
                        <div class="mt-6">
                            <a href="https://laravel.com/docs" target="_blank" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                                Read Laravel Documentation
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
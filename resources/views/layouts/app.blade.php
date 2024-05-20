<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <!-- Page Content -->
            <div class="grid grid-cols-5 grid-rows-1 gap-0">
                <div style="color: #525252;" class="text-neutral-600 col-span-5 lg:col-span-3 lg:col-start-2 py-10 m-2">
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
            @include('layouts.footer')


        </div>
    </body>
</html>

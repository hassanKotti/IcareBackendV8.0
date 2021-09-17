<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/detect-mode.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{ asset('js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('js/charts-pie.js') }}" defer></script>
    <script src="{{ asset('js/charts-bars.js') }}" defer></script>
</head>

<body class="overflow-y-hidden font-sans antialiased bg-shark-50 dark:bg-shark-900 dark:text-shark-300 text-shark-600">
    <div class="">
        <!-- Page Navigation -->
        @include('layouts.navigation')
    </div>
    <div class="
        flex w-full h-screen overflow-y-hidden">
        <div class="">
            <!-- Page Sidebar -->
            @include('layouts.sidebar')
        </div>
        <!-- Page Content -->
        <main class="
            w-full min-h-screen overflow-y-scroll overscroll-auto">
            <div class="p-12 lg:p-12 md:p-6 ">
                {{ $slot }}
            </div>
            <!-- Page Footer -->
            @include('layouts.footer')

            </main>
        </div>

</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <meta name="csrf-token"
          content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | @yield('title', $title ?? 'Home')</title>

    <!-- Fonts -->
    <link rel="stylesheet"
          href="https://rsms.me/inter/inter.css">

    @livewireStyles
    <!-- Styles -->
    <link rel="stylesheet"
          href="{{ asset('css/app.css') }}">

    <style>
        html {
            height: 100%;
        }

        body {
            min-height: 100%;
        }

        [x-cloak] {
            display: none;
        }
    </style>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js"
            defer></script>
</head>

<body>

    <div class="h-screen flex overflow-hidden bg-white"
         x-data="{ mSidebar: false}">
        @include('includes.sidebar.mobile')

        @include('includes.sidebar.desktop')
        <!-- Main column -->
        <div class="flex flex-col w-0 flex-1 overflow-hidden">

            @include('includes.sidebar.search')
            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none bg-gray-100 sm:bg-gray-100">

                <!-- Page title & actions -->
                <div class="hidden lg:flex border-b border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-end sm:px-6 lg:px-8 bg-white sm:bg-yellow-400">
                    @include('includes.nav.user_menu')
                </div>

                @include('includes.partials.messages')

                {{ $slot ?? '' }}

                @yield('content')
            </main>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @livewireScripts
    @stack('scripts')
    @include('includes.listeners')
</body>

</html>
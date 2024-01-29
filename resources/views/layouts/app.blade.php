<?php

$loggedIn = true;
$firstName = 'Adeel';
$lastName = 'Safdar';
$Email = 'adeelsafdar.dev@gmail.com';
$Password = 'Abc123';
?>

<!DOCTYPE html>
<html lang="en" :class="{ 'theme-dark': dark }" x-data="data()">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('assets.links')

    <!-- custom styles -->
    @yield('styles')
</head>

<body>

    @if ($loggedIn)

        <div class="flex h-[calc(100vh-56px)] bg-gray-50 dark:bg-gray-900"
            :class="{ 'overflow-hidden': isSideMenuOpen }">
            
            @include('components.sidebar')

            <div class="flex flex-col flex-1">
                
                @include('components.header')

                <main class="h-full pb-16 overflow-y-auto">
                    
                    @yield('content')

                </main>
            </div>
        </div>

    @else
        <main>

            @yield('content')

        </main>
    @endif


    <footer>
        @include('components.footer')
    </footer>

    @include('assets.scripts')

    <!-- custom scripts -->
    @yield('scripts')
</body>

</html>

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
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <footer class="flex justify-between py-8 px-6 bg-white items-center text-xs">
            <div>© SAIKEN</div>
            <div class="flex items-center text-gray-400">
                <a href="#" class="mr-4">利用規約</a>
                <a href="#" class="mr-4">プライバシーポリシー</a>
                <a href="#" class="mr-4">運営会社</a>
                <a href="#">リクルート</a>
            </div>
            </footer>
        </div>
    </body>
</html>

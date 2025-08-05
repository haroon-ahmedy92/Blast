<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Blast - Tanzania Jobs Portal') }}</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('companies/blast.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('companies/blast.png') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Include Styles Component -->
    @include('components.layout.styles')
</head>

<body>
    <!-- Include Header Component -->
    @include('components.layout.header')
    
    <!-- Main Content -->
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Include Footer Component -->
    @include('components.layout.footer')
</body>
</html>

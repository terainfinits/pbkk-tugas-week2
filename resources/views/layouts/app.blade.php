<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Agentic AI IDE')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="app-body">

    {{-- Navbar extracted to partial --}}
    @include('partials.navbar')

    @yield('content')

    {{-- Footer extracted to partial --}}
    @include('partials.footer')

    @stack('scripts')
</body>
</html>

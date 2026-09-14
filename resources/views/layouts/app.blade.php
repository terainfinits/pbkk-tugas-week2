<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Agentic AI IDE')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-grid-pattern {
            background-size: 40px 40px;
            background-image:
                linear-gradient(to right, rgba(255,255,255,0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255,255,255,0.03) 1px, transparent 1px);
        }
        .text-glow { text-shadow: 0 0 25px rgba(255, 255, 255, 0.4); }
        .box-glow { box-shadow: 0 0 40px rgba(255, 255, 255, 0.1); }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #000000; }
        ::-webkit-scrollbar-thumb { background: #1f2937; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #374151; }
    </style>
    @stack('styles')
</head>
<body class="bg-gray-950 text-gray-300 font-sans antialiased selection:bg-emerald-500 selection:text-white overflow-x-hidden">

    <!-- navbar layout agar tidak duplikat -->
    <nav class="bg-black border-b border-gray-800 h-14 sticky top-0 z-50 shadow-lg flex items-center px-6">
        <span class="text-white font-bold tracking-wide mr-8">Profil Akademis Mahasiswa ITS</span>
        <div class="flex gap-6 text-sm font-semibold">
            <a href="{{ route('home') }}" class="text-gray-400 hover:text-white transition">Home</a>
            <a href="{{ route('dashboard.mahasiswa.detail', '5025241090') }}" class="text-gray-400 hover:text-white transition">Profil</a>
            <a href="{{ route('agent.idea') }}" class="text-gray-400 hover:text-white transition">Agentic AI</a>
            <a href="{{ route('dashboard.riwayat') }}" class="text-gray-400 hover:text-white transition">Riwayat Studi</a>
        </div>
    </nav>

    @yield('content')

    <footer class="bg-gray-950 border-t border-gray-800 p-10 text-center text-gray-500 text-sm font-medium">
        <p>PBKK Tugas Week 2 &copy; {{ date('Y') }}. Built with Laravel, Monaco, & Tailwind CSS.</p>
    </footer>

    @stack('scripts')
</body>
</html>

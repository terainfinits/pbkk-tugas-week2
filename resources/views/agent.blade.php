@extends('layouts.app')

@section('title', 'Project Pitch - Agentic AI IDE')

@section('content')

    {{-- Tema dinamis dari route /agent/{tema?} --}}
    <div class="max-w-3xl mx-auto text-center py-6 px-6">
        <p class="text-sm text-gray-500 uppercase tracking-widest">Tema Terpilih</p>
        <p class="text-emerald-400 text-glow font-bold text-lg">{{ $tema }}</p>
        <p class="text-gray-400 mt-2">{{ $penjelasan }}</p>
    </div>

    <header class="relative min-h-screen flex flex-col items-center justify-center bg-grid-pattern pt-8 pb-32">
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-emerald-500/10 blur-[150px] rounded-full pointer-events-none z-0"></div>
        <div class="z-10 text-center max-w-6xl px-6 w-full flex flex-col items-center">
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-extrabold tracking-tighter mb-6 bg-clip-text text-transparent bg-gradient-to-b from-white to-gray-500">
                MAGENTIC
            </h1>
            <p class="text-xl md:text-2xl text-gray-400 font-light mb-12 tracking-wide">The Next Generation of Web-Based Development.</p>
            <h2 class="text-3xl md:text-5xl font-bold text-emerald-400 mb-8 text-glow">MAJESTIC IN EVERY LINE.</h2>
            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mb-12 leading-relaxed">
                A collaborative web-based development environment powered by Agentic AI seamlessly integrated with GitHub.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-20">
                <a href="#features" class="px-8 py-4 bg-emerald-500 hover:bg-emerald-400 text-gray-950 rounded-full font-bold text-lg transition duration-300 shadow-[0_0_30px_rgba(16,185,129,0.4)]">Explore the Project</a>
                <a href="#architecture" class="px-8 py-4 bg-transparent hover:bg-gray-900 text-white rounded-full font-bold text-lg transition duration-300 border border-gray-700">View Architecture</a>
            </div>

            <div class="w-full aspect-video">
                @include('partials.code-chat-mockup')
            </div>
        </div>
    </header>

    {{-- ... section problem/features/agent/tech-stack tetap sama seperti dokumen aslimu (tidak diulang di sini) ... --}}

    <section class="py-32 px-6 bg-gray-950 border-t border-gray-800 relative">
        <div class="max-w-6xl mx-auto flex flex-col items-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white text-center">One Codebase for All</h2>
            <p class="text-xl text-gray-400 mb-16 text-center max-w-3xl">
                Just like Google Docs, developers can work on the same project simultaneously together an AI agent to assists along the way.
            </p>
            @include('partials.code-chat-mockup', ['wrapperClass' => 'w-full'])
        </div>
    </section>

@endsection
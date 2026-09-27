@extends('layouts.app')

@section('title', 'Project Pitch - Agentic AI IDE')

@section('content')

    {{-- Tema dinamis dari route /agent/{tema?} --}}
    <div class="max-w-3xl mx-auto text-center py-6 px-6">
        <p class="text-sm text-gray-500 uppercase tracking-widest">Tema Terpilih</p>
        <p class="text-emerald-400 text-glow font-bold text-lg">{{ $tema }}</p>
        <p class="text-gray-400 mt-2">{{ $penjelasan }}</p>
    </div>

    <header class="agent-hero">
        <div class="agent-hero__glow"></div>

        <div class="z-10 text-center max-w-6xl px-6 w-full flex flex-col items-center">
            <h1 class="agent-hero__title">MAGENTIC</h1>

            <p class="text-xl md:text-2xl text-gray-400 font-light mb-12 tracking-wide">
                The Next Generation of Web-Based Development.
            </p>

            <h2 class="text-3xl md:text-5xl font-bold text-emerald-400 mb-8 text-glow">
                MAJESTIC IN EVERY LINE.
            </h2>

            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mb-12 leading-relaxed">
                A collaborative web-based development environment powered by Agentic AI seamlessly integrated with GitHub.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-20">
                <a href="#features" class="agent-cta-primary">Explore the Project</a>
                <a href="#architecture" class="agent-cta-secondary">View Architecture</a>
            </div>

            <div class="w-full aspect-video">
                @include('partials.code-chat-mockup')
            </div>
        </div>
    </header>

    {{-- ... section problem/features/agent/tech-stack tetap sama seperti dokumen aslimu ... --}}

    <section class="agent-section">
        <div class="max-w-6xl mx-auto flex flex-col items-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 text-white text-center">One Codebase for All</h2>
            <p class="text-xl text-gray-400 mb-16 text-center max-w-3xl">
                Just like Google Docs, developers can work on the same project simultaneously together an AI agent to assists along the way.
            </p>
            @include('partials.code-chat-mockup', ['wrapperClass' => 'w-full'])
        </div>
    </section>

@endsection
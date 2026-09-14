@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')

    <div class="max-w-4xl mx-auto py-12 px-6">
        <h1 class="text-3xl font-bold text-white mb-6">Detail Profil Mahasiswa</h1>

        <div class="p-6 bg-gray-950 rounded-2xl border border-gray-800 mb-16">
            <p class="text-gray-400 mb-1"><span class="font-semibold text-white">NRP:</span> {{ $nrp }}</p>

            @if ($data)
                <p class="text-gray-400 mb-1"><span class="font-semibold text-white">Nama:</span> {{ $data['nama'] }}</p>
                <p class="text-gray-400 mb-1"><span class="font-semibold text-white">Jurusan:</span> {{ $data['jurusan'] }}</p>
                <p class="text-gray-400 mb-1"><span class="font-semibold text-white">Angkatan:</span> {{ $data['angkatan'] }}</p>
                <p class="text-gray-400"><span class="font-semibold text-white">Kampus:</span> {{ $data['kampus'] }}</p>
            @else
                <p class="text-gray-500">Data untuk NRP ini belum tersedia.</p>
            @endif
        </div>

        <h2 class="text-2xl font-bold text-white mb-8">Anggota Tim</h2>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($members as $i => $m)
                <article
                    onclick="openMemberModal({{ $i }})"
                    class="cursor-pointer p-8 bg-gray-950 rounded-3xl border border-gray-800 hover:border-white/50 hover:-translate-y-2 transition duration-500"
                >
                    <div class="w-16 h-16 bg-white/10 border border-white/30 rounded-2xl flex items-center justify-center text-2xl font-black text-white mb-6">
                        {{ $m['initials'] }}
                    </div>
                    <h3 class="text-lg font-bold text-white mb-1">{{ $m['name'] }}</h3>
                    <p class="text-sm font-mono text-gray-500 mb-2">{{ $m['nim'] }}</p>
                    <p class="text-sm text-gray-300 font-semibold mb-4">{{ $m['major'] }}</p>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        {{ $m['summary'] }}
                    </p>
                </article>
            @endforeach
        </div>

        <a href="{{ route('home') }}" class="inline-block mt-12 text-gray-400 hover:text-white transition">← Kembali ke Home</a>
    </div>

    {{-- Modal Detail Anggota --}}
    <div id="member-modal" class="fixed inset-0 z-[60] hidden items-center justify-center bg-black/80 backdrop-blur-sm px-6">
        <div class="bg-gray-950 border border-gray-800 rounded-3xl max-w-md w-full p-8 relative">
            <button onclick="closeMemberModal()" class="absolute top-4 right-4 text-gray-500 hover:text-white text-xl leading-none">×</button>

            <div id="modal-initials" class="w-16 h-16 bg-white/10 border border-white/30 rounded-2xl flex items-center justify-center text-2xl font-black text-white mb-6"></div>
            <h3 id="modal-name" class="text-xl font-bold text-white mb-1"></h3>
            <p id="modal-nim" class="text-sm font-mono text-gray-500 mb-2"></p>
            <p id="modal-major" class="text-sm text-gray-300 font-semibold mb-4"></p>
            <p id="modal-summary" class="text-sm text-gray-400 leading-relaxed"></p>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    const members = @json($members);

    const modal = document.getElementById('member-modal');

    function openMemberModal(index) {
        const m = members[index];
        document.getElementById('modal-initials').textContent = m.initials;
        document.getElementById('modal-name').textContent = m.name;
        document.getElementById('modal-nim').textContent = m.nim;
        document.getElementById('modal-major').textContent = m.major;
        document.getElementById('modal-summary').textContent = m.summary;

        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeMemberModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeMemberModal();
    });
</script>
@endpush


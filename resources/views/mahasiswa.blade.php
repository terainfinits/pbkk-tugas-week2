@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')

    <div class="section-container">
        <h1 class="text-3xl font-bold text-white mb-6">Detail Profil Mahasiswa</h1>

        {{-- Profile data card --}}
        <div class="card mb-16">
            <p class="profile-row"><span class="profile-row__label">NRP:</span> {{ $nrp }}</p>

            @if ($data)
                <p class="profile-row"><span class="profile-row__label">Nama:</span> {{ $data['nama'] }}</p>
                <p class="profile-row"><span class="profile-row__label">Jurusan:</span> {{ $data['jurusan'] }}</p>
                <p class="profile-row"><span class="profile-row__label">Angkatan:</span> {{ $data['angkatan'] }}</p>
                <p class="profile-row"><span class="profile-row__label">Kampus:</span> {{ $data['kampus'] }}</p>
            @else
                <p class="text-gray-500">Data untuk NRP ini belum tersedia.</p>
            @endif
        </div>

        <h2 class="text-2xl font-bold text-white mb-8">Anggota Tim</h2>

        {{-- Member cards grid --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($members as $i => $m)
                <article onclick="openMemberModal({{ $i }})" class="card--member">
                    <div class="member-avatar">{{ $m['initials'] }}</div>
                    <h3 class="text-lg font-bold text-white mb-1">{{ $m['name'] }}</h3>
                    <p class="text-sm font-mono text-gray-500 mb-2">{{ $m['nim'] }}</p>
                    <p class="text-sm text-gray-300 font-semibold mb-4">{{ $m['major'] }}</p>
                    <p class="text-sm text-gray-400 leading-relaxed">{{ $m['summary'] }}</p>
                </article>
            @endforeach
        </div>

        <a href="{{ route('home') }}" class="back-link mt-12">← Kembali ke Home</a>
    </div>

    {{-- Modal Detail Anggota --}}
    <div id="member-modal" class="modal-overlay">
        <div class="modal-box">
            <button onclick="closeMemberModal()" class="absolute top-4 right-4 text-gray-500 hover:text-white text-xl leading-none">×</button>

            <div id="modal-initials" class="member-avatar"></div>
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
    const modal   = document.getElementById('member-modal');

    function openMemberModal(index) {
        const m = members[index];
        document.getElementById('modal-initials').textContent = m.initials;
        document.getElementById('modal-name').textContent     = m.name;
        document.getElementById('modal-nim').textContent      = m.nim;
        document.getElementById('modal-major').textContent    = m.major;
        document.getElementById('modal-summary').textContent  = m.summary;

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

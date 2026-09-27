<nav class="app-navbar">
    <span class="app-navbar__brand">Profil Akademis Mahasiswa ITS</span>
    <div class="flex gap-6">
        <a href="{{ route('home') }}" class="app-navbar__link">Home</a>
        <a href="{{ route('dashboard.mahasiswa.detail', '5025241090') }}" class="app-navbar__link">Profil</a>
        <a href="{{ route('agent.idea') }}" class="app-navbar__link">Agentic AI</a>
        <a href="{{ route('dashboard.riwayat') }}" class="app-navbar__link">Riwayat Studi</a>
    </div>
</nav>

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // NRP default yang dipakai di halaman Home
    protected $defaultNrp = '5025241090';

    protected $members = [
        [
            'initials' => 'AZ',
            'name' => 'Addien Zafriyan Al Akhsan',
            'nim' => '5025241058',
            'major' => 'Teknik Informatika',
            'summary' => 'Fokus pada pengembangan backend dan arsitektur routing aplikasi.',
        ],
        [
            'initials' => 'AJ',
            'name' => 'Aji Zaenul Musthofa',
            'nim' => '5025241065',
            'major' => 'Teknik Informatika',
            'summary' => 'Menangani integrasi AI Agent dan desain antarmuka.',
        ],
        [
            'initials' => 'AA',
            'name' => 'Anak Agung Putu Arda N',
            'nim' => '5025241074',
            'major' => 'Teknik Informatika',
            'summary' => 'Bertanggung jawab pada autentikasi dan keamanan sistem.',
        ],
        [
            'initials' => 'WD',
            'name' => 'Willy Dava Nugraha',
            'nim' => '5025241090',
            'major' => 'Teknik Informatika',
            'summary' => 'Mengelola basis data dan optimasi query aplikasi.',
        ],
        [
            'initials' => 'AS',
            'name' => 'Abdullah Sultan Barizy',
            'nim' => '5025241092',
            'major' => 'Teknik Informatika',
            'summary' => 'Fokus pada testing dan quality assurance fitur.',
        ],
        [
            'initials' => 'RK',
            'name' => 'Raden Kurniawan Agung Fitrianto',
            'nim' => '5025241104',
            'major' => 'Teknik Informatika',    
            'summary' => 'Menangani deployment dan dokumentasi proyek.',
        ],
    ];

    protected $labs = [
        [
            'initials' => 'PKT',
            'name' => 'Lab. Pemodelan dan Komputasi Terapan',
            'summary' => 'Laboratorium ini mewadahi riset dan kerjasama industri di bidang pemodelan & simulasi, peramalan sains, optimasi, serta komputasional saintifik.',
            'link' => 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-pemodelan-dan-komputasi-terapan/',
        ],
        [
            'initials' => 'MCI',
            'name' => 'Lab. Manajemen Cerdas Informasi',
            'summary' => 'Laboratorium ini menawarkan bidang keahlian yang ditekankan pada kemampuan dalam menganalisis, mensintesa dan mengevaluasi proses bisnis dan sistem informasi pada sistem Enterprise, mengimplementasikan rekayasa pengetahuan, melakukan investigasi, pengujian, evaluasi terhadap prosedur standard dan tata kelola teknologi informasi, melakukan tata kelola proyek dan sumber daya manusia dan merancang dan mengimplementasikan solusi basis data terdistribusi dan teknologi Big Data.',
            'link' => 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-manajemen-cerdas-informasi/'
        ],
        [
            'initials' => 'ALPRO',
            'name' => 'Lab. Algoritma dan Pemrograman',
            'summary' => 'Laboratorium ini menawarkan bidang keahlian yang ditekankan untuk merancang dan menganalisa algoritma dalam menyelesaikan permasalahan secara efektif dan efisien, mampu mengaplikasikan model pemrograman, serta mampu memilih bahasa pemrograman untuk aplikasi yang sesuai.',
            'link' => 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-algoritma-dan-pemrograman/',
        ],
        [
            'initials' => 'GIGA',
            'name' => 'Lab. Grafika, Interaksi, Gim dan Analitik',
            'summary' => 'Laboratorium ini di bidang minat ini menawarkan bidang keahlian yang ditekankan pada kemampuan lulusan dalam mendesain, mengembangkan dan mendokumentasikan proses pembuatan game sesuai dengan standar. Serta membuat model 3 dimensi dan pemograman di dalam realitas virtual serta aplikasi realitas virtual 3 dimensi dengan menggunakan game engine.',
            'link' => 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-grafika-interaksi-dan-game/',
        ],
        [
            'initials' => 'NETICS',
            'name' => 'Lab. Teknologi Jaringan dan Keamanan Siber Cerdas',
            'summary' => 'Laboratorium di bidang minat ini menawarkan bidang keahlian yang ditekankan pada Kemampuan lulusan dalam membangun berbagai macam arsitektur jaringan sesuai standar teknologi terkini dan menerapkan keamanan jaringan.',
            'link' => 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-arsitektur-dan-jaringan-komputer/',
        ],
        [
            'initials' => 'KCV',
            'name' => 'Lab. Komputasi Cerdas dan Visi',
            'summary' => 'Di Laboratorium ini ditawarkan bidang keahlian yang ditekankan pada kemampuan lulusan dalam memanipulasi dan menganalisis data citra pada berbagai bidang aplikasi (a.l. biomedika, industri), kemampuan menerapkan metode sistem cerdas pada berbagai bidang aplikasi dan kemampuan memodelkan dan mengoptimasikan sistem nyata.',
            'link' => 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-komputasi-cerdas-dan-visi/',
        ],
        [
            'initials' => 'KBJ',
            'name' => 'Lab. Komputasi Berbasis Jaringan',
            'summary' => 'Di Laboratorium ini ditawarkan bidang keahlian yang ditekankan pada Kemampuan lulusan sarjana/magister/doktor dalam membangun infrastruktur jaringan yang aman, kemampuan membangun sistem grid, Kemampuan membangun aplikasi jaringan sesuai Standard dan Kemampuan membangun aplikasi multimedia berbasis jaringan.',
            'link' => 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-komputasi-berbasis-jaringan/',
        ],
        [
            'initials' => 'RPL',
            'name' => 'Lab. Rekayasa Perangkat Lunak',
            'summary' => 'Di Laboratorium ini ditawarkan bidang minat yang berfokus pada keahlian melakukan pengujian perangkat lunak, Kemampuan mengelola proyek perangkat lunak, Kemampuan mengurangi resiko kesalahan perangkat lunak, dan Kemampuan membuat perangkat lunak game.',
            'link' => 'https://www.its.ac.id/informatika/fasilitas/laboratorium/laboratorium-rekayasa-perangkat-lunak/',
        ],
    ];

    // Data statis mahasiswa 062413
    protected $mahasiswa = [
        '5025241090' => [
            'nama' => 'Willy Dava Nugraha',
            'jurusan' => 'S1 Teknik Informatika',
            'angkatan' => 2024,
            'kampus' => 'Institut Teknologi Sepuluh Nopember',
        ],
    ];

    protected $tema_agent = [
        'magentic' => 'Agent yang membantu mahasiswa dalam pembuatan kode.',
    ];

    public function home()
    {
        return view('home',[
            'labs' => $this->labs,
        ]);
    }

    public function showMahasiswa($nrp)
    {
        $data = $this->mahasiswa[$nrp] ?? null;

        return view('mahasiswa', [
            'nrp' => $nrp,
            'data' => $data,
            'members' => $this->members,
        ]);
    }

    public function agentIdea($tema = null)
    {
        $temaFinal = $tema ?? 'MAGENTIC';
        $penjelasan = $this->tema_agent[$tema] ?? 'Agent AI serba guna yang dapat membantu mahasiswa membuat kode.';

        return view('agent', [
            'tema' => $temaFinal,
            'penjelasan' => $penjelasan,
        ]);
    }

    public function hitungIpk($ip1, $ip2)
    {
        $ip1 = (float) $ip1;
        $ip2 = (float) $ip2;

        // Check range 0–4
        if ($ip1 < 0 || $ip1 > 4 || $ip2 < 0 || $ip2 > 4) {
            // Handle invalid IPK, e.g.:
            return response()->json([
                'error' => 'IPK harus antara 0 dan 4.',
            ], 422);
            // or redirect()->back()->withErrors([...]);
        }

        $jumlah = $ip1 + $ip2;
        $rata = round($jumlah / 2, 2);

        return view('ipk', [
            'ip1' => $ip1,
            'ip2' => $ip2,
            'jumlah' => $jumlah,
            'rata' => $rata,
        ]);
    }

    public function riwayatStudi(){
        $nrp = $this->defaultNrp;
        $data = $this->mahasiswa[$nrp];

        $riwayat = [
            ['semester' => 1, 'ip' => 3.88],
            ['semester' => 2, 'ip' => 3.58],
            ['semester' => 3, 'ip' => 3.83],
            ['semester' => 4, 'ip' => 3.61],
        ];

        return view('riwayat', [
            'nrp' => $nrp,
            'nama' => $data['nama'],
            'riwayat' => $riwayat,
        ]);
    }
}

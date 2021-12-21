@extends('layouts.master')

@section('title', 'Profil Dit. PPP')

@section('content')
    <div class="row justify-content-between">
        <div class="profil-1 card col-lg-3 scroll p-4" style="background-color: #fff;">
            <h5 style="text-align: center;"><b>Sejarah Direktorat Pengembangan Pendanaan Pembangunan</b></h5>
            <p style="text-align: justify;">Direktorat Pengembangan Pendanaan Pembangunan (Dit. PPP) dahulu bernama Direktorat Kerjasama Pemerintah-Swasta Rancang Bangun (Dit. KPSRB). Dit. PPP berganti nama pada Agustus 2020 sesuai dengan Peraturan Menteri Perencanaan Pemabangunan Nasional Republik Indonesia Nomor 9 Tahun 2019.</p>
            <h5 style="text-align: center;"><b>Tugas Pokok Direktorat Pengembangan Pendanaan Pembangunan</b></h5>
            <p style="text-align: justify;">Berdasarkan pada Permen PPN/Kepala Bappenas Nomor 14 Tahun 2020 Direktorat Pengembangan Pendanaan dan Pembangunan memiliki Tugas Pokok melaksanakan penyiapan bahan pengoordinasian, perumusan dan pelaksanaan kebijakan, serta pemantauan, evaluasi, dan pengendalian perencanaan pembangunan di bidang pengembangan pendanaan pembangunan.</p>
            <h5 style="text-align: center;"><b>Fungsi Direktorat Pengembangan Pendanaan Pembangunan</b></h5>
            <p style="text-align: justify;">Berdasarkan pada Permen PPN/Kepala Bappenas Nomor 14 Tahun 2020 Direktorat Pengembangan Pendanaan dan Pembangunan memiliki Tugas Pokok melaksanakan penyiapan bahan pengoordinasian, perumusan dan pelaksanaan kebijakan, serta pemantauan, evaluasi, dan pengendalian perencanaan pembangunan di bidang pengembangan pendanaan pembangunan.</p>
            <ol>
                <li>
                    Pengkajian kebijakan pengembangan pendanaan pembangunan nasional bersumber dari APBN dan Non-APBN yang melibatkan pemerintah, masyarakat dan pihak swasta;
                </li>
                <li>
                    Penyusunan rencana pengembangan pendanaan pembangunan nasional bersumber dari APBN dan Non-APBN yang melibatkan pemerintah, masyarakat, dan pihak swasta;
                </li>
                <li>
                    Pengoordinasian pengembangan pendanaan pembangunan nasional bersumber dari APBN dan Non-APBN yang melibatkan pemerintah, masyarakat dan pihak swasta;
                </li>
                <li>
                    Penyiapan usulan pengembangan pendanaan pembangunan nasional bersumber dari APBN dan Non-APBN yang melibatkan pemerintah, masyarakat, dan pihak swasta; Kementerian/Lembaga/Daerah;
                </li>
                <li>
                    Pengoordinasian dan pengendalian rencana pengembangan pendanaan pembangunan nasional bersumber dari APBN dan Non-APBN yang melibatkan pemerintah, masyarakat dan pihak swasta dalam rangka sinergi antara RKP dan RAPBN;
                </li>
                <li>
                    Pemantauan, evaluasi, pengendalian, dan penilaian kinerja pelaksanaan kerjasama rencana pengembangan pendanaan pembangunan nasional bersumber dari APBN dan Non-APBN yang melibatkan pemerintah, masyarakat, dan pihak swasta;
                </li>
                <li>
                    Penyusunan rencana kerja pelaksanaan tugas dan fungsinya serta evaluasi dan pelaporan pelaksanaannya;
                </li>
                <li>
                    Pengoordinasian pelaksanaan kegiatan pejabat fungsional sesuai penugasannya; dan
                </li>
                <li>
                    Pelaksanaan fungsi lain yang diberikan oleh Deputi Bidang Pendanaan Pembangunan. 
                </li>
            </ol>
        </div>
        <div class="profil-2 card col-lg-9 p-4" style="background-color: #fff;">
            <h5 style="text-align: center;"><b>Publikasi Terbaru</b></h5>
            <div class="profil-card">
                <a href="/publikasi-ppp"><img src="{{ asset('assets/images/pppbook.png') }}" alt=""></a>
            </div>
            <div class="profil-card">
                <a href="/publikasi-newsletter"><img src="{{ asset('assets/images/newsletter.png') }}" alt=""></a>
            </div>
            <div class="profil-card">
                <a href="/publikasi-majalah"><img src="{{ asset('assets/images/majalah.png') }}" alt=""></a>
            </div>
        </div>
    </div>
@endsection
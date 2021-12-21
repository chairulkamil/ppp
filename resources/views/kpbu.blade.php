@extends('layouts.master')

@section('title', 'KPBU')

@section('content')
    <div class="row p-5" style="width: 100%;">
        <div class="kpbu scroll card col-lg-4 col-md-12" style="line-height: 1.25rem;">
            <ul>
                <li><a href="/apa-itu-kpbu">Apa itu KPBU ?</a></li>
                <li><a href="/kesalahan-umum-kpbu">Apa kesalahpahaman umum tentang KPBU ?</a></li>
                <li><a href="/sektor-kpbu">Apa saja sektor infrastruktur yang dapat dikerjasamakan melalui KPBU ?</a></li>
                <li><a href="/skema-kpbu">Mengapa menggunakan skema KPBU ?</a>  </li>
                <li><a href="/pihak-kpbu">Siapa pihak yang menggunakan KPBU ?</a>  </li>
                <li><a href="/penerapan-kpbu">Pada proyek mana KPBU dapat diterapkan ?</a>  </li>
                <li><a href="/pengembalian-investasi">Kapan Badan Usaha dapat mulai menerima pengembalian investasi ?</a>  </li>
                <li><a href="/perbedaan-kpbu">Bagaimana KPBU berbeda dengan Pengadaan Barang/Jasa dan Privatisasi dalam penyediaan infrastruktur ?</a>  </li>
                <li><a href="/skema-pengembalian">Bagaimana skema pengembalian investasi KPBU ?</a> </li>
            </ul>
        </div>
        <div class="kpbu2 card col-lg-8 col-md-12 scroll">
            @yield('content-kpbu')
        </div> 
    </div>
@endsection
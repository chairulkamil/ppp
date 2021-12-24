@extends('layouts.master')

@section('title', 'KPBU')

@section('content')
    <nav aria-label="breadcrumb" style="padding: 3rem 0rem 0rem 8rem; margin-bottom: -2rem;">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home"></i></a></li>
            <li class="breadcrumb-item active-menu" aria-current="page">KPBU</li>
        </ol>
    </nav>

    <div class="row p-5" style="width: 100%;">
        <div class="kpbu scroll card col-lg-4 col-md-12" style="line-height: 1.25rem;">
            <ul>
                <li>
                    <a href="{{ url('apa-itu-kpbu') }}"  class="{{ Request::segment(1) === 'apa-itu-kpbu' ? 'active' : null }}">Apa itu KPBU ?</a>
                </li>
                <li>
                    <a href="{{ url('kesalahan-umum-kpbu') }}" class="{{ Request::segment(1) === 'kesalahan-umum-kpbu' ? 'active' : null }}">Apa kesalahpahaman umum tentang KPBU ?</a>
                </li>
                <li>
                    <a href="{{ url('sektor-kpbu') }}" class="{{ Request::segment(1) === 'sektor-kpbu' ? 'active' : null }}">Apa saja sektor infrastruktur yang dapat dikerjasamakan melalui KPBU ?</a>
                </li>
                <li>
                    <a href="/skema-kpbu" class="{{ Request::segment(1) === 'skema-kpbu' ? 'active' : null }}">Mengapa menggunakan skema KPBU ?</a>
                </li>
                <li>
                    <a href="/pihak-kpbu" class="{{ Request::segment(1) === 'pihak-kpbu' ? 'active' : null }}">Siapa pihak yang menggunakan KPBU ?</a>
                </li>
                <li>
                    <a href="/penerapan-kpbu" class="{{ Request::segment(1) === 'penerapan-kpbu' ? 'active' : null }}">Pada proyek mana KPBU dapat diterapkan ?</a>
                </li>
                <li>
                    <a href="/pengembalian-investasi" class="{{ Request::segment(1) === 'pengembalian-investasi' ? 'active' : null }}">Kapan Badan Usaha dapat mulai menerima pengembalian investasi ?</a>
                </li>
                <li>
                    <a href="/perbedaan-kpbu" class="{{ Request::segment(1) === 'perbedaan-kpbu' ? 'active' : null }}">Bagaimana KPBU berbeda dengan Pengadaan Barang/Jasa dan Privatisasi dalam penyediaan infrastruktur ?</a>
                </li>
                <li>
                    <a href="/skema-pengembalian" class="{{ Request::segment(1) === 'skema-pengembalian' ? 'active' : null }}">Bagaimana skema pengembalian investasi KPBU ?</a>
                </li>
            </ul>
        </div>
        <div class="kpbu2 card col-lg-8 col-md-12 scroll">
            @yield('content-kpbu')
        </div> 
    </div>
@endsection
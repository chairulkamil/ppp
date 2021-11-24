@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-6 col-md-12">
      <div class="centered-word">
        <p ><b>Selamat Datang Di Website Resmi Direktorat<br>Pengembangan Pendanaan Pembangunan</b></p><br>
        <p style="width: 100%;"><b></b></p>
        <div class="row">
          <div class="col">
            <a href="/home" class="badge rounded-pill bg-secondary">Profil</a>
          </div>
          <div class="col">
            <a href="/kpbu" class="badge rounded-pill bg-light text-dark border border-dark">KPBU</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-12">
      <div class="centered-pict">
        <img src="{{ asset('assets/images/home.png') }}" alt="">
      </div>
    </div>
  </div>
@endsection
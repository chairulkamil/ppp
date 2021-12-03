@extends('layouts.master')

@section('content')
<div class="container" style="min-height: 40rem;">
  <div class="row" style="padding-top: 7rem;">
    <div class="col-lg-6 col-md-12">
      <div class="centered-word">
        <p ><b>Selamat Datang Di Website Resmi Direktorat<br>Pengembangan Pendanaan Pembangunan</b></p><br>
        <div class="row ">
          <div class="col">
            <a href="#" type="button" style="margin-right: -9.3rem; background-color: #5DADD1;" class="btn btn-secondary rounded-pill">Tentang Kami</a>
          </div>
          <div class="col">
            <a href="/apa-itu-kpbu" type="button" style="margin-left: -12.5rem;" class="btn btn-light rounded-pill border border-dark">KPBU</a>
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
</div>


  <div class="container">
    <div class="card border-0" style="max-width: 100%;">
      <div class="card-header" style="background-color: #017EB7; font-size: 1.1rem; color: white;">
        <b>Proyek Yang Sudah Terlaksana</b>
      </div>
      <div class="card-body" style="background-color: #F2F8FA; margin-right: -8rem;">
        <div class="row justify-content-around" style="padding-top: 2rem;">
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/kpbu/jakarta-elevated.jpg') }}" alt="" style="max-width: 17.95rem; max-height: 11rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem !important; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">Jakarta Cikampek II Elevated</a>
            </div>
          </div>
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/kpbu/kereta.jpg') }}" alt="" style="max-width: 17.95rem; max-height: 11rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem !important; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">Kereta Api Makasar - Parepare</a>
            </div>
          </div>
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/kpbu/palapa-ring.jpg') }}" alt="" style="max-width: 17.95rem; max-height: 11rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem !important; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">Palapa Ring</a>
            </div>
          </div>
        </div>
        <div class="row justify-content-around" style="padding-top: 4rem;">
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/kpbu/pltu-jateng.jpg') }}" alt="" style="max-width: 17.95rem; max-height: 11rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem !important; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">PLTU Jawa Tengah</a>
            </div>
          </div>
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/kpbu/satelit-multifungsi.jpg') }}" alt="" style="max-width: 17.95rem; max-height: 11rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem !important; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">Satelit Multifungsi</a>
            </div>
          </div>
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/kpbu/spam-umbulan.jpg') }}" alt="" style="max-width: 17.95rem; max-height: 11rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem !important; border-radius: 0px 0px 30px 30px !important;  background-color: #102B4F;">SPAM Umbulan Jawa Timur</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>
  <div class="container">
    <div class="card border-0" style="max-width: 100%;">
      <div class="card-header" style="background-color: #017EB7; font-size: 1.1rem; color: white;">
        <b>Skema KPBU</b>
      </div>
      <div class="card-body" style="background-color: #F2F8FA; margin-right: -8rem;">
        <h5 style="text-align: center; margin-left: -8rem; padding-bottom: 0.625rem;">Skema Solicited</h5>
        <div class="row" style="width: 100%;">
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 15%; height: 4.063rem; background-color: #9EB2FD; border-radius: 40px;">
            Perencanaan
          </button>
          <div class="d-flex p-3" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 15%; height: 4.063rem; background-color: #9DE09D; border-radius: 40px;">
            Persiapan
          </button>
          <div class="d-flex p-3" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 15%; height: 4.063rem; background-color: #F9DD8D; border-radius: 40px;">
            Transaksi
          </button>
          <div class="d-flex p-3" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 15%; height: 4.063rem; background-color: #F79B9B; border-radius: 40px;">
            Konstruksi
          </button>
          <div class="d-flex p-3" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 15%; height: 4.063rem; background-color: #DABDFF; border-radius: 40px;">
            Operasi
          </button>
        </div>


        <h5 style="text-align: center; margin-left: -7.813rem; padding: 0.925rem; 0rem; 0.325rem; 0rem;">Skema Unsolicited</h5>
        <div class="row" style="width: 100%; padding-left: 11rem;">
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 15%; height: 4.063rem; background-color: #9EB2FD; border-radius: 40px;">
            Proposal Penyiapan
          </button>
          <div class="d-flex p-3" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 15%; height: 4.063rem; background-color: #9DE09D; border-radius: 40px;">
            Transaksi
          </button>
          <div class="d-flex p-3" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 15%; height: 4.063rem; background-color: #F9DD8D; border-radius: 40px;">
            Konstruksi
          </button>
          <div class="d-flex p-3" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 15%; height: 4.063rem; background-color: #F79B9B; border-radius: 40px;">
            Operasi
          </button>
      </div>
    </div>
  </div>


  <br>
  <br>
  <br>
  <div class="container">
    <div class="card border-0" style="max-width: 100%;">
      <div class="card-header" style="background-color: #017EB7; font-size: 1.1rem; color: white;">
        <b>Publikasi Terbaru</b>
      </div>
      <div class="card-body" style="background-color: #F2F8FA; margin-right: -8rem;">
        <div class="row justify-content-around" style="padding-top: 2rem;">
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/pppbook.png') }}" alt="" style="max-width: 17.95rem; height: 23rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem !important; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">PPP Book</a>
            </div>
          </div>
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/newsletter.png') }}" alt="" style="max-width: 17.95rem; height: 23rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem !important; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">Newsletter</a>
            </div>
          </div>
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/majalah.png') }}" alt="" style="max-width: 17.95rem; height: 23rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem !important; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F; ">Majalah</a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>
  <div class="container">
    <div class="card border-0" style="max-width: 100%;">
      <div class="card-header" style="background-color: #017EB7; font-size: 1.1rem; color: white;">
        <b>Link Terkait</b>
      </div>
      <div class="card-body" style="background-color: #F2F8FA; margin-right: -8rem;">
        <div class="row justify-content-around" style="padding-top: 2rem;">
          <div style="width: 25%;">
            <div>
              <img src="{{ asset('assets/images/kantor-bersama/1.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;">
            </div>
          </div>
          <div style="width: 25%;">
            <div>
              <img src="{{ asset('assets/images/kantor-bersama/2.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;">
            </div>
          </div>
          <div style="width: 25%;">
            <div>
              <img src="{{ asset('assets/images/kantor-bersama/3.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;">
            </div>
          </div>
          <div style="width: 25%;">
            <div>
              <img src="{{ asset('assets/images/kantor-bersama/4.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;">
            </div>
          </div>
        </div>
        <div class="row justify-content-around" style="padding-top: 4rem;">
          <div style="width: 25%;">
            <div>
              <img src="{{ asset('assets/images/kantor-bersama/5.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important; ">
            </div>
          </div>
          <div style="width: 25%;">
            <div>
              <img src="{{ asset('assets/images/kantor-bersama/6.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;">
            </div>
          </div>
          <div style="width: 25%;">
            <div>
              <img src="{{ asset('assets/images/kantor-bersama/7.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;">
            </div>
          </div>
          <div style="width: 25%;">
            <div>
              <img src="{{ asset('assets/images/kantor-bersama/8.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @section('modal')
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  @endsection
@endsection
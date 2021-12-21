@extends('layouts.master')

@section('title', 'Pengembangan Pendanaan Pembangunan')


@section('content')
<div class="container" style="min-height: 40rem;">
  <div class="row" style="padding-top: 7rem;">
    <div class="col-lg-6 col-md-12">
      <div class="centered-word">
        <p ><b>Selamat Datang Di Website Resmi Direktorat<br>Pengembangan Pendanaan Pembangunan</b></p><br>
        <div class="row ">
          <div class="col">
            <a href="/profil" type="button" style="margin-right: -9.3rem; background-color: #5DADD1;" class="btn btn-secondary rounded-pill">Tentang Kami</a>
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


  <div class="container terlaksana">
    <div class="card border-0" style="max-width: 100%;">
      <div class="card-header" style="background-color: #017EB7; font-size: 1.1rem; color: white;">
        <b>Proyek Yang Sudah Terlaksana</b>
      </div>
      <div class="card-body terlaksana-margin" style="background-color: #F2F8FA; margin-right: -8rem;">
        <div class="row justify-content-around terlaksana-card" style="padding-top: 2rem;">
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/kpbu/jakarta-elevated.jpg') }}" alt="" style="width: 17.95rem; max-height: 11rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">Jakarta Cikampek II Elevated</a>
            </div>
          </div>
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/kpbu/kereta.jpg') }}" alt="" style="width: 17.95rem; max-height: 11rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">Kereta Api Makasar - Parepare</a>
            </div>
          </div>
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/kpbu/palapa-ring.jpg') }}" alt="" style="width: 17.95rem; max-height: 11rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">Palapa Ring</a>
            </div>
          </div>
        </div>
        <div class="row justify-content-around terlaksana-card" style="padding-top: 4rem;">
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/kpbu/pltu-jateng.jpg') }}" alt="" style="width: 17.95rem; max-height: 11rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">PLTU Jawa Tengah</a>
            </div>
          </div>
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/kpbu/satelit-multifungsi.jpg') }}" alt="" style="width: 17.95rem; max-height: 11rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">Satelit Multifungsi</a>
            </div>
          </div>
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/kpbu/spam-umbulan.jpg') }}" alt="" style="width: 17.95rem; max-height: 11rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="#" class="btn btn-primary border-0" style="width: 17.95rem; border-radius: 0px 0px 30px 30px !important;  background-color: #102B4F;">SPAM Umbulan Jawa Timur</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>
  <br>
  <div class="container skema">
    <div class="card border-0" style="max-width: 100%;">
      <div class="card-header" style="background-color: #017EB7; font-size: 1.1rem; color: white;">
        <b>Skema KPBU</b>
      </div>
      <div class="card-body" style="background-color: #F2F8FA; margin-right: -8rem;">
        <h5 style="text-align: center; margin-left: -8rem; padding-bottom: 0.625rem;">Skema Solicited</h5>
        <div class="row" style="width: 100%;">
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#perencanaanSoli" style="width: 15%; height: 4.063rem; background-color: #9EB2FD; border-radius: 40px;">
            Perencanaan
          </button>
          <div class="d-flex p-3 panah" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#persiapanSoli" style="width: 15%; height: 4.063rem; background-color: #9DE09D; border-radius: 40px;">
            Persiapan
          </button>
          <div class="d-flex p-3 panah" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#transaksiSoli" style="width: 15%; height: 4.063rem; background-color: #F9DD8D; border-radius: 40px;">
            Transaksi
          </button>
          <div class="d-flex p-3 panah" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#konstruksiSoli" style="width: 15%; height: 4.063rem; background-color: #F79B9B; border-radius: 40px;">
            Konstruksi
          </button>
          <div class="d-flex p-3  panah" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#operasiSoli" style="width: 15%; height: 4.063rem; background-color: #DABDFF; border-radius: 40px;">
            Operasi
          </button>
        </div>


        <h5 style="text-align: center; margin-left: -7.813rem; padding: 0.925rem; 0rem; 0.325rem; 0rem;">Skema Unsolicited</h5>
        <div class="row skema-padding" style="width: 100%; padding-left: 11rem;">
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#proposalPenyiapan" style="width: 15%; height: 4.063rem; background-color: #9EB2FD; border-radius: 40px;">
            Proposal Penyiapan
          </button>
          <div class="d-flex p-3 panah" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#transaksiUnsoli" style="width: 15%; height: 4.063rem; background-color: #9DE09D; border-radius: 40px;">
            Transaksi
          </button>
          <div class="d-flex p-3 panah" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#konstruksiUnsoli" style="width: 15%; height: 4.063rem; background-color: #F9DD8D; border-radius: 40px;">
            Konstruksi
          </button>
          <div class="d-flex p-3 panah" style="width: 4.11%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M13 5l7 7-7 7M5 5l7 7-7 7" />
            </svg>
          </div>
          <button type="button" class="btn btn-primary border-0" data-bs-toggle="modal" data-bs-target="#operasiUnsoli" style="width: 15%; height: 4.063rem; background-color: #F79B9B; border-radius: 40px;">
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
      <div class="card-body publikasi" style="background-color: #F2F8FA; margin-right: -8rem;">
        <div class="row justify-content-around" style="padding-top: 2rem;">
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/pppbook.png') }}" alt="" style="width: 17.95rem; height: 23rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="/publikasi-ppp" class="btn btn-primary border-0" style="width: 17.95rem; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">PPP Book</a>
            </div>
          </div>
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/newsletter.png') }}" alt="" style="width: 17.95rem; height: 23rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="/publikasi-newsletter" class="btn btn-primary border-0" style="width: 17.95rem; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F;">Newsletter</a>
            </div>
          </div>
          <div style="width: 33%;">
            <div>
              <img src="{{ asset('assets/images/majalah.png') }}" alt="" style="width: 17.95rem; height: 23rem;  border-radius: 30px 30px 0px 0px !important;">
            </div>
            <div>
              <a href="publikasi-majalah" class="btn btn-primary border-0" style="width: 17.95rem; border-radius: 0px 0px 30px 30px !important; background-color: #102B4F; ">Majalah</a>
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
      <div class="card-body link-margin" style="background-color: #F2F8FA; margin-right: -8rem;">
        <div class="row justify-content-around" style="padding-top: 2rem;">
          <div style="width: 25%;">
            <div>
              <a href="https://www.ekon.go.id/"><img src="{{ asset('assets/images/kantor-bersama/1.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;"></a>
            </div>
          </div>
          <div style="width: 25%;">
            <div>
              <a href="https://maritim.go.id/"><img src="{{ asset('assets/images/kantor-bersama/2.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;"></a>
            </div>
          </div>
          <div style="width: 25%;">
            <div>
              <a href="https://www.kemendagri.go.id/"><img src="{{ asset('assets/images/kantor-bersama/3.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;"></a>
            </div>
          </div>
          <div style="width: 25%;">
            <div>
              <a href="http://kpbu.djppr.kemenkeu.go.id/"><img src="{{ asset('assets/images/kantor-bersama/4.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;"></a>
            </div>
          </div>
        </div>
        <div class="row justify-content-around" style="padding-top: 4rem;">
          <div style="width: 25%;">
            <div>
              <a href="https://www.bappenas.go.id/id/"><img src="{{ asset('assets/images/kantor-bersama/5.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important; "></a>
            </div>
          </div>
          <div style="width: 25%;">
            <div>
              <a href="http://www.bkpm.go.id/"><img src="{{ asset('assets/images/kantor-bersama/6.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;"></a>
            </div>
          </div>
          <div style="width: 25%;">
            <div>
              <a href="http://www.lkpp.go.id/v3/"><img src="{{ asset('assets/images/kantor-bersama/7.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;"></a>
            </div>
          </div>
          <div style="width: 25%;">
            <div>
              <a href="https://ptpii.co.id/"><img src="{{ asset('assets/images/kantor-bersama/8.png') }}" alt="" style="max-width: 8rem; max-height: 6rem;  border-radius: 30px !important;"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @section('modal')

  {{-- modal perencanaanSoli --}}
  <div class="modal fade" id="perencanaanSoli" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Perencanaan Solicited</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="dataTable table table-bodered table-hover table-striped">
            <thead>
              <tr>
                <th>Identifikasi</th>
                <th>Studi Pendahuluan</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($perencanaanSoli as $data)
              <tr>
                @if($data->identifikasi == null)
                <td>-</td>
                @else
                <td>{{ $data->identifikasi }}</td>
                @endif
                @if($data->studi_pendahuluan == null)
                <td>-</td>
                @else
                <td>{{ $data->studi_pendahuluan }}</td>
                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

{{-- modal persiapanSoli --}}

  <div class="modal fade" id="persiapanSoli" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Persiapan Solicited</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="dataTable table table-bodered table-hover table-striped">
            <thead>
              <tr>
                <th>Outline Business Case</th>
                <th>Final Business Case</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($penyiapanSoli as $penyiapan)
              <tr>
                @if($penyiapan->obc == null)
                <td>-</td>
                @else
                <td>{{ $penyiapan->obc }}</td>
                @endif
                @if($penyiapan->fbc == null)
                <td>-</td>
                @else
                <td>{{ $penyiapan->fbc }}</td>
                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


{{-- modal transaksi soli --}}

  <div class="modal fade" id="transaksiSoli" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Transaksi Solicited</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="dataTable table table-bodered table-hover table-striped">
            <thead>
              <tr>
                <th>Pre-Kualifikasi</th>
                <th>Request For Proposal</th>
                <th>Bid Award</th>
                <th>Agreement Signing</th>
                <th>Financial Close</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transaksiSoli as $transaksi)
              <tr>
                @if($transaksi->pre_kualifikasi == null)
                <td>-</td>
                @else
                <td>{{ $transaksi->pre_kualifikasi }}</td>
                @endif
                @if($transaksi->request_proposal == null)
                <td>-</td>
                @else
                <td>{{ $transaksi->request_proposal }}</td>
                @endif
                @if($transaksi->bid_award == null)
                <td>-</td>
                @else
                <td>{{ $transaksi->bid_award }}</td>
                @endif
                @if($transaksi->agreement_signing == null)
                <td>-</td>
                @else
                <td>{{ $transaksi->agreement_signing }}</td>
                @endif
                @if($transaksi->financial_close == null)
                <td>-</td>
                @else
                <td>{{ $transaksi->financial_close }}</td>
                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

{{-- modal KonstruksiSoli --}}

  <div class="modal fade" id="konstruksiSoli" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Konstruksi Solicited</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="dataTable table table-bodered table-hover table-striped">
            <thead>
              <tr>
                <th>Konstruksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($konstruksiSoli as $konstruksi)
              <tr>
                @if($konstruksi->konstruksi == null)
                <td>-</td>
                @else
                <td>{{ $konstruksi->konstruksi }}</td>
                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>



{{-- modal operasiSoli --}}

  <div class="modal fade" id="operasiSoli" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Operasi Solicited</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="dataTable table table-bodered table-hover table-striped">
            <thead>
              <tr>
                <th>Operasi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($operasiSoli as $operasi)
              <tr>
                @if($operasi->operasi == null)
                <td>-</td>
                @else
                <td>{{ $operasi->operasi }}</td>
                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


{{-- modal proposalPenyiapan soli --}}

<div class="modal fade" id="proposalPenyiapan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Proposal Penyiapan Unsolicited</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="dataTable table table-bodered table-hover table-striped">
          <thead>
            <tr>
              <th>Pengajuan Dokumen Pra-FS</th>
              <th>Evaluasi Dokumen Pra-FS</th>
              <th>Penyusunan & Pengajuan Feasibility Study</th>
              <th>Evaluasi Feasibility Study</th>
              <th>Approval Letter</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($proposalPenyiapan as $proposal)
            <tr>
              @if($proposal->pengajuan_dokumen == null)
              <td>-</td>
              @else
              <td>{{ $proposal->pengajuan_dokumen }}</td>
              @endif
              @if($proposal->evaluasi_dokumen == null)
              <td>-</td>
              @else
              <td>{{ $proposal->evaluasi_dokumen }}</td>
              @endif
              @if($proposal->penyusunan_feasibility == null)
              <td>-</td>
              @else
              <td>{{ $proposal->penyusunan_feasibility }}</td>
              @endif
              @if($proposal->evaluasi_feasibility == null)
              <td>-</td>
              @else
              <td>{{ $proposal->evaluasi_feasibility }}</td>
              @endif
              @if($proposal->approval_letter == null)
              <td>-</td>
              @else
              <td>{{ $proposal->approval_letter }}</td>
              @endif
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



{{-- modal transaksi soli --}}

<div class="modal fade" id="transaksiUnsoli" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Transaksi Unsolicited</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="dataTable table table-bodered table-hover table-striped">
          <thead>
            <tr>
              <th>Pre-Kualifikasi</th>
              <th>Request For Proposal</th>
              <th>Bid Award</th>
              <th>Agreement Signing</th>
              <th>Financial Close</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($transaksiUnsoli as $transaksiU)
            <tr>
              @if($transaksiU->prekualifikasi == null)
              <td>-</td>
              @else
              <td>{{ $transaksiU->prekualifikasi }}</td>
              @endif
              @if($transaksiU->request_proposal == null)
              <td>-</td>
              @else
              <td>{{ $transaksiU->request_proposal }}</td>
              @endif
              @if($transaksiU->bid_award == null)
              <td>-</td>
              @else
              <td>{{ $transaksiU->bid_award }}</td>
              @endif
              @if($transaksiU->agreement_signing == null)
              <td>-</td>
              @else
              <td>{{ $transaksiU->agreement_signing }}</td>
              @endif
              @if($transaksiU->financial_close == null)
              <td>-</td>
              @else
              <td>{{ $transaksiU->financial_close }}</td>
              @endif
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



{{-- modal KonstruksiUnsoli --}}

<div class="modal fade" id="konstruksiUnsoli" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konstruksi Unsolicited</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="dataTable table table-bodered table-hover table-striped">
          <thead>
            <tr>
              <th>Konstruksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($konstruksiUnsoli as $konstruksiU)
            <tr>
              @if($konstruksiU->konstruksi == null)
              <td>-</td>
              @else
              <td>{{ $konstruksiU->konstruksi }}</td>
              @endif
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



{{-- modal KonstruksiUnsoli --}}

<div class="modal fade" id="operasiUnsoli" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Operasi Unsolicited</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="dataTable table table-bodered table-hover table-striped">
          <thead>
            <tr>
              <th>Operasi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($operasiUnsoli as $operasiU)
            <tr>
              @if($operasiU->operasi == null)
              <td>-</td>
              @else
              <td>{{ $operasiU->operasi }}</td>
              @endif
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


  @endsection
@endsection


@push('after-script')
<script>
    $(document).ready( function () {
        var table = $('.dataTable').DataTable( {
            pageLength : 5,
            lengthMenu: [[5, 10, 20], [5, 10, 20]]
        } )
    } );
</script>
@endpush
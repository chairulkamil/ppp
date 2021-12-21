<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/DataTables/datatables.min.css') }}"/>
    
    <title>PPP Bappenas - @yield('title')</title>
  </head>
  <body>
    <!--navbar start-->
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light header-nav fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand"  href="/"><img src="{{ asset('assets/images/logo-bappenas.png') }}" style="width: 3.1rem;" height="auto">
          </a>
          <a href="/">
            <h5 style="font-size: 0.62rem; color: #EAEDF0 !important;"><b>
              DIREKTORAT PENGEMBANGAN PENDANAAN PEMBANGUNAN <br />
              KEMENTRIAN PERENCANAAN PEMBANGUNAN NASIONAL / <br />
              BADAN PERENCANAAN PEMBANGUNAN NASIONAL
            </b></h5>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
            <ul class="navbar-nav me-1 mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" style="color: #EAEDF0 !important;" aria-current="page" href="/profil">PROFIL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #EAEDF0 !important;">KANTOR BERSAMA</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: #EAEDF0 !important;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PUBLIKASI
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #282B35">
                  <li><a class="dropdown-item" style="color: #EAEDF0 !important;" href="/publikasi-ppp">PPP Book</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" style="color: #EAEDF0 !important;" href="/publikasi-newsletter">Newsletter</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" style="color: #EAEDF0 !important;" href="/publikasi-majalah">Majalah</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #EAEDF0 !important;" href="/apa-itu-kpbu" tabindex="-1" aria-disabled="true">KPBU</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!--navbar end-->



{{-- content --}}
<div class="content-wrapper">
  <div class="content" style="background-color: #F2F8FA !important;">
    @yield('content')
  </div>
  @yield('modal')
</div>
{{-- content --}}
















  <footer class="footer text-center text-lg-start"  style="background-color: #01347C; width: 100%;">
    <!-- Grid container -->
    <div class="container" style="padding: 1.25rem; 0.6rem 0rem 0.6rem;">
      <!--Grid row-->
      <div class="foot row" style="height: 4rem;">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0 text-uppercase " style="font-size: 0.72rem; color:#fff;">
          <a href="/" style="font-size: 0.7rem !important; color :white;">
            <span><b>direktorat pengembangan pendanaan pembangunan</b> </span><br>
            <span><b>kementrian perencanaan pembangunan nasional /</b> </span><br>
            <span><b>badan perencanaan pembangunan nasional (bappenas)</b></span>
          </a>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="location col-lg-4 col-md-12 mb-4 mb-md-0">
          <div style="height: 0.9rem;">
            <a href="https://www.google.co.id/maps/place/Jl.+Taman+Suropati+No.2,+RT.5%2FRW.5,+Menteng,+Kec.+Menteng,+Kota+Jakarta+Pusat,+Daerah+Khusus+Ibukota+Jakarta+10310/@-6.2012966,106.8205379,3895m/data=!3m1!1e3!4m5!3m4!1s0x2e69f417271b6ddf:0x42803916192efcf3!8m2!3d-6.2008991!4d106.8324028?hl=id" style="font-size: 0.75rem; !important; color:#fff; font-family: sans;">
              <img src="{{ asset('assets/images/plane.png') }}" alt="" class="logo-2">
                Jalan Taman Suropati No.2 Jakarta 10310
            </a>
          </div>
          <div  style="height: 0.9rem;">
            <a href="mailto:someone@yoursite.com" style="font-size: 0.75rem; !important; color:#fff; padding-top: 0.56rem;">
              <img src="{{ asset('assets/images/email.png') }}" alt="" class="logo-2">
                  ppp.bappenas.go.id
            </a>
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="menu-sm col-lg-4 col-md-12 mb-4 mb-md-0">
            <div class="logo-md">
              <a href="https://www.facebook.com/kpbuindonesia/"><img src="{{ asset('assets/images/fb.png') }}" class="logo"></a>
              <a href="https://twitter.com/kpbuindonesia"><img src="{{ asset('assets/images/tw.png') }}" class="logo"></a>
            </div>
            <div class="menu-foot" style=" color:#fff; height: 0.9rem;">
              <a href="#" style="margin: 0rem !important; font-size: 0.75rem !important; color:#fff;">Peta Situs</a>
              <span style="margin: 0rem 0.18rem 0rem 0.18rem !important; font-size: 0.75rem !important;">|</span>
              <a href="#" style="margin: 0rem !important;font-size: 0.75rem !important; color:#fff;">Beranda</a>
              <span style="margin: 0rem 0.18rem 0rem 0.18rem !important; font-size: 0.75rem !important;">|</span>
              <a href="#" style="margin: 0rem !important; font-size: 0.75rem !important; color:#fff;">FAQs</a>
            </div>
            <div class="menu-foot2" style="height: 0.9rem;">
              <a href="#" style="margin: 0rem !important; font-size: 0.75rem !important; color:#fff;">Kontak Kami</a>
            </div>
        </div>
        <!--Grid column-->
        
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2); font-size: 0.6rem;">
      © Kementrian Perencanaan Pembangunan Nasional, Republik Indonesia
    </div>
    <!-- Copyright -->
  </footer>

    @stack('before-script')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/DataTables/datatables.min.js') }}"></script>

    @stack('page-script')

    @stack('after-script')

  </body>
</html>
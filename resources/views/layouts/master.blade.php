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
    <title>Hello, world!</title>
  </head>
  <body>
    <!--navbar start-->
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light header-nav fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand"  href="#"><img src="{{ asset('assets/images/logo-bappenas.png') }}" width="50px" height="auto">
            </a>
            <h5 style="font-size: 10px">
            <b>
            DIREKTORAT PENGEMBANGAN PENDANAAN PEMBANGUNAN <br />
            KEMENTRIAN PERENCANAAN PEMBANGUNAN NASIONAL / <br />
            BADAN PERENCANAAN PEMBANGUNAN NASIONAL
          </b>
          </h5>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
            <ul class="navbar-nav me-1 mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">PROFIL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">KANTOR BERSAMA</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  PUBLIKASI
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #B0B8C3">
                  <li><a class="dropdown-item" href="#">PPP Book</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Newsletter</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Majalah</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/apa-itu-kpbu" tabindex="-1" aria-disabled="true">KPBU</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!--navbar end-->



{{-- content --}}

  <div class="content" style="background-color: #C4C4C433 !important;">
    @yield('content')
  </div>
{{-- content --}}
















  <footer class="footer text-center text-lg-start"  style="background-color: #01347C; width: 100%;">
    <!-- Grid container -->
    <div class="container" style="padding: 20px 10px 0px 10px;">
      <!--Grid row-->
      <div class="foot row" style="height: 200px;">
        <!--Grid column-->
        <div class="col-lg-4 col-md-12 mb-4 mb-md-0 text-uppercase " style="font-size: 10px; color:#fff;">
          <span><b>direktorat pengembangan pendanaan pembangunan</b> </span><br>
          <span><b>kementrian perencanaan pembangunan nasional /</b> </span><br>
          <span><b>badan perencanaan pembangunan nasional (bappenas)</b></span>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="location col-lg-4 col-md-12 mb-4 mb-md-0">
          <div style="height: 15px;">
            <a href="" style="font-size: 12px !important; color:#fff; font-family: sans;">
              <img src="{{ asset('assets/images/plane.png') }}" alt="" class="logo-2">
                Jalan Taman Suropati No.2 Jakarta 10310
            </a>
          </div>
          <div  style="height: 15px;">
            <a href="" style="font-size: 12px !important; color:#fff; padding-top: 9px;">
              <img src="{{ asset('assets/images/email.png') }}" alt="" class="logo-2">
                  ppp.bappenas.go.id
            </a>
          </div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="menu-sm col-lg-4 col-md-12 mb-4 mb-md-0">
            <div class="logo-md">
              <img src="{{ asset('assets/images/fb.png') }}" class="logo">
              <img src="{{ asset('assets/images/tw.png') }}" class="logo">
            </div>
            <div class="menu-foot" style=" color:#fff; height: 15px;">
              <a href="#" style="margin: 0px !important; font-size: 12px !important; color:#fff;">Peta Situs</a>
              <span style="margin: 0px 3px 0px 3px !important;">|</span>
              <a href="#" style="margin: 0px !important;font-size: 12px !important; color:#fff;">Beranda</a>
              <span style="margin: 0px 3px 0px 3px !important;">|</span>
              <a href="#" style="margin: 0px !important; font-size: 12px !important; color:#fff;">FAQs</a>
            </div>
            <div class="menu-foot2" style="height: 15px;">
              <a href="#" style="margin: 0px !important; font-size: 12px !important; color:#fff;">Kontak Kami</a>
            </div>
        </div>
        <!--Grid column-->
        
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2); font-size: 10px;">
      © Kementrian Perencanaan Pembangunan Nasional, Republik Indonesia
    </div>
    <!-- Copyright -->
  </footer>

    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    {{-- <script type="text/javascript"> 
      var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));  
      if (mobile) { 
          alert("MOBILE DEVICE!!");
          $('.navWrap').css('display', 'none'); // OR you can use $('.navWrap').hide();
      } 
      else 
      { 
         alert("NOT A MOBILE DEVICE!!"); 
      }
  </script>  --}}
  </body>
</html>
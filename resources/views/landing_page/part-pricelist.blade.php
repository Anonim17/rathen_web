{{-- @extends('layout.landingpage_nofooter')

@section('content') --}}
{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav> --}}

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@500&display=swap');
      *{
        font-family: 'Red Hat Display', sans-serif;
      }
                .count{
                    background: none;
                    border: none;
                    color: blue; /* Sesuaikan dengan warna teks yang diinginkan */
                    text-decoration: underline; /* Menambahkan garis bawah untuk menunjukkan bahwa itu adalah tautan */
                    cursor: pointer;
                    padding: 0;
                    font-size: inherit;
                }
        /* Gaya untuk tata letak dan tampilan */
        .quantity-container {
            display: flex;
            align-items: center;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            margin: 0 10px;
        }

        .quantity-button {
            cursor: pointer;
            padding: auto;
            font-size: 16px;
            /* align-items: center; */
            /* align-content: center; */
            text-align: center;
            margin: auto;
            margin-left: auto;
            margin-right: auto;
        }
        button.clicked {
          background-color: #000;
          color: #fff;
        }
        #imageSlider {
          width:100%!important;
          height:21.5rem;
          margin: auto;
    }

    /* Gaya untuk pilihan gambar di bawah slider */
    .thumbnail-container {
      margin-top: 20px;
    }

    .thumbnail {
      width: 40px;
      height: 40px;
      /* margin-right: 5px; */
      cursor: pointer;
    }

    .thumbnail img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .selected-thumbnail {
      /* border: 2px solid #007bff; */
    }
    .title-desc-produk{
      text-decoration: none;
      color: #000
    }
    .title-desc-produk:hover{
      color: midnightblue;
    }
    .title-desc-produk.clicked {
      color: red;
    }
    .button-content {
        display: none;
      }

      .carousel-indicators button{
        width: 5px !important;
        height: 5px !important;
      }

      .carousel-indicators button.active{
        width: 7px !important;
        height: 7px !important;
      }

      .carousel-indicators{
        align-items: center;
      }
      .disable {
      pointer-events: none;
      /* Pilihan tambahan untuk tampilan non-aktif */
      color: gray;
      text-decoration: none;
      cursor: not-allowed;
    }
    @media (max-width: 600px) {
      .visible-on-small {
        display: block;
      }
    }
    @media (max-width:991px){
    .view-on-sm{
      display: block;
    }
      .view-on-large{
        display: none;
    }
  }
    .view-on-sm{
        display:none;
    }
    .view-on-large{
        display:run-in;
    }
    .logo-nav{
        width:52px;
        margin-left:78px;
   }
   .text-nav{
    color:#fff;
    font-weight: bold;
    font-size: 14px;
    font-family: 'Montheavy';
   }
   @font-face {
    font-family: Montheavy;
    src: url("../../asset/fonts/Mont/Mont-Heavy.otf");
    }
    /* update */
    .nav-link:hover{
      color:#cc141a!important;
    }
    .nav-link:focus, .nav-link:hover .nav-link:after{
        color: #e11c22!important;
    }
    
    .img-carousel{
      width:38rem!important;
      height:21.5rem!important;
      object-fit:contain;
    }
    .thumbnail-price {
      width: 4rem;
      height: 4rem;
      margin-right: -16px;
      cursor: pointer;
    }

    .center{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    </style>
<script>
  document.addEventListener('DOMContentLoaded', function () {
      const toggleButton = document.querySelector('.nav-toggler');
      const overlay = document.querySelector('.overlay');

      toggleButton.addEventListener('click', function () {
          this.classList.toggle('active'); // Toggle the 'active' class for styling
          overlay.classList.toggle('active'); // Toggle the 'active' class for showing/hiding the overlay
      });
  });

</script>
<style>

  .navbar-main-toggle .nav-toggler {
      background: none;
      border: none;
      margin: 0;
      padding: 0;
  }

  .navbar-main-toggle .nav-toggler span {
      background-color: #fff;
      display: block;
      height: 3px;
      margin-bottom: 4px;
      width: 20px;
      z-index: 9999;
  }

  .navbar-main-toggle .nav-toggler span:last-child {
      margin-bottom: 0;
  }
  @media screen and (max-width: 600px) {
    .text-nav{
      color:#000;
      font-size:16px;
      line-height:1;
    }
    .navbar{
      z-index: 9;
      width: 100%;
      position: fixed;
      top: 0px;
    }
    #home .container.mt-4.mb-4{
      margin-top:3rem!important;
      margin-bottom:3rem!important;
    }
    .navbar-collapse, .navbar-collapse.show {
      display: block;
      position: absolute;
      width: 75%;
      left: 6rem;
      right: 0px;
      top: 65px;
      background: #fff;
      z-index: 9999;
      padding:1rem 0 2rem 3rem;
    }
    .navbar-collapse.show{
      transform:translateX(-3px);
      transition: transform 0.5s ease;
    }
    .navbar-collapse.collapsing{
      height:unset!important;
      transition: unset;
    }
    .overlay.active {
      position: fixed;
      top: 65px;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Adjust opacity as needed */
      z-index: 1; /* Ensure it's above the navbar */
    }
    .nav-toggler.active span:first-child{
      transform-origin: 50% 50%; transform: translate(0px, 8px) rotate(45deg);
    }
    .nav-toggler.active span:nth-of-type(2){
      opacity: 0;
    }
    .nav-toggler.active span:last-child{
      transform-origin: -50% 50%; transform: translate(6px, 8px) rotate(-45deg);
    }

    .img-carousel{
      width: 38rem!important;
      height: 11.5rem!important;
      object-fit: contain;
    }
    #imageSlider {
      height:11.5rem;
    }
    .navbar-main-toggle{
      display: contents;
    }
    .logo-nav{
      margin-left:0;
    }
    .center-mobile{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .mt-4-mobile {
        margin-top: 1.5rem!important;
    }
    .floating-menu{
      right: 0!important;
      bottom: 1rem!important;
        
    }
    .kurir-bt{
      padding: 0 1rem 4rem 0;    
    }
    .kurir-bt img{
      height: 6rem;
    }
  }
  @media screen and (min-width: 768px) and (max-width:1024px) {
    .navbar-main-toggle{
      display: contents;
    }
    .logo-nav{
      margin-left:0;
    }
    .center-mobile{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .mt-4-mobile {
        margin-top: 1.5rem!important;
    }
    .container-xxl{
      width:90%
    }
  }
</style>
    <link rel="stylesheet" href="{{asset('asset/css/styles.css')}}">

    <div  id="floatingMenu" class="floating-menu" onClick="myFunction()" style="position: fixed; z-index: 1;margin: auto; right: 36px; bottom: 0px;">
        <a href="https://wa.me/628123456789" class="kurir-bt" style="max-width:150px">
            <img src="{{asset('asset/images/chat.png')}}"  height="160" />
        </a>
    </div>
    <section id="home" style="overflow: hidden;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-black fw-bold">
            <div class="container-fluid">
                <a class="navbar-brand" href="/page-custom"><img src="/asset/images/LOGO.png" class="logo-nav" alt=""></a>
                <div class="navbar-main-toggle visually-hidden">
                    <button class="nav-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="collapse center navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="text-nav nav-link" href="/page-custom#home">HOME</a>
                        <a class="text-nav nav-link" href="/page-custom#about">ABOUT US</a>
                        <a class="text-nav nav-link" href="/page-custom#result">LATEST RESULT</a>
                        <a class="text-nav nav-link" href="/page-custom#order">CARA PEMESANAN</a>
                        <a class="text-nav nav-link" href="/price-list/non-print">PRICE LIST</a>
                        <a class="text-nav nav-link" href="/page-custom#faq">FAQ</a>
                        <a class="text-nav nav-link" href="/page-custom#clients">CLIENT</a>
                        <a class="text-nav nav-link" href="/page-custom#location">LOCATION</a>
                        <a class="text-nav nav-link" href="/page-custom#contact">CONTACT US</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="overlay"></div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
    <div class="container mt-4 mb-4">
        <div class="row">
            {{-- <div class="col"><a href="/page-costum"><small class="text-muted">Home / Half-Print</small></a></div> --}}
        </div>
    </div>
    {{-- <div class="d-inline-flex gap-1">
      <a href="#" class="btn" role="button" data-bs-toggle="button">Toggle link</a>
      <a href="#" class="btn active" role="button" data-bs-toggle="button" aria-pressed="true">Active toggle link</a>
      <a class="btn disabled" aria-disabled="true" role="button" data-bs-toggle="button">Disabled toggle link</a>
    </div>
    <p class="d-inline-flex gap-1">
      <a href="#" class="btn btn-primary" role="button" data-bs-toggle="button">Toggle link</a>
      <a href="#" class="btn btn-primary active" role="button" data-bs-toggle="button" aria-pressed="true">Active toggle link</a>
      <a class="btn btn-primary disabled" aria-disabled="true" role="button" data-bs-toggle="button">Disabled toggle link</a>
    </p> --}}
    <div class="container-xxl">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">

              <div id="imageSlider" class="carousel slide mx-auto" data-bs-interval="false">
                <div class="carousel-inner mb-3">
                  <div class="carousel-item active">
                    <img src="{{ $data->cover}}" class="img-thumbnail img-carousel" alt="Image 1">
                  </div>
                  
                </div>

                <button id="btnPrev" class="carousel-control-prev center-vertical" type="button" data-bs-target="#imageSlider" data-bs-slide="prev" onclick="navigateToRelativePage(-1)">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button id="btnNext" class="carousel-control-next center-vertical" type="button" data-bs-target="#imageSlider" data-bs-slide="next" onclick="navigateToRelativePage(1)">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

              <div class="row view-on-large mt-5">
                <div class="col-lg-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4" style="margin-top: auto; margin-bottom:auto; margin-left:0px; margin-right:0px;"><img src="{{ asset('asset/images/price-list/ceklis.png') }}" style="width:20px;" alt=""></div>
                            <div class="col" style="font-size: 13px">Stok <br> Tersedia</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4" style="margin-top: auto; margin-bottom:auto; margin-left:0px; margin-right:0px;"><img src="{{ asset('asset/images/price-list/broom.png') }}" width="20px" alt=""></div>
                            <div class="col" style="font-size: 13px">Bebas Biaya <br> Pengiriman</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3" style="margin-top: auto; margin-bottom:auto; margin-left:0px; margin-right:0px;"><img src="{{ asset('asset/images/price-list/percent.png') }}" width="30px" alt=""></div>
                            <div class="col-lg-8" style="font-size: 13px">Cicilan 0% Hingga <br>24 Bulan</div>
                        </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <p><small style="line-height:1.5;">{!! nl2br($jsonData['menu1'][$data->deskripsi]) !!} </small></p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <!-- <form action="{{ route('order') }}" method="POST">  -->
          <form action="{{ route('quotation') }}" id="quotationForm" method="POST" >
            @csrf
              
              <div class="card mt-4-mobile">
                <div class="card-body">
                  <h5 class="card-title mb-4">Extra</h5>
                  <div>
                    {!! ($jsonData['menu2'][$data->deskripsi]) !!}
                  </div>
                  <!-- <h6 class="card-subtitle mb-2 text-body-secondary">Simulasi Harga</h6> -->
                  
                  <!-- <button type="submit" class="btn btn-outline-secondary w-100 mt-5" id="QuotationBtn">Order Now</button> -->
                </div>
              </div>
              <div class="card mt-4">
                <div class="card-body">
                  <h5 class="card-title">Harga: <span id="hargaDb">{{ $data->harga }}</span></h5>
                  <div class="container mt-4">
                      <div class="row"> 
                        <div class="col col-content">
                          <div class="quantity-button decrement" onclick="decrement()">-</div>
                        </div>
                        <div class="col col-content"><input type="text" name="qty" class="quantity-input" id="quantityInput" value="{{ $data->min_order }}" readonly>
                        </div>
                        <div class="col col-content"><div class="quantity-button" onclick="increment()">+</div>
                        </div>
                      </div>  
                      <div class="row mt-4">
                        <div class="col">
                          <div>Total Harga: <span id="totalHarga">Rp {{ $data->harga }}</span></div> 
                        </div>
                      </div>
                  </div>
                  <input type="hidden" name="hargaDb" value="{{ $data->harga }}">
                  <input type="hidden" id="totalHargaInput" name="totalHarga" value="{{ $data->harga }}">
                  <input type="hidden" name="kd_part" value="{{ $data->kd_part }}">
                  <div class="btn btn-outline-secondary w-100 mt-5" id="QuotationBtn">Order Now</div>
                </div>
              </div>
          <!-- </form> -->
          <!-- <button type="submit" class="btn btn-outline-secondary w-100 mt-5" id="QuotationBtn">Order Now</button> -->
        </div>

      </div>
    </div>
    <script>
      var pages = [
        '{{ url('/price-list', ['kd_part' => 'non-print']) }}',
        '{{ url('/price-list', ['kd_part' => 'half-print']) }}',
        '{{ url('/price-list', ['kd_part' => 'full-print']) }}',
        '{{ url('/price-list', ['kd_part' => 'pro']) }}',
        '{{ url('/price-list', ['kd_part' => 'pro-plus']) }}',
        '{{ url('/price-list', ['kd_part' => 'jacket-anthem']) }}'
      ];

      var currentPageIndex = pages.indexOf(window.location.href);

      function navigateToRelativePage(offset) {
        // Calculate the index of the next page
        var nextPageIndex = (currentPageIndex + offset + pages.length) % pages.length;

        // Change the URL to the next page
        window.location.href = pages[nextPageIndex];
      }
    </script>


    <div class="container-xxl visually-hidden">
        <div class="row">
            <div class="col-lg-3 center-mobile">
              <div class="card" style="border:0!important;">
                <div class="card-body overflow-hidden pt-0" style="width:20.5rem;">
                {{-- <img src="https://www.shutterstock.com/image-vector/adventure-offroad-4x4-badges-logo-260nw-2041894727.jpg" width="90%" class="img-fluid rounded-top mx-auto my-auto" alt=""> --}}
                <div id="imageSlider" class="carousel slide mx-auto" style="width:86%!important;" data-bs-interval="false">
                  <div class="carousel-inner mb-3">
                    <div class="carousel-item active">
                      <img src="{{ $data->g1}}" class="img-thumbnail img-16" alt="Image 1">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ $data->g2}}" class="img-thumbnail img-16" alt="Image 2">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ $data->g3}}" class="img-thumbnail img-16" alt="Image 3">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ $data->g4}}" class="img-thumbnail img-16" alt="Image 4">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ $data->g5}}" class="img-thumbnail img-16" alt="Image 5">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ $data->g6}}" class="img-thumbnail img-16" alt="Image 6">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ $data->g7}}" class="img-thumbnail img-16" alt="Image 7">
                    </div>
                    <div class="carousel-item">
                      <img src="{{ $data->g8}}" class="img-thumbnail img-16" alt="Image 8">
                    </div>
                  </div>

                  <button id="btnPrev" class="carousel-control-prev" type="button" data-bs-target="#imageSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button id="btnNext" class="carousel-control-next" type="button" data-bs-target="#imageSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>

                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    </button>
                    <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="1" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="2" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="3" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="4" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="5" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="6" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#imageSlider" data-bs-slide-to="7" aria-label="Slide 7"></button>
                  </div>

                </div>
                <div class="container">
                  <div class="row flex-nowrap overflow-x-scroll">
                    <div class="col" style="padding-left:0!important;" type="button" data-bs-target="#imageSlider" data-bs-slide-to="0" aria-label="Slide 0">
                      <div class="thumbnail thumbnail-price selected-thumbnail">
                        <img src="{{ $data->g1}}" alt="Thumbnail 1">
                      </div>
                    </div>
                    <div class="col" type="button" data-bs-target="#imageSlider" data-bs-slide-to="1" aria-label="Slide 1">
                      <div class="thumbnail thumbnail-price">
                        <img src="{{ $data->g2}}" alt="Thumbnail 2">
                      </div>
                    </div>
                    <div class="col" type="button" data-bs-target="#imageSlider" data-bs-slide-to="2" aria-label="Slide 2">
                      <div class="thumbnail thumbnail-price">
                        <img src="{{ $data->g3}}" alt="Thumbnail 3">
                      </div>
                    </div>
                    <div class="col" type="button" data-bs-target="#imageSlider" data-bs-slide-to="3" aria-label="Slide 3">
                      <div class="thumbnail thumbnail-price">
                        <img src="{{ $data->g4}}" alt="Thumbnail 4">
                      </div>
                    </div>
                    <div class="col" type="button" data-bs-target="#imageSlider" data-bs-slide-to="4" aria-label="Slide 4">
                      <div class="thumbnail thumbnail-price">
                        <img src="{{ $data->g5}}" alt="Thumbnail 4">
                      </div>
                    </div>
                    <div class="col" type="button" data-bs-target="#imageSlider" data-bs-slide-to="5" aria-label="Slide 5">
                      <div class="thumbnail thumbnail-price">
                        <img src="{{ $data->g6}}" alt="Thumbnail 4">
                      </div>
                    </div>
                    <div class="col" type="button" data-bs-target="#imageSlider" data-bs-slide-to="6" aria-label="Slide 6">
                      <div class="thumbnail thumbnail-price">
                        <img src="{{ $data->g7}}" alt="Thumbnail 4">
                      </div>
                    </div>
                    <div class="col" type="button" data-bs-target="#imageSlider" data-bs-slide-to="7" aria-label="Slide 7">
                      <div class="thumbnail thumbnail-price">
                        <img src="{{ $data->g8}}" alt="Thumbnail 4">
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <style>
              .visible-on-small {
                display: none;
              }
          
              @media (max-width: 991px) {
                .visible-on-small {
                  display: block;
                }
              }
            </style>
            <div class="col-lg-6 " style="font-weight: 200; padding-left:10px;">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title" style="position: relative">DAFTAR HARGA JERSEY RATHEN</h5>
                      <section class="visible-on-small">
                        <div class="badge text-wrap text-dark" >
                          <img src="{{ asset('asset/images/price-list/ceklis.png') }}" width="20px" alt=""> Stok Tersedia
                        </div>
                        <div class="badge text-wrap text-dark" >
                          <img src="{{ asset('asset/images/price-list/broom.png') }}" width="20px" alt=""> Bebas Biaya Pengriman
                        </div>
                        <div class="badge text-wrap text-dark" >
                          <img src="{{ asset('asset/images/price-list/presen.png') }}" width="20px" alt=""> Cicilan 0% Hingga 24 Bulan
                        </div>
                      </section>
                      <div class="container">
                        {{-- view-on-large --}}
                        <div class="row view-on-large">
                            <div class="col-lg-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4" style="margin-top: auto; margin-bottom:auto; margin-left:0px; margin-right:0px;"><img src="{{ asset('asset/images/price-list/ceklis.png') }}" style="width:20px;" alt=""></div>
                                        <div class="col" style="font-size: 13px">Stok <br> Tersedia</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4" style="margin-top: auto; margin-bottom:auto; margin-left:0px; margin-right:0px;"><img src="{{ asset('asset/images/price-list/broom.png') }}" width="20px" alt=""></div>
                                        <div class="col" style="font-size: 13px">Bebas Biaya <br> Pengiriman</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3" style="margin-top: auto; margin-bottom:auto; margin-left:0px; margin-right:0px;"><img src="{{ asset('asset/images/price-list/percent.png') }}" width="20px" alt=""></div>
                                        <div class="col-lg-8" style="font-size: 13px">Cicilan 0% Hingga <br>24 Bulan</div>
                                    </div>
                                </div>
                                 
                            </div>
                        </div>
                        {{-- end view-on-large --}}
                        {{-- view-on-sm --}}
                        <div class="row view-on-sm">
                          <style>
                            .container-smt {
                              display: flex; /* Menggunakan flexbox untuk tata letak */
                              align-items: center; /* Memusatkan elemen secara vertikal */
                            }
                        
                            .text-smt {
                              flex: 1; /* Membuat teks memanfaatkan ruang yang tersedia */
                              padding: 20px; /* Menambahkan ruang di sekitar teks */
                            }
                        
                            .image-smt {
                              width: 200px; /* Sesuaikan lebar gambar sesuai kebutuhan */
                              height: auto; /* Biarkan tinggi gambar menyesuaikan agar tidak terdistorsi */
                            }
                          </style>
                          <div class="col">
                              <div class="container-smt">
                                <div class="text-smt">
                                  <h5>view-on-sm</h5>
                                </div>
                                <div class="image-smt"><img src="{{ asset('asset/images/price-list/presen.png') }}" width="20px" alt=""></div>
                              </div>
                          </div> 
                        </div>
                      {{-- end --}}
                        <div class="row mt-4 ">
                          <span>Kualitas :</span>
                          <div class="col">
                                <a href="{{ url('/price-list', ['kd_part' => 'non-print']) }}"><button class="btn btn-outline-secondary {{ $data->stadium }} mt-2 menu-button" id="buttonA" onclick="selectOption(1, 1)"><span class="fs-6">Stadium Version</span></button>
                                <a href="{{ url('/price-list', ['kd_part' => 'pro']) }}"><button class="btn btn-outline-secondary {{ $data->pro }} mt-2 menu-button" id="buttonB" onclick="changeContent('data4'),selectOption(1, 2)">PRO Version</button></a>
                                <a href="{{ url('/price-list', ['kd_part' => 'pro-plus']) }}"><button class="btn btn-outline-secondary {{ $data->pro_plus }} mt-2 menu-button" id="buttonC" onclick="changeContent('data5'),selectOption(1, 3)">PRO<sup>+</sup> Version</button></a>
                            </div>
                        </div>
                        <div class="row mt-4 ">
                          <span>Kategori :</span>
                          <div class="col">
                                <a href="{{ url('/price-list', ['kd_part' => 'non-print']) }}" class="{{ $data->non_print }}" ><button class="btn btn-outline-secondary {{ $data->non_print }} mt-2 menu-button" id="button1" onclick="changeContent('data1'),selectOption(2, 1)">Non - Print</button></a>
                                <a href="{{ url('/price-list', ['kd_part' => 'half-print']) }}" class="{{ $data->non_print }}"><button class="btn btn-outline-secondary {{ $data->half_print }} mt-2 menu-button" id="button2" onclick="changeContent('data2'),selectOption(2, 2)">Half - Print</button></a>
                                <a href="{{ url('/price-list', ['kd_part' => 'full-print']) }}" class="{{ $data->non_print }}"><button class="btn btn-outline-secondary {{ $data->full_print }} mt-2 menu-button" id="button3" onclick="changeContent('data3'),selectOption(2, 3)">Full Print</button></a>
                          
                            </div>
                        </div>
                        <div class="row mt-4">
                          <div class="col">
                            <p><small>{!! nl2br($jsonData['menu1'][$data->deskripsi]) !!} </small></p>
                          </div>
                        </div>
                    </div>
                    </div>
                  </div>
            </div>

            <!-- Tombol untuk memilih konten -->
    {{-- <button onclick="changeContent('menu1')">Menu 1</button>
    <button onclick="changeContent('menu2')">Menu 2</button> --}}
    <!-- Tambahkan tombol lainnya sesuai kebutuhan -->

    <!-- Konten yang berubah sesuai dengan tombol yang dipilih -->
    {{-- <div id="menu1Content" class="menu-content">
        <h2>Konten Menu 1</h2> --}}
        {{-- <p>{{ $jsonData['menu1']['g1'] }}</p> --}}
    {{-- </div>
    <div id="menu1Content" class="menu-content">
      <h2>Konten Menu 1</h2> --}}
      {{-- <p>{{ $jsonData['menu1']['g1'] }}</p> --}}
  {{-- </div>
    <div id="menu2Content" class="menu-content">
        <h2>Konten Menu 2</h2> --}}
        {{-- <p>{{ $jsonData['menu2']['content'] }}</p> --}}
    {{-- </div> --}}

    <!-- ... tambahkan konten lainnya ... -->

    {{-- <script>
        function changeContent(selectedMenu) {
            // Menyembunyikan semua konten
            document.getElementById('menu1Content').style.display = 'none';
            document.getElementById('menu2Content').style.display = 'none';
            // Sembunyikan konten lainnya

            // Menampilkan konten yang dipilih
            document.getElementById(selectedMenu + 'Content').style.display = 'block';
        }
        var mainMenu = "menu1";
            changeContent(mainMenu);
    </script> --}}
            {{-- <div>
              <h2>Data:</h2>
              <p><strong>Name:</strong> {{ $jsonData['name'] }}</p>
              <p><strong>Age:</strong> {{ $jsonData['age'] }}</p>
              <p><strong>City:</strong> {{ $jsonData['city'] }}</p>
          </div>
            <div
            id="data1Content"
            class="button-content"
          >
            <h2>Konten Tombol 1</h2>
            <p>Ini adalah konten untuk Tombol 1.</p>
          </div>
      
          <div
            id="data2Content"
            class="button-content"
          >
            <h2>Konten Tombol 2</h2>
            <p>Ini adalah konten untuk Tombol 2.</p>
          </div> --}}
          {{-- <script>
            var buttonData = {
              data1: {
                title: "Konten Tombol 1",
                content: "Ini adalah konten untuk Tombol 1.",
              },
              data2: {
                title: "Konten Tombol 2",
                content: "Ini adalah konten untuk Tombol 2.",
              },
            };
            function changeContent(selectedButton) {
              var selectedData = buttonData[selectedButton];
              document.getElementById("data1Content").style.display = "none";
              document.getElementById("data2Content").style.display = "none";
      
              document.getElementById(selectedButton + "Content").style.display =
                "block";
            }
            var mainMenu = "data1";
            changeContent(mainMenu);
          </script> --}}
          <script>
            function formatHarga(harga) {
              return harga.toLocaleString('id-ID'); // 'id-ID' untuk format angka Indonesia
            }
        
            // Contoh penggunaan
            var hargaDb = getElementById('hargaDb'); // Gantilah dengan nilai dari database
            var formattedHarga = formatHarga(hargaDb);
        
            // Tampilkan hasilnya
            document.getElementById("hargaDb").innerText = "Rp " + formattedHarga;
          </script>   
            
        </div>

      </div>
      <style>
        /* Gaya untuk konten yang dapat diganti */
        .content {
          display: none;
        }
        .kategori {
          display: none;
        }
    
        /* Gaya untuk judul yang diklik */
        .clickable {
          cursor: pointer;
          color: gray;
          text-decoration: none;
        }
        a:hover{
          /* text-decoration: underline red; */
          color: #007bff
        }
        a {
          color: blue;
          text-decoration: none;
        }

        /* Gaya untuk tautan yang telah diklik */
        a.clicked {
          color: black;
          font-weight: bold;
        }
        /* Gaya untuk gambar dengan efek transisi */
.img-fluid {
  transition: transform 0.3s ease-in-out; /* Efek transisi pada transformasi */
}

/* Gaya untuk mengubah gambar saat dihover */
.img-fluid:hover {
  transform: scale(1.1); /* Membesarkan gambar saat dihover */
}
/* .image-container {
  position: relative;
  width: 100%;
  height: 50%
  padding-top: 75%; 
}

.image-container img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover; }
.card1{
  width: 50%;
  height: 100%;
} */


      </style> 
      <div class="container-xxl mt-4" id="kategori1">
        <div class="col">
          <div class="card card1">
            <div class="card-header">
              <div class="card-body">
                <a class="mx-2 fw-bold  clickable" onclick="showContent('content1'), changeLinkColor(this)">DETAIL</a>
                <a class="mx-4 fw-bold clickable" onclick="showContent('content2'), changeLinkColor(this)">KOMPARASI</a>
                <hr>
                <div class="card-title card1">
                  <div id="content1" class="card-text content">
                    <div class="container-fluid">
                      <div class="row center mt-5">
                      @for($i = 1; $i <= 10; $i++)
                          @php
                              $imageKey = "g" . $i;
                          @endphp

                          @if($data->$imageKey)
                              <div class="col-sm-5 mb-4 image-container">
                                  <img src="{{ $data->$imageKey }}" class="img-fluid w-100" alt="Image {{ $i }}">
                              </div>
                          @endif
                      @endfor
                      </div>
                    </div>
                  </div>
                  <div id="content2" class="card-text content komparasi">
                    <h6 class="card-subtitle text-body-secondary text-center fw-bold fs-4 mt-3 mb-5">Perbandingan type kualitas</h6>
                    <div class="fabrics mb-5">
                      <div class="overflow-hidden max-width-4xl mx-auto mb-2">
                        <img class="h-100 w-100" src="{{ asset('asset/images/price-list/komparasi/preview-BAHAN.jpg')}}" alt="">
                      </div>
                      <div class="d-flex flex-column align-items-center">
                        <img class="object-fit-cover icon mx-auto" src="{{ asset('asset/images/price-list/komparasi/fabrics.jpg')}}" />
                        <div class="text-center fw-bold m-2">Bahan</div>
                      </div>
                      <table class="mx-auto">
                        <thead>
                          <tr>
                            <th width="400" class="text-center py-1 fw-bold">Stadium</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO<sup>+</sup></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">RATHEN - TECH</td>
                            <td class="text-center">VAPORKNIT</td>
                            <td class="text-center">MOVINGKNIT</td>
                          </tr>
                          <tr>
                            <td class="text-center">Dri-fit technology</td>
                            <td class="text-center">Jacquard techonlogy</td>
                            <td class="text-center">Single-Knit jacquard technology</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="logo-tim mb-5">
                      <div class="overflow-hidden max-width-4xl mx-auto mb-2">
                        <img class="h-100 w-100" src="{{ asset('asset/images/price-list/komparasi/preview-LOGO-TIM-v2.jpg')}}" alt="">
                      </div>
                      <div class="d-flex flex-column align-items-center">
                        <img class="object-fit-cover icon mx-auto" src="{{ asset('asset/images/price-list/komparasi/logo-tim.jpg')}}" />
                        <div class="text-center fw-bold m-2">LOGO TIM (CREST)</div>
                      </div>
                      <table class="mx-auto">
                        <thead>
                          <tr>
                            <th width="400" class="text-center py-1 fw-bold">Stadium</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO<sup>+</sup></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">DTF</td>
                            <td class="text-center">3D TPU</td>
                            <td class="text-center">3D RUBBER</td>
                          </tr>
                          <tr>
                            <td class="text-center">Standard</td>
                            <td class="text-center">Premium</td>
                            <td class="text-center">Premium</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="logo-r mb-5">
                      <div class="overflow-hidden max-width-4xl mx-auto mb-2">
                        <img class="h-100 w-100" src="{{ asset('asset/images/price-list/komparasi/preview-LOGO-R.jpg')}}" alt="">
                      </div>
                      <div class="d-flex flex-column align-items-center">
                        <img class="object-fit-cover icon mx-auto" src="{{ asset('asset/images/price-list/komparasi/logo-r.jpg')}}" />
                        <div class="text-center fw-bold m-2">LOGO - R</div>
                      </div>
                      <table class="mx-auto">
                        <thead>
                          <tr>
                            <th width="400" class="text-center py-1 fw-bold">Stadium</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO<sup>+</sup></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">Polyflex</td>
                            <td class="text-center">3D</td>
                            <td class="text-center">3D SHAPE</td>
                          </tr>
                          <tr>
                            <td class="text-center">Standard</td>
                            <td class="text-center">Premium</td>
                            <td class="text-center">Premium</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="t-lock mb-5">
                      <div class="overflow-hidden max-width-4xl mx-auto mb-2">
                        <img class="h-100 w-100" src="{{ asset('asset/images/price-list/komparasi/LOGO_TBA.png')}}" alt="">
                      </div>
                      <div class="d-flex flex-column align-items-center">
                        <img class="object-fit-cover icon mx-auto" src="{{ asset('asset/images/price-list/komparasi/t-lock.jpg')}}" />
                        <div class="text-center fw-bold m-2">T - Lock</div>
                      </div>
                      <table class="mx-auto">
                        <thead>
                          <tr>
                            <th width="400" class="text-center py-1 fw-bold">Stadium</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO<sup>+</sup></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">✔️</td>
                            <td class="text-center">✔️</td>
                            <td class="text-center">✔️</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="laser-cut mb-5">
                      <div class="overflow-hidden max-width-4xl mx-auto mb-2">
                        <img class="h-100 w-100" src="{{ asset('asset/images/price-list/komparasi/preview-LASER-CUT.jpg')}}" alt="">
                      </div>
                      <div class="d-flex flex-column align-items-center">
                        <img class="object-fit-cover icon mx-auto" src="{{ asset('asset/images/price-list/komparasi-fabrics.jpg')}}" />
                        <div class="text-center fw-bold m-2">LASER CUT - Air circulation</div>
                      </div>
                      <table class="mx-auto">
                        <thead>
                          <tr>
                            <th width="400" class="text-center py-1 fw-bold">Stadium</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO<sup>+</sup></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">❌</td>
                            <td class="text-center">❌</td>
                            <td class="text-center">✔️</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="authentic-r mb-5">
                      <div class="overflow-hidden max-width-4xl mx-auto mb-2">
                        <img class="h-100 w-100" src="{{ asset('asset/images/price-list/komparasi/preview-AUTHENTIC.jpg')}}" alt="">
                      </div>
                      <div class="d-flex flex-column align-items-center">
                        <img class="object-fit-cover icon mx-auto" src="{{ asset('asset/images/price-list/komparasi/authentic.jpg')}}" />
                        <div class="text-center fw-bold m-2">AUTHENTIC - R</div>
                      </div>
                      <table class="mx-auto">
                        <thead>
                          <tr>
                            <th width="400" class="text-center py-1 fw-bold">Stadium</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO<sup>+</sup></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">DTF</td>
                            <td class="text-center">3D</td>
                            <td class="text-center">RUBBER ON TATAMI</td>
                          </tr>
                          <tr>
                            <td class="text-center">Standard</td>
                            <td class="text-center">Premium</td>
                            <td class="text-center">Exclusive</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="logo-celana mb-5">
                      <div class="overflow-hidden max-width-4xl mx-auto mb-2">
                        <img class="h-100 w-100" src="{{ asset('asset/images/price-list/komparasi/LOGO_TBA.png')}}" alt="">
                      </div>
                      <div class="d-flex flex-column align-items-center">
                        <img class="object-fit-cover icon mx-auto" src="{{ asset('asset/images/price-list/komparasi/logo-tim-celana.jpg')}}" />
                        <div class="text-center fw-bold m-2">LOGO TIM - CELANA</div>
                      </div>
                      <table class="mx-auto">
                        <thead>
                          <tr>
                            <th width="400" class="text-center py-1 fw-bold">Stadium</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO<sup>+</sup></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">❌</td>
                            <td class="text-center">❌</td>
                            <td class="text-center">✔️</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="nama-tim-celana mb-5">
                      <div class="overflow-hidden max-width-4xl mx-auto mb-2">
                        <img class="h-100 w-100" src="{{ asset('asset/images/price-list/komparasi/LOGO_TBA.png')}}" alt="">
                      </div>
                      <div class="d-flex flex-column align-items-center">
                        <img class="object-fit-cover icon mx-auto" src="{{ asset('asset/images/price-list/komparasi/nama-tim-celana.jpg')}}" />
                        <div class="text-center fw-bold m-2">NAMA TIM - CELANA</div>
                      </div>
                      <table class="mx-auto">
                        <thead>
                          <tr>
                            <th width="400" class="text-center py-1 fw-bold">Stadium</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO</th>
                            <th width="400" class="text-center py-1 fw-bold">PRO<sup>+</sup></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">✔️</td>
                            <td class="text-center">✔️</td>
                            <td class="text-center">✔️</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="container-xxl" id="kategori2">
       
      </div>

      <!-- modal quotation -->
<div id="QuotationModal" class="modal pt200">
  <div class="modal-content mw-32">
    <span class="close">&times;</span>
    <div class="form-modal" id="inputDataForm">
      <h4>Silahkan masukkan data</h4>
      <!-- <form action="{{ route('quotation') }}" method="POST" id="inputDataForm"> -->
          <!-- @csrf -->
          <label for="" class="subtitle">Nama Pelanggan</label>
          <input type="text" class="form-control" name="nama_pemesanan">

          <label for="" class="subtitle">Kontak (Whatsapp)</label>
          <input type="text" class="form-control" name="kontak" id="kontakInput">
          <small id="kontakError" style="color: red;"></small>

          <label for="" class="subtitle">Email</label>
          <input type="text" class="form-control" name="email">

          <label for="" class="subtitle">Alamat</label>
          <input type="text" class="form-control" name="alamat">

          <button type="submit" class="btn-modal" onclick="return validateForm()">Save</button>
      </form>
    </div>
  </div>
</div>

<script>
  function preventFormSubmitOnEnter(formId) {
    document.getElementById(formId).addEventListener("keypress", function(e) {
        // Mencegah pengiriman formulir saat tombol "Enter" ditekan
        if (e.key === "Enter") {
            e.preventDefault();
        }
    });
  }

  preventFormSubmitOnEnter("quotationForm");
  preventFormSubmitOnEnter("inputDataForm");


  document.addEventListener('DOMContentLoaded', function () {
    var modal = document.getElementById('QuotationModal');
    var btn = document.getElementById('QuotationBtn');
    var span = document.getElementsByClassName('close')[0];

    // Display the modal when the button is clicked
    btn.onclick = function () {
      modal.style.display = 'block';
    };

    // Close the modal when the close button is clicked
    span.onclick = function () {
      modal.style.display = 'none';
    };

    // Close the modal when clicking outside of it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = 'none';
      }
    };

  });
</script>

      <script>
        // Fungsi untuk mengubah warna tautan setelah diklik
      function changeLinkColor(clickedLink) {
        // Menghapus kelas "clicked" dari semua tautan
        document.querySelectorAll('a').forEach(function(link) {
          link.classList.remove('clicked');
        });

        // Menambahkan kelas "clicked" ke tautan yang diklik
        clickedLink.classList.add('clicked');
      }
      </script>
      <style>
        .max-width-4xl{
          max-width: 600px;
        }
          .komparasi .icon{
    height: 100px;
  }

  .komparasi th {
    background-color: #ABABAB;
  }
  
        /* Gaya dasar untuk tombol */
        .menu-button {
          /* padding: 10px;
          font-size: 16px;
          cursor: pointer; */
        }
    
        /* Gaya untuk tombol yang dipilih */
        .selected {
          background-color: #fff;
          color: #fff;
        }
      </style>
    <!-- Jenis pilihan 1 -->
    {{-- <button class="menu-button" onclick="selectOption(1, 1)">Pilihan 1A</button>
    <button class="menu-button" onclick="selectOption(1, 2)">Pilihan 1B</button>
    <button class="menu-button" onclick="selectOption(1, 3)">Pilihan 1C</button> --}}
    
    <!-- Jenis pilihan 2 -->
    {{-- <button class="menu-button" onclick="selectOption(2, 1)">Pilihan 2A</button>
    <button class="menu-button" onclick="selectOption(2, 2)">Pilihan 2B</button>
    <button class="menu-button" onclick="selectOption(2, 3)">Pilihan 2C</button> --}}
    
    <!-- Tombol untuk mengubah warna jika minimal 2 menu telah dipilih -->
    {{-- <button id="submitBtn" onclick="changeColor()">Submit</button> --}}
    
    <script>
      // Variabel untuk melacak pemilihan menu
      var selectedOptions = [];
    
      // Fungsi untuk menangani pemilihan menu
      function selectOption(type, option) {
        // Memeriksa apakah menu sudah dipilih, jika ya, hapus dari array
        var index = selectedOptions.indexOf(`${type}-${option}`);
        if (index !== -1) {
          selectedOptions.splice(index, 1);
        } else {
          // Jika belum dipilih, tambahkan ke array
          selectedOptions.push(`${type}-${option}`);
        }
    
        // Menghapus kelas "selected" dari semua tombol
        var buttons = document.querySelectorAll('.menu-button');
        buttons.forEach(function(button) {
          button.classList.remove('selected');
        });
    
        // Menambahkan kelas "selected" ke tombol yang dipilih
        selectedOptions.forEach(function(selectedOption) {
          var [selectedType, selectedNumber] = selectedOption.split('-');
          var selectedButton = document.querySelector(`.menu-button:nth-child(${selectedType * 3 + parseInt(selectedNumber)})`);
          selectedButton.classList.add('selected');
        });
      }
    
      // Fungsi untuk mengubah warna tombol jika minimal 2 menu telah dipilih
      function changeColor() {
        if (selectedOptions.length >= 2) {
          document.getElementById('submitBtn').style.backgroundColor = 'red';
        } else {
          alert('Pilih minimal 2 menu.');
        }
      }
    </script>
    </section>
    
    {{-- <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <ul class="list-inline social-buttons">
              <li><a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-github"></i></a>
                      </li>
                      </ul>
                      <p class="copyright text-muted small">Copyright &copy; Your Website 2016. All Rights Res
                        </div>
                        </div>
                        </div>

    </footer> --}}
  
    {{-- end of title page --}}

    <script>
      // Mendapatkan elemen tombol A dan B dari DOM
      var buttonA = document.getElementById('buttonA');
      var buttonB = document.getElementById('buttonB');
      var buttonC = document.getElementById('buttonC');

      var button1 = document.getElementById('button1');
      var button2 = document.getElementById('button2');
      var button3 = document.getElementById('button3');

      buttonA.addEventListener('click', function() {
        // Mematikan tombol B
        button1.disabled = false;
        button2.disabled = false;
        button3.disabled = false;
      });
      // Menambahkan event listener untuk tombol A
      buttonB.addEventListener('click', function() {
        // Mematikan tombol B
        button1.disabled = true;
        button2.disabled = true;
        button3.disabled = true;
      });
      buttonC.addEventListener('click', function() {
        // Mematikan tombol B
        button1.disabled = true;
        button2.disabled = true;
        button3.disabled = true;
      });
        // Fungsi untuk mengubah warna tombol
      function changeColor(button) {
        // Mengubah warna tombol menjadi merah
        button.style.backgroundColor = 'red';
      }
    </script>
    
    <script>
      var jhargaDB = {{ $data->harga }} ;
      var formatHargaDB = "Rp " + jhargaDB.toLocaleString();
      document.getElementById("hargaDb").innerText =  formatHargaDB;
      
      var additionalCost = 0;
      var jharga = {{ $data->harga }} * {{ $data->min_order }};
      var formatHarga = "Rp " + jharga.toLocaleString();
      document.getElementById("totalHargaInput").value = jharga;
      document.getElementById("totalHarga").innerText =  formatHarga;
      function increment() {
        var quantityInput = document.getElementById("quantityInput");
        var currentQuantity = parseInt(quantityInput.value);
        quantityInput.value = currentQuantity + 1;
  
        updateTotalHarga();
      }
  
      function decrement() {
        var quantityInput = document.getElementById("quantityInput");
        var currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > {{ $data->min_order }}) {
            quantityInput.value = currentQuantity - 1;
            updateTotalHarga();
        }
        // if (currentQuantity <= {{ $data->min_order }}) {
        //   var decrementButton = document.querySelector('.quantity-button.decrement');
        //   decrementButton.style.display = 'none';
        // }
      }

    </script>

    <script>
      document.getElementById('kategori1').style.display = 'block';
      // Fungsi untuk menampilkan konten sesuai dengan judul yang diklik
      function showKategori(kategoriId) {
        // Menyembunyikan semua konten
        document.querySelectorAll('.kategori').forEach(function(kategori) {
          kategori.style.display = 'none';
        });
    
        // Menampilkan konten yang sesuai dengan judul yang diklik
        document.getElementById(kategoriId).style.display = 'block';
        
      }
    </script>
    <script>
      document.getElementById('content1').style.display = 'block';
      // Fungsi untuk menampilkan konten sesuai dengan judul yang diklik
      function showContent(contentId) {
        // Menyembunyikan semua konten
        document.querySelectorAll('.content').forEach(function(content) {
          content.style.display = 'none';
        });
    
        // Menampilkan konten yang sesuai dengan judul yang diklik
        document.getElementById(contentId).style.display = 'block';
        
      }
    </script>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="{{asset('asset/js/part-pricelist.js')}}"></script>
{{-- @endsection --}}
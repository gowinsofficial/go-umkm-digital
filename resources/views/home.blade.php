@inject('setting', 'App\Http\Controllers\Settings')
@extends('templates.nav')
@section('csspage')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="intro-wrap">
                    <h1 class="mb-5"><span class="d-block">Go Umkm</h1>
                    <p class="text-white">{{ $setting::get("text-side-landing") }}</p>
                </div>
            </div>
            <div class="col-lg-5">
                {{--  <div class="slides">
                    <img src="{{ asset('assets/wisata/images/hero-slider-1.jpg')}}" alt="Image" class="img-fluid active">
                    <img src="{{ asset('assets/wisata/images/hero-slider-2.jpg')}}" alt="Image" class="img-fluid">
                    <img src="{{ asset('assets/wisata/images/hero-slider-3.jpg')}}" alt="Image" class="img-fluid">
                    <img src="{{ asset('assets/wisata/images/hero-slider-4.jpg')}}" alt="Image" class="img-fluid">
                    <img src="{{ asset('assets/wisata/images/hero-slider-5.jpg')}}" alt="Image" class="img-fluid">
                </div>  --}}
                <div class="untree_co-section">
                    <div class="container">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-lg-12">
                          <figure class="img-play-video">
                            <a
                              id="play-video"
                              class="video-play-button"
                              href="https://www.youtube.com/watch?v=nRqOu3EDixw"
                              data-fancybox
                            >
                              <span></span>
                            </a>
                            <img
                              src="{{ asset('assets/wisata/images/hero-slider-2.jpg')}}"
                              alt="Image"
                              class="img-fluid rounded-20"
                            />
                          </figure>
                        </div>


                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<div class="untree_co-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="section-title text-center mb-3">Our Services</h2>

            </div>
        </div>
        <div class="row justify-content-start">


            <div class=" col-lg-3 " >

                <div class="feature-1 ">
                    <div class="align-self-center">
                        <span class="fa-3x display-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" height="40" width="54" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M240 144A96 96 0 1 0 48 144a96 96 0 1 0 192 0zm44.4 32C269.9 240.1 212.5 288 144 288C64.5 288 0 223.5 0 144S64.5 0 144 0c68.5 0 125.9 47.9 140.4 112h71.8c8.8-9.8 21.6-16 35.8-16H496c26.5 0 48 21.5 48 48s-21.5 48-48 48H392c-14.2 0-27-6.2-35.8-16H284.4zM144 80a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM400 240c13.3 0 24 10.7 24 24v8h96c13.3 0 24 10.7 24 24s-10.7 24-24 24H280c-13.3 0-24-10.7-24-24s10.7-24 24-24h96v-8c0-13.3 10.7-24 24-24zM288 464V352H512V464c0 26.5-21.5 48-48 48H336c-26.5 0-48-21.5-48-48zM48 320h80 16 32c26.5 0 48 21.5 48 48s-21.5 48-48 48H160c0 17.7-14.3 32-32 32H64c-17.7 0-32-14.3-32-32V336c0-8.8 7.2-16 16-16zm128 64c8.8 0 16-7.2 16-16s-7.2-16-16-16H160v32h16zM24 464H200c13.3 0 24 10.7 24 24s-10.7 24-24 24H24c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/></svg>
                        </span>
                        <h3>Kuliner Madura</h3>
                        <p class="mb-0">Makanan Dan Minuman Yang Wajib Dicoba Dimadura.</p>
                        <a class="btn btn-info" href="/kuliner" role="button">view</a>
                    </div>
                </div>


            </div>

            <div class="col-lg-3 " >

                <div class="feature-1 ">
                    <div class="align-self-center">
                        <span class="fa fa-tags fa-3x  display-4 text-primary"></span>
                        <h3>Batik madura</h3>
                        <p class="mb-0">Batik Khas Maduran Dengan Beragam Motif Dan Corak .</p>
                        <a class="btn btn-info" href="/batik" role="button">view</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 " >
                <div class="feature-1 ">
                    <div class="align-self-center">
                        <span class="fa fa-briefcase fa-3x display-4 text-primary"></span>
                        <h3>Branding Bisnis</h3>
                        <p class="mb-0">Branding Usahamu Agar DiJangkau Halayak Umum.</p>
                        <a class="btn btn-info" href="#" role="button">view</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 " >

                <div class="feature-1 ">
                    <div class="align-self-center">
                        <span class="fa fa-tv  fa-3x display-4 text-primary"></span>
                        <h3>Madura TV</h3>
                        <p class="mb-0">Chanel Youtube Yang Berisi Semua Tentang Madura.</p>
                        <a class="btn btn-info" href="/Madura-tv" role="button">view</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3" >

                <div class="feature-1 ">
                    <div class="align-self-center">
                        <span class="fa fa-ship fa-3x  display-4 text-primary"></span>
                        <h3>Pariwisata</h3>
                        <p class="mb-0">Wisata Wisata Populer yang ada Di madura.</p>
                        <a class="btn btn-info" href="/wisata" role="button">view</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 " >

                <div class="feature-1 ">
                    <div class="align-self-center">
                        <span class="fa fa-car  fa-3x display-4 text-primary"></span>
                        <h3>Ojol Madura</h3>
                        <p class="mb-0">Ojek Online Di Seluruh Kabupaten Madura.</p>
                        <a class="btn btn-info" href="/ojol-madura" role="button">view</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 " >
                <div class="feature-1 ">
                    <div class="align-self-center">

                        <span class="fa-3x display-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" height="39" width="56" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M64 96c0-35.3 28.7-64 64-64H512c35.3 0 64 28.7 64 64V352H512V96H128V352H64V96zM0 403.2C0 392.6 8.6 384 19.2 384H620.8c10.6 0 19.2 8.6 19.2 19.2c0 42.4-34.4 76.8-76.8 76.8H76.8C34.4 480 0 445.6 0 403.2zM281 209l-31 31 31 31c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-48-48c-9.4-9.4-9.4-24.6 0-33.9l48-48c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM393 175l48 48c9.4 9.4 9.4 24.6 0 33.9l-48 48c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l31-31-31-31c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z"/></svg>
                        </span>
                        <h3>Pembuatan Website</h3>
                        <p class="mb-0">Jasa Pembuatan Website lebih khusus website Umkm.</p>
                        <a class="btn btn-info" href="#" role="button">view</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 " >
                <div class="feature-1 ">
                    <div class="align-self-center">
                        <span class="fa-3x display-4 text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" height="39" width="56" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M49.7 32c-10.5 0-19.8 6.9-22.9 16.9L.9 133c-.6 2-.9 4.1-.9 6.1C0 150.7 9.3 160 20.9 160h94L140.5 32H49.7zM272 160V32H173.1L147.5 160H272zm32 0H428.5L402.9 32H304V160zm157.1 0h94c11.5 0 20.9-9.3 20.9-20.9c0-2.1-.3-4.1-.9-6.1L549.2 48.9C546.1 38.9 536.8 32 526.3 32H435.5l25.6 128zM32 192l4 32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H44L64 448c0 17.7 14.3 32 32 32s32-14.3 32-32H448c0 17.7 14.3 32 32 32s32-14.3 32-32l20-160h12c17.7 0 32-14.3 32-32s-14.3-32-32-32h-4l4-32H32z"/></svg>
                        </span>
                        <h3>E-commerce</h3>
                        <p class="mb-0">Jasa untuk Pembuatan Toko Online (E-commerce).</p>
                        <a class="btn btn-info" href="#" role="button">view</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
<div class="untree_co-section">
    <div class="container">
        <div class="row text-center justify-content-center mb-5">
            <div class="col-lg-7"><h2 class="section-title text-center">Galery UMKM</h2></div>
        </div>

        <div class="owl-carousel owl-3-slider">

            <div class="item">
                <a class="media-thumb" href="{{ asset('assets/wisata/images/hero-slider-1.jpg')}}" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>Pragser Wildsee</h3>
                        <span class="location">Italy</span>
                    </div>
                    <img src="{{ asset('assets/wisata/images/hero-slider-1.jpg')}}" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="media-thumb" href="{{ asset('assets/wisata/images/hero-slider-2.jpg')}}" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>Oia</h3>
                        <span class="location">Greece</span>
                    </div>
                    <img src="{{ asset('assets/wisata/images/hero-slider-2.jpg')}}" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="media-thumb" href="{{ asset('assets/wisata/images/hero-slider-3.jpg')}}" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>Perhentian Islands</h3>
                        <span class="location">Malaysia</span>
                    </div>
                    <img src="{{ asset('assets/wisata/images/hero-slider-3.jpg')}}" alt="Image" class="img-fluid">
                </a>
            </div>


            <div class="item">
                <a class="media-thumb" href="{{ asset('assets/wisata/images/hero-slider-4.jpg')}}" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>Rialto Bridge</h3>
                        <span class="location">Italy</span>
                    </div>
                    <img src="{{ asset('assets/wisata/images/hero-slider-4.jpg')}}" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="media-thumb" href="{{ asset('assets/wisata/images/hero-slider-5.jpg')}}" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>San Francisco, United States</h3>
                        <span class="location">United States</span>
                    </div>
                    <img src="{{ asset('assets/wisata/images/hero-slider-5.jpg')}}" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="media-thumb" href="{{ asset('assets/wisata/images/hero-slider-1.jpg')}}" data-fancybox="gallery">
                    <div class="media-text">
                        <h3>Lake Thun</h3>
                        <span class="location">Switzerland</span>
                    </div>
                    <img src="{{ asset('assets/wisata/images/hero-slider-2.jpg')}}" alt="Image" class="img-fluid">
                </a>
            </div>

        </div>

    </div>
</div>

<div class="untree_co-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-6">
                <h2 class="section-title text-center mb-3">Special Offers &amp; Discounts</h2>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="media-1">
                    <a href="#" class="d-block mb-3"><img src="{{ asset('assets/wisata/images/hero-slider-1.jpg')}}" alt="Image" class="img-fluid"></a>
                    <span class="d-flex align-items-center loc mb-2">
                        <span class="icon-room mr-3"></span>
                        <span>Festival</span>
                    </span>
                    <div class="d-flex align-items-center">
                        <div>
                            <h3><a href="/festival">Festival UMKM Madura</a></h3>
                            {{--  <div class="price ml-auto">
                                <span>$520.00</span>
                            </div>  --}}
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="media-1">
                    <a href="#" class="d-block mb-3"><img src="{{ asset('assets/wisata/images/hero-slider-2.jpg')}}" alt="Image" class="img-fluid"></a>
                    <span class="d-flex align-items-center loc mb-2">
                        <span class="fa fa-whatsapp mr-3"></span>
                        <span>Pelatihan</span>
                    </span>
                    <div class="d-flex align-items-center">
                        <div>
                            <h3><a href="#">Pelatihan Marketing dll...</a></h3>

                        </div>

                    </div>

                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="media-1">
                    <a href="#" class="d-block mb-3"><img src="{{ asset('assets/wisata/images/hero-slider-3.jpg')}}" alt="Image" class="img-fluid"></a>
                    <span class="d-flex align-items-center loc mb-2">
                        <span class="fa fa-whatsapp mr-3"></span>
                        <span>Sale 12.12</span>
                    </span>
                    <div class="d-flex align-items-center">
                        <div>
                            <h3><a href="#">Sale 12.12 </a></h3>
                            {{--  <div class="price ml-auto">
                                <span>$750.00</span>
                            </div>  --}}
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="media-1">
                    <a href="#" class="d-block mb-3"><img src="{{ asset('assets/wisata/images/hero-slider-1.jpg')}}" alt="Image" class="img-fluid"></a>
                    <span class="d-flex align-items-center loc mb-2">
                        <span class="icon-room mr-3"></span>
                        <span>Bazar Umum UMKM</span>
                    </span>
                    <div class="d-flex align-items-center">
                        <div>
                            <h3><a href="#">Bazar Umkm</a></h3>
                            {{--  <div class="price ml-auto">
                                <span>$520.00</span>
                            </div>  --}}
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="media-1">
                    <a href="#" class="d-block mb-3"><img src="{{ asset('assets/wisata/images/hero-slider-2.jpg')}}" alt="Image" class="img-fluid"></a>
                    <span class="d-flex align-items-center loc mb-2">
                        <span class="fa fa-whatsapp mr-3"></span>
                        <span>Kolaborasi dan sponsor</span>
                    </span>
                    <div class="d-flex align-items-center">
                        <div>
                            <h3><a href="#">Kolaborasi dan sponsor</a></h3>
                            {{--  <div class="price ml-auto">
                                <span>$520.00</span>
                            </div>  --}}
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="media-1">
                    <a href="#" class="d-block mb-3"><img src="{{ asset('assets/wisata/images/hero-slider-3.jpg')}}" alt="Image" class="img-fluid"></a>
                    <span class="d-flex align-items-center loc mb-2">
                        <span class="icon-room mr-3"></span>
                        <span>Artikel</span>
                    </span>
                    <div class="d-flex align-items-center">
                        <div>
                            <h3><a href="#">Artikel</a></h3>
                            {{--  <div class="price ml-auto">
                                <span>$750.00</span>
                            </div>  --}}
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<script>
    $(function() {
        var slides = $('.slides'),
        images = slides.find('img');

        images.each(function(i) {
            $(this).attr('data-id', i + 1);
        })

        var typed = new Typed('.typed-words', {
            strings: ["San Francisco."," Paris."," New Zealand.", " Maui.", " London."],
            typeSpeed: 80,
            backSpeed: 80,
            backDelay: 4000,
            startDelay: 1000,
            loop: true,
            showCursor: true,
            preStringTyped: (arrayPos, self) => {
                arrayPos++;
                console.log(arrayPos);
                $('.slides img').removeClass('active');
                $('.slides img[data-id="'+arrayPos+'"]').addClass('active');
            }

        });
    })
</script>
@endsection


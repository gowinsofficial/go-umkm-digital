@extends('templates.nav')

@section('csspage')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="hero hero-inner">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mx-auto text-center">
        <div class="intro-wrap">
          <h1 class="mb-0">Detail Kuliner</h1>
          
        </div>
      </div>
    </div>
  </div>
</div>



<div class="untree_co-section">
  <div class="container my-5">
    <div class="mb-5">
      <div class="owl-single dots-absolute owl-carousel">
        <img src="{{ asset('assets/wisata/images/slider-1.jpg')}}" alt="Free HTML Template by Untree.co" class="img-fluid">
        <img src="{{ asset('assets/wisata/images/slider-2.jpg')}}" alt="Free HTML Template by Untree.co" class="img-fluid">
        <img src="{{ asset('assets/wisata/images/slider-4.jpg')}}" alt="Free HTML Template by Untree.co" class="img-fluid">
      </div>
    </div>

    <div class="row justify-content-center">

      <div class="col-lg-4">
        <div class="custom-block" data-aos="fade-up">
          <h2 class="section-title">{{ $kuliner->nama }}</h2>
          <div class="stars">
            <span class="fa fa-star checked">4,5</span>
          </div>
          <div class="custom-accordion" id="accordion_1">
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="add-to-cart btn btn-default" type="button"><span class="fa fa-whatsapp fa-2x"></span> </button>
                <button class="like btn btn-default" type="button"><span class="fa fa-map-marker fa-2x"></span></button>
              </h2>
              <h4 class="mb-0"><span>Rp. 24.000</span></h4>
              

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                <div class="accordion-body">
                  Warung Bebek Sinjay berubah menjadi ikon kuliner Madura. Siapa yang tidak tahu atau sekadar mendengar namanya. Bebek Sinjay terkenal karena menyuguhkan bebek kremes dengan cocolan sambal pencit..
                </div>
              </div>
            </div> 

          </div>
        </div> <!-- END .custom-block -->
        <div class="custom-block" data-aos="fade-up">
          <h2 class="section-title">Gallery</h2>
          <div class="row gutter-v2 gallery">
            <div class="col-4">
              <a href="{{ asset('assets/wisata/images/gal_1.jpg')}}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/wisata/images/gal_1.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-4">
              <a href="{{ asset('assets/wisata/images/gal_2.jpg')}}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/wisata/images/gal_2.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-4">
              <a href="{{ asset('assets/wisata/images/gal_3.jpg')}}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/wisata/images/gal_3.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-4">
              <a href="{{ asset('assets/wisata/images/gal_4.jpg')}}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/wisata/images/gal_4.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-4">
              <a href="{{ asset('assets/wisata/images/gal_5.jpg')}}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/wisata/images/gal_5.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="col-4">
              <a href="{{ asset('assets/wisata/images/gal_6.jpg')}}" class="gal-item" data-fancybox="gal"><img src="{{ asset('assets/wisata/images/gal_6.jpg')}}" alt="Image" class="img-fluid"></a>
            </div>
          </div>
        </div> 
     
    </div>
  </div>
</div>
  
  
@endsection



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
        @foreach($kuliner->image->imgdetail as $image)
        <img src="{{ \Illuminate\Support\Facades\Storage::url($image->directory) }}" alt=".." class="img-fluid">
        @endforeach
       
      </div>
    </div>

    <div class="row justify-content-center">
      
      <div class="col-lg-4">
        <div class="custom-block" data-aos="fade-up">
          <h2 class="section-title">{{ $sale->nama }}</h2>
         
          <div class="stars">
            <span class="fa fa-star checked"> {{ $sale->rating }}</span>
          </div>
          <div class="custom-accordion" id="accordion_1">
            <div class="accordion-item">
              <h2 class="mb-0">
                <a href="https://Wa.me/{{$kuliner->whatsapp_umkm}}"><button class="add-to-cart btn btn-default" type="button"><span class="fa fa-whatsapp fa-2x"></span> </button></a>
                <a href="{{ $kuliner->link_resto }}"><button class="like btn btn-default" type="button"><span class="fa fa-map-marker fa-2x"></span></button></a>
              </h2>
              <h4 class="mb-0"><span>Rp. {{ $kuliner->harga }}</span></h4>
              

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_1">
                <div class="accordion-body">
                  {{ $kuliner->detail }}
                </div>
              </div>
            </div> 

          </div>
        </div> <!-- END .custom-block -->
        <div class="custom-block" data-aos="fade-up">
          <h2 class="section-title">Gallery</h2>
          <div class="row gutter-v2 gallery">
            @foreach($kuliner->image->imgdetail as $image)
            <div class="col-4">
              <a src="{{ \Illuminate\Support\Facades\Storage::url($image->directory) }}" class="gal-item" data-fancybox="gal"><img src="{{ \Illuminate\Support\Facades\Storage::url($image->directory) }}" alt="Image" class="img-fluid"></a>
            </div>
            @endforeach
          </div>
        </div> 
     
    </div>
  </div>
</div>
  
  
@endsection



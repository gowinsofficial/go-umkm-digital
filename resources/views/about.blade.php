@extends('templates.nav')
@inject('setting', 'App\Http\Controllers\Settings')
@section('csspage')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('content')

<div class="hero hero-inner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto text-center">
          <div class="intro-wrap">
            <h1 class="mb-0">About Us</h1>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-single dots-absolute owl-carousel">
            @foreach($sliders as $image)
            <img
              src="{{ \Illuminate\Support\Facades\Storage::url($image->img_name) }}"
              alt="Free HTML Template by Untree.co"
              class="img-fluid rounded-20"
            />
            @endforeach
            
          </div>
        </div>
        <div class="col-lg-5 pl-lg-5 ml-auto">
          <h2 class="section-title mb-4">Syarat dan Ketentuan</h2>
          <p>
            {{ $setting::get("syarat-ketentuan") }}
          </p>
          
        </div>
      </div>
    </div>
  </div>

  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-6 text-center">
          <h2 class="section-title mb-3 text-center">Team</h2>
          <p>
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Separated
            they live in Bookmarksgrove right at the coast of the Semantics, a
            large language ocean.
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img
              src="{{ asset('assets/wisata/images/tika.jpg')}}"
              alt="Image"
              class="img-fluid mb-4 rounded-20"
            />
            <div class="px-3">
              <h3 class="mb-0">Tika Noviyanti</h3>
              <p>CEO</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="team">
            <img
              src="{{ asset('assets/wisata/images/feri.jpg')}}"
              alt="Image"
              class="img-fluid mb-4 rounded-20"
            />
            <div class="px-3">
              <h3 class="mb-0"> Feri Yulianto
                Creative 
                </h3>
              <p>Creative</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 mb-4">
          <div class="team">
            <img
              src="{{ asset('assets/wisata/images/naurus.jpg')}}"
              alt="Image"
              class="img-fluid mb-4 rounded-20"
            />
            <div class="px-3">
              <h3 class="mb-0">Nurus Samsiyati
                </h3>
              <p>Admin</p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
@endsection
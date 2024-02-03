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

  
@endsection
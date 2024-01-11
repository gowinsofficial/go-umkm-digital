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
          <h1 class="mb-5">
            <span class="d-block">Ojol Madura</span> 
            <span class="typed-words"></span>
          </h1>

          
        </div>
      </div>
      <div class="col-lg-5">
        <div class="slides">
          <img src="{{ asset('assets/img/logo/logo-umkm.jpg')}}" alt="Image" class="img-fluid active">
                   
        </div>
      </div>
    </div>
  </div>
</div>
<div class="untree_co-section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-6">
        <h2 class="section-title text-center mb-3">
          Ojol Madura
         
        </h2>
      </div>
    </div>
    <div class="row">
      @foreach ($ojolmadura as $row)
      <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <div class="media-1">
          <a href="https://Wa.me/{{$row->whatsapp_to}}" class="d-block mb-3"
            ><img
              src="{{ \Illuminate\Support\Facades\Storage::url($row->image->imgdetail[0]->directory)}}"
              alt="Image"
              class="img-fluid"
          /></a>
          <span class="d-flex align-items-center loc mb-2">
            <span class="icon-room mr-3"></span>
            <span>{{ $row->nama}}</span>
          </span>
          <div class="d-flex align-items-center">
            <div>
              <h3><a href="">{{ $row->nama }}</a></h3>
              
            </div>
          </div>
        </div>
      </div>
      @endforeach
     
    </div>
  </div>
</div>
       
@endsection   



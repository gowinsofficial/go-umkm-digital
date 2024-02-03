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
            <span class="d-block">Madura TV</span> 
            <span class="typed-words"></span>
          </h1>

          <div class="row">
            <div class="col-12">
              <form class="form">
                <div class="row mb-2">
                  <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                    <select
                      name="category"
                      id=""
                      class="form-control custom-select"
                    >
                      <option value="">--Pilih Kategori--</option>
                      <option value="budaya madura">Budaya Madura</option>
                      <option value="acara madura">Acara Madura</option>
                      <option value="podcast">Podcast</option>
                      <option value="profil video umkm">Profil Video UMKM</option>
                     
                    </select>
                  </div>
                  {{--  <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
                    <input
                      type="text"
                      class="form-control"
                      name="daterange"
                    />
                  </div>  --}}
                  <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
                    <input
                      type="text"
                      class="form-control"
                      name="tv"
                      placeholder="cari TV..."
                      value="{{ request('tv') }}"
                    />
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                    <input
                      type="submit"
                      class="btn btn-primary btn-block"
                      value="Search"
                    />
                  </div>
                  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
@if ($maduratv->count())
<div class="untree_co-section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-6">
        <h2 class="section-title text-center mb-3">
          Madura Tv 
          {{--  {{ dd($maduratv) }}  --}}
        </h2>
      </div>
    </div>
    <div class="row">
      @foreach ($maduratv as $row)
      <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        {{--  <div class="media-1">
          <a href="{{ $row->direct_link }}" class="d-block mb-3"
            ><img
              src="{{ \Illuminate\Support\Facades\Storage::url($row->image->imgdetail[0]->directory ) }}"
              alt="Image"
              class="img-fluid"
          /></a>
          <span class="d-flex align-items-center loc mb-2">
            <span class="icon-room mr-3"></span>
            <span>{{ $row->kategori }}</span>
          </span>
          <div class="d-flex align-items-center">
          </div>
        </div>  --}}
        <div class="untree_co-section">
          <div class="container">
            <div class="row justify-content-between align-items-center">
              <div class="col-lg-12">
                <figure class="img-play-video">
                  <a
                    id="play-video"
                    class="video-play-button"
                    href="{{ $row->direct_link }}"
                    data-fancybox
                  >
                    <span></span>
                  </a>
                  <img
                    src="{{ \Illuminate\Support\Facades\Storage::url($row->image->imgdetail[0]->directory ) }}"
                    alt="Image"
                    class="img-fluid rounded-20"
                  />
                </figure>
                <span>{{ $row->detail }}</span>
              </div>
    
             
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
  </div>
</div>
@else
<p class="text-center fs-4">No post found.</p>
@endif        
@endsection   



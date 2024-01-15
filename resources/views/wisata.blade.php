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
            <span class="d-block">Pariwisata Madura</span> 
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
                      value="{{ request('category') }}"
                    >
                      <option value="">-Pilih Kategori-</option>
                      <option value="Bangkalan">Bangkalan</option>
                      <option value="Sampang">Sampang</option>
                      <option value="Pamekasan">Pamekasan </option>
                      <option value="Sumenep">Sumenep</option>
                     
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
                      name="pariwisata"
                      placeholder="cari wisata..."
                      value="{{ request('pariwisata') }}"
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
                  {{--  <div class="col-lg-8">
                    <label class="control control--checkbox mt-3">
                      <span class="caption">Save this search</span>
                      <input type="checkbox" checked="checked" />
                      <div class="control__indicator"></div>
                    </label>
                  </div>  --}}
                </div>
              </form>
            </div>
          </div>
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
@if ($pariwisata->count())
<div class="untree_co-section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-6">
        <h2 class="section-title text-center mb-3">
          Wisata Madura
        </h2>
      </div>
    </div>
    <div class="row">
      @foreach ($pariwisata as $row)
      <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <div class="media-1">
          <a href="{{ route('wisatapage.show', $row->id_pariwisata) }}" class="d-block mb-3"
            ><img
              src="{{ \Illuminate\Support\Facades\Storage::url($row->image->imgdetail[0]->directory)}}"
              alt="Image"
              class="img-fluid"
          /></a>
          <span class="d-flex align-items-center loc mb-2">
            <span class="icon-room mr-3"></span>
            <span>{{ $row->menu->nama_menu }}</span>
          </span>
          <div class="d-flex align-items-center">
            <div>
              <h3><a href="{{ route('wisatapage.show', $row->id_pariwisata) }}">{{ $row->nama }}</a></h3>
              <div class="price ml-auto">
                    <span class="fa fa-star checked">{{ $row->rating }}</span>
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



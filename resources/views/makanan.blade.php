@extends('templates.nav')
@section('csspage')

@endsection
@section('content')

<div class="hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="intro-wrap">
          <h1 class="mb-5">
            <span class="d-block">Kuliner Madura</span> 
            <span class="typed-words"></span>
          </h1>
          {{--  <pre>{{ dd($kuliner->image) }}</pre>  --}}
          <div class="row">
            <div class="col-12">
              <form class="form" action="/kuliner">
                <div class="row mb-2">
                  <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                    <select
                      name="category"
                      id=""
                      class="form-control custom-select"
                    >
                      <option value="">Kategori</option>
                      <option value="">Makanan</option>
                      <option value="">Minuman </option>
                      <option value="">Snack</option>
                     
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
                      name="kuliner"
                      class="form-control"
                      placeholder="cari kuliner..."
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
<div class="untree_co-section">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      
      <div class="col-lg-6">
        <h2 class="section-title text-center mb-3">
          Special Offers &amp; Discounts
        </h2>
       
      </div>
    </div>
    <div class="row">
      @foreach ($batik as $row)
      <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <div class="media-1">
          <a href="{{ route('kulinerpage.show', $row->id_kuliner) }}" class="d-block mb-3"
            ><img
              src="{{ \Illuminate\Support\Facades\Storage::url($row->image->imgdetail[0]->directory)}}"
              alt="Image"
              class="img-fluid"
          /></a>
          <span class="d-flex align-items-center loc mb-2">
            <span class="icon-room mr-3"></span>
            <span>{{$row->resto}}</span>
          </span>
          <div class="d-flex align-items-center">
            <div>
              <h3><a href="{{ route('kulinerpage.show', $row->id_kuliner) }}">{{ $row->nama }}</a></h3>
              <div class="price ml-auto">
                <span>Rp. {{ $row->harga }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      {{--  <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <div class="media-1">
          <a href="/kuliner-detail" class="d-block mb-3"
            ><img
              src="{{ asset('assets/wisata/images/hero-slider-2.jpg')}}"
              alt="Image"
              class="img-fluid"
          /></a>
          <span class="d-flex align-items-center loc mb-2">
            <span class="icon-room mr-3"></span>
            <span>United States</span>
          </span>
          <div class="d-flex align-items-center">
            <div>
              <h3><a href="/kuliner-detail">San Francisco</a></h3>
              <div class="price ml-auto">
                <span>$520.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <div class="media-1">
          <a href="/kuliner-detail" class="d-block mb-3"
            ><img
              src="{{ asset('assets/wisata/images/hero-slider-3.jpg')}}"
              alt="Image"
              class="img-fluid"
          /></a>
          <span class="d-flex align-items-center loc mb-2">
            <span class="icon-room mr-3"></span>
            <span>Malaysia</span>
          </span>
          <div class="d-flex align-items-center">
            <div>
              <h3><a href="/kuliner-detail">Perhentian Islands</a></h3>
              <div class="price ml-auto">
                <span>$750.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <div class="media-1">
          <a href="/kuliner-detail" class="d-block mb-3"
            ><img
              src="{{ asset('assets/wisata/images/hero-slider-4.jpg')}}"
              alt="Image"
              class="img-fluid"
          /></a>

          <span class="d-flex align-items-center loc mb-2">
            <span class="icon-room mr-3"></span>
            <span>Switzerland</span>
          </span>

          <div class="d-flex align-items-center">
            <div>
              <h3><a href="/kuliner-detail">Lake Thun</a></h3>
              <div class="price ml-auto">
                <span>$520.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>  --}}
    </div>
  </div>
</div>
       
@endsection   



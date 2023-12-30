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
            <span class="d-block">Batik Madura</span> 
            <span class="typed-words"></span>
          </h1>

          <div class="row">
            <div class="col-12">
              <form class="form">
                <div class="row mb-2">
                  <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                    <select
                      name=""
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
                      class="form-control"
                      placeholder="cari batik..."
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
                    <img src="{{ asset('assets/wisata/images/hero-slider-2.jpg')}}" alt="Image" class="img-fluid">
                    <img src="{{ asset('assets/wisata/images/hero-slider-3.jpg')}}" alt="Image" class="img-fluid">
                    <img src="{{ asset('assets/wisata/images/hero-slider-4.jpg')}}" alt="Image" class="img-fluid">
                    <img src="{{ asset('assets/wisata/images/hero-slider-5.jpg')}}" alt="Image" class="img-fluid">
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
        <p>
          Far far away, behind the word mountains, far from the countries
          Vokalia and Consonantia, there live the blind texts. Separated
          they live in Bookmarksgrove right at the coast of the Semantics, a
          large language ocean.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <div class="media-1">
          <a href="/batik-detail" class="d-block mb-3"
            ><img
              src="{{ asset('assets/wisata/images/hero-slider-1.jpg')}}"
              alt="Image"
              class="img-fluid"
          /></a>
          <span class="d-flex align-items-center loc mb-2">
            <span class="icon-room mr-3"></span>
            <span>Italy</span>
          </span>
          <div class="d-flex align-items-center">
            <div>
              <h3><a href="/batik-detail">Rialto Mountains</a></h3>
              <div class="price ml-auto">
                <span>$520.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <div class="media-1">
          <a href="/batik-detail" class="d-block mb-3"
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
              <h3><a href="/batik-detail">San Francisco</a></h3>
              <div class="price ml-auto">
                <span>$520.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <div class="media-1">
          <a href="/batik-detail" class="d-block mb-3"
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
              <h3><a href="/batik-detail">Perhentian Islands</a></h3>
              <div class="price ml-auto">
                <span>$750.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
        <div class="media-1">
          <a href="/batik-detail" class="d-block mb-3"
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
              <h3><a href="/batik-detail">Lake Thun</a></h3>
              <div class="price ml-auto">
                <span>$520.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
       
@endsection   



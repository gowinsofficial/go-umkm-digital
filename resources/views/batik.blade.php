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
          {{--  <pre>{{ dd($kuliner->image) }}</pre>  --}}
          <div class="row">
            <div class="col-12">
              <form class="form" action="/batikp">
                <div class="row mb-2">
                  <div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
                    <select
                      name="category"
                      id=""
                      class="form-control custom-select"
                    >
                      <option value="">Kategori</option>
                      <option value="bangkalan">Bangkalan</option>
                      <option value="sampang">Sampang </option>
                      <option value="pamekasan">pamekasan </option>
                      <option value="sumenep">Sumenep</option>
                     
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
                      name="batik"
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
     
    </div>
  </div>
</div>
@if ($batik->count())
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
          <a href="{{ route('batikpage.show', $row->id_batik) }}" class="d-block mb-3"
            ><img
              src="{{ \Illuminate\Support\Facades\Storage::url($row->image->imgdetail[0]->directory)}}"
              alt="Image"
              class="img-fluid"
          /></a>
          <span class="d-flex align-items-center loc mb-2">
            <span class="icon-room mr-3"></span>
            <span>{{$row->nama }}</span>
          </span>
          <div class="d-flex align-items-center">
            <div>
              <h3><a href="{{ route('batikpage.show', $row->id_batik) }}">{{ $row->detail  }}</a></h3>
              <div class="price ml-auto">
                <span>Rp. {{ $row->harga }}</span>
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



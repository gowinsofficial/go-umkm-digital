@extends('layouts.app')

@section('content')
<div class="hero">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="intro-excerpt">
          <h1>UMKM GO <span clsas="d-block">Digital</span></h1>
          <p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>
          <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="hero-img-wrap">
          <img src="{{ asset('asset/image/bener3.jpg') }}" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</div>

<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
  <link rel="stylesheet" href="{{ asset('asset/css/templatemo-topic-listing.css') }}">
  <div class="container">
      <div class="row">

          <div class="col-lg-8 col-12 mx-auto">
             

              <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                  <div class="input-group input-group-lg">
                      <span class="input-group-text bi-search" id="basic-addon1">
                          
                      </span>

                      <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Design, Code, Marketing, Finance ..." aria-label="Search">

                      <button type="submit" class="form-control btn-waarning">Search</button>
                  </div>
              </form>
          </div>

      </div>
  </div>
</section>
  <section>
    <div class="container-fluid">
      <div class="row">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Design</button>
              </li>

              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Marketing</button>
              </li>

              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Finance</button>
              </li>

              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Music</button>
              </li>

              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Education</button>
              </li>
          </ul>
      </div>
  </div>

  </section>
  <section>
    <div class="container mt-5">
      <div class="row text-center">
        <div class="col">
          <h2>Flagship business</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
              <img src="{{ asset('asset/image/bener2.jpg') }}" class="card-img-top" alt="Sale Image">
              <div class="card-body">
                  <h5 class="card-title">Special Sale!</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at justo vel quam consequat tincidunt.</p>
                  <p class="card-text"><strong>Discount:</strong> 20%</p>
                  <p class="card-text"><strong>Valid until:</strong> December 31, 2023</p>
                  <a href="#" class="btn btn-primary">Shop Now</a>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="{{ asset('asset/image/bener2.jpg') }}" class="card-img-top" alt="Sale Image">
              <div class="card-body">
                  <h5 class="card-title">Special Sale!</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at justo vel quam consequat tincidunt.</p>
                  <p class="card-text"><strong>Discount:</strong> 20%</p>
                  <p class="card-text"><strong>Valid until:</strong> December 31, 2023</p>
                  <a href="#" class="btn btn-primary">Shop Now</a>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="{{ asset('asset/image/bener2.jpg') }}" class="card-img-top" alt="Sale Image">
              <div class="card-body">
                  <h5 class="card-title">Special Sale!</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at justo vel quam consequat tincidunt.</p>
                  <p class="card-text"><strong>Discount:</strong> 20%</p>
                  <p class="card-text"><strong>Valid until:</strong> December 31, 2023</p>
                  <a href="#" class="btn btn-primary">Shop Now</a>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="{{ asset('asset/image/bener2.jpg') }}" class="card-img-top" alt="Sale Image">
              <div class="card-body">
                  <h5 class="card-title">Special Sale!</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at justo vel quam consequat tincidunt.</p>
                  <p class="card-text"><strong>Discount:</strong> 20%</p>
                  <p class="card-text"><strong>Valid until:</strong> December 31, 2023</p>
                  <a href="#" class="btn btn-primary">Shop Now</a>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
              <img src="{{ asset('asset/image/bener2.jpg') }}" class="card-img-top" alt="Sale Image">
              <div class="card-body">
                  <h5 class="card-title">Special Sale!</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at justo vel quam consequat tincidunt.</p>
                  <p class="card-text"><strong>Discount:</strong> 20%</p>
                  <p class="card-text"><strong>Valid until:</strong> December 31, 2023</p>
                  <a href="#" class="btn btn-primary">Shop Now</a>
              </div>
          </div>
        </div>
      </div>
  </div>
  </section>
@endsection

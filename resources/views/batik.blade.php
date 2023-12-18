@extends('layouts.app')

@section('content')
<div class="row mt-3 mb-3">
    <div class="col-md-4">
      
         <div class="d-flex">
            <a class="btn btn-primary " href="#" role="button">Batik Asli Madura Motif Serat Kayu</a>
            <a class="btn btn-primary " href="#" role="button">Batik Asli Madura Motif Lancor</a>
            <a class="btn btn-primary " href="#" role="button">Batik Asli Madura Motif Serat Batu</a>
            <a class="btn btn-primary " href="#" role="button">Batik Asli Madura Motif Mata</a>
            <select class="form-select form-select-sm" aria-label="Small select example">
                <option selected>Pilih Kota</option>
                <option value="1">Bangkalan</option>
                <option value="2">Sampang</option>
                <option value="3">Pamekasan </option>
                <option value="3">Sumenep </option>
              </select>   
         </div>
    </div>
    <div class="col-md-4 mx-3">
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>


<div class="container">
  <div class="row">
    <div class="container text-wite">
        <h1 class="display-4 fw-bold">Daftar Menu</h1>
    </div>
    </div>
<div class="card mb-3" style="max-width: 100%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('asset/image/Batik.jpg') }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Batik Asli Madura Motif Serat Kayu</h5>
          <p class="card-text">Batik Asli Madura Motif Serat Kayu Merupakan Batik khas yang berada di madura yang terletak Pada Kota Bangkalan, Batik Ini Banyak Diminati oleh para Wisatawan,Batik ini Sangat gurih dengan Motif Beragam yang Khas.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
          <i class="bi bi-whatsapp" style="font-size: 2rem; color: green;">WA</i>
                <!-- Location icon -->
                <i class="bi bi-geo-alt" style="font-size: 2rem; color: blue;">Lokasi</i>
        </div>
        
      </div>
    </div>
</div>
<div class="card mb-3" style="max-width: 100%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('asset/image/Batik.jpg') }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Batik Asli Madura Motif Serat Kayu</h5>
          <p class="card-text">Batik Asli Madura Motif Serat Kayu Merupakan Batik khas yang berada di madura yang terletak Pada Kota Bangkalan, Batik Ini Banyak Diminati oleh para Wisatawan,Batik ini Sangat gurih dengan Motif Beragam yang Khas.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
</div>
<div class="card mb-3" style="max-width: 100%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('asset/image/Batik.jpg') }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Batik Asli Madura Motif Serat Kayu</h5>
          <p class="card-text">Batik Asli Madura Motif Serat Kayu Merupakan Batik khas yang berada di madura yang terletak Pada Kota Bangkalan, Batik Ini Banyak Diminati oleh para Wisatawan,Batik ini Sangat gurih dengan Motif Beragam yang Khas.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
</div>
<div class="card mb-3" style="max-width: 100%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ asset('asset/image/Batik.jpg') }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Batik Asli Madura Motif Serat Kayu</h5>
          <p class="card-text">Batik Asli Madura Motif Serat Kayu Merupakan Batik khas yang berada di madura yang terletak Pada Kota Bangkalan, Batik Ini Banyak Diminati oleh para Wisatawan,Batik ini Sangat gurih dengan Motif Beragam yang Khas.</p>
          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
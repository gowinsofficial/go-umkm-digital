@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data / Sale  /</span> Edit</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('sale.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        @foreach($sale as $sale)
                        <h5 class="mb-0">Edit {{ $sale->title }}</h5>
                        @endforeach
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sale.update', $sale->id_sale) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="menu">Platform</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="menu" name="menu">
                                        @foreach($menu as $row)
                                            <option value="{{$row->id_menu}}" {{ $row->id_menu==$branding->id_brand ? 'selected' : '' }}>{{$row->nama_menu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="kategori">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="kategori" name="kategori">
                                        <option value="kuliner madura" {{ $sale->kategori=='kuliner madura' ? 'selected' : '' }}>Kuliner Madura</option>
                                        <option value="batik madura" {{ $sale->kategori=='batik madura' ? 'selected' : '' }} >Batik Madura</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nama_produk">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="nama_produk"
                                        placeholder="Nama Produk" name="nama_produk" required value="{{ $sale->nama_produk }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="harga_awal">Harga Awal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="harga_awal"
                                        placeholder="Harga Awal" name="harga_awal" required  value="{{ $sale->harga_awal }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="diskon">Diskon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="diskon"
                                        placeholder="Diskon" name="diskon" required value="{{ $sale->diskon }}"  />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="detail">Detail</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control w-50" id="detail" rows="3" name="detail" placeholder="Detail Content">{{ $sale->detail }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="whatsapp">No. Whatsapp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="whatsapp"
                                        placeholder="No. Whatsapp" name="whatsapp" required value="{{ $sale->whatsapp }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="maps">Lokasi Maps</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="maps"
                                        placeholder="Lokasi Maps" name="maps" required value="{{ $sale->maps }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="images">Gambar Sale</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control w-50" id="images" name="image" accept="image/*"  />
                                </div>
                            </div>


                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-sm btn-primary"><i
                                            class='bx bx-save'></i> Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data / Batik Madura /</span> Tambah</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('batik.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        <h5 class="mb-0">Batik Madura</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('batik.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="menu">Khas</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="menu" name="menu">
                                        @foreach($menu as $row)
                                            <option value="{{$row->id_menu}}">{{$row->nama_menu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nama">Nama Batik</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="nama"
                                        placeholder="Nama Batik" name="nama" required />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="motif">Motif</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="motif"
                                           placeholder="Motif" name="motif" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="corak">Corak</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="corak"
                                           placeholder="Corak" name="corak" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="harga">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="harga"
                                           placeholder="Harga" name="harga" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="rating">Rating</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control w-50" id="rating"
                                           placeholder="Rating" name="rating" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="whatsapp">Whatsapp UMKM</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="whatsapp"
                                           placeholder="Whatsapp UMKM , Pakai (62): 62xxxxxxxxxxx" name="whatsapp" required />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="maps">Lokasi Maps</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="maps"
                                           placeholder="Maps" name="maps" required />
                                </div>
                            </div>

                            <div class="row mb-3"> 
                                <label class="col-sm-2 col-form-label" for="detail">Detail</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control w-50" id="detail" rows="3" name="detail" placeholder="Detail"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="images">Gambar Batik</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control w-50" id="images" name="images[]" accept="image/*" multiple required />
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

@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data / Kuliner Madura /</span> Edit</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('batik.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        <h5 class="mb-0">Edit {{ $batik->nama }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('batik.update', $batik->id_batik) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="menu">Khas</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="menu" name="menu">
                                        @foreach($menu as $row)
                                            <option value="{{$row->id_menu}}" {{ $row->id_menu==$batik->id_menu ? 'selected' : '' }}>{{$row->nama_menu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nama">Nama Batik</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="nama"
                                           placeholder="Nama Batik" name="nama" required value="{{ $batik->nama }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="motif">Motif</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="motif"
                                           placeholder="Motif" name="motif" value="{{ $batik->motif }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="corak">Corak</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="corak"
                                           placeholder="Corak" name="corak" value="{{ $batik->corak }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="harga">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="harga"
                                           placeholder="Harga" name="harga" value="{{ $batik->harga }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="rating">Rating</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control w-50" id="rating"
                                           placeholder="Rating" name="rating" value="{{ $batik->rating }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="whatsapp">Whatsapp UMKM</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="whatsapp"
                                           placeholder="Whatsapp UMKM" name="whatsapp" value="{{ $batik->whatsapp_umkm }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="maps">Lokasi Maps</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="maps"
                                           placeholder="Lokasi Maps" name="maps" value="{{ $batik->maps }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="detail">Detail</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control w-50" id="detail" rows="3" name="detail" placeholder="Detail">{{ $batik->detail }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="images">Gambar Batik</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control w-50" id="images" name="images[]" accept="image/*" multiple />
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

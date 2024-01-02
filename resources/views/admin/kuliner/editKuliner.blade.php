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
                        <a href="{{route('kuliner.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        <h5 class="mb-0">Edit {{ $kuliner->nama }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kuliner.update', $kuliner->id_kuliner) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="menu">Khas</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="menu" name="menu">
                                        @foreach($menu as $row)
                                            <option value="{{$row->id_menu}}" {{ $row->id_menu==$kuliner->id_menu ? 'selected' : '' }}>{{$row->nama_menu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nama">Nama Kuliner</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="nama"
                                        placeholder="Nama Kuliner" name="nama" required value="{{ $kuliner->nama }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="kategori">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="kategori" name="kategori">
                                        <option value="makanan" {{ $kuliner->kategori=='makanan' ? 'selected' : '' }}>Makanan</option>
                                        <option value="minuman" {{ $kuliner->kategori=='minuman' ? 'selected' : '' }}>Minuman</option>
                                        <option value="snack" {{ $kuliner->kategori=='snack' ? 'selected' : '' }}>Snack</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="outline">Outline</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="outline"
                                           placeholder="Outline" name="outline" value="{{ $kuliner->outline }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="resto">Resto</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="resto"
                                           placeholder="Resto" name="resto" required value="{{ $kuliner->resto }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="resto_link">Link Resto</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="resto_link"
                                           placeholder="Link Resto" name="resto_link" value="{{ $kuliner->link_resto }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="harga">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="harga"
                                           placeholder="Harga" name="harga" value="{{ $kuliner->harga }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="rating">Rating</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control w-50" id="rating"
                                           placeholder="Rating" name="rating" value="{{ $kuliner->rating }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="detail">Detail</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control w-50" id="detail" rows="3" name="detail" placeholder="Detail">{{ $kuliner->detail }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="images">Gambar Kuliner</label>
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

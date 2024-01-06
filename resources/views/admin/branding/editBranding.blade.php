@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data / Branding UMKM /</span> Edit</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('branding.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        <h5 class="mb-0">Edit {{ $branding->nama }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('branding.update', $branding->id_brand) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="menu">Platform</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="menu" name="menu">
                                        @foreach($menu as $row)
                                            <option value="{{$row->id_menu}}" {{ $row->id_menu==$branding->id_brand ? 'selected' : '' }}>{{$row->nama_menu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="nama">Nama Brand</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="nama"
                                           placeholder="Nama Brand" name="nama" required value="{{ $branding->nama }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="kategori">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="kategori" name="kategori">
                                        <option value="pemasaran online" {{ $branding->kategori=='pemasaran online' ? 'selected' : '' }}>Pemasaran Online</option>
                                        <option value="live streaming" {{ $branding->kategori=='live streaming' ? 'selected' : '' }}>Live Streaming</option>
                                        <option value="apps" {{ $branding->kategori=='apps' ? 'selected' : '' }}>Apps</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="detail">Detail</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control w-50" id="detail" rows="3" name="detail" placeholder="Detail">{{ $branding->detail }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="images">Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control w-50" id="images" name="image" accept="image/*" />
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

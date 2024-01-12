@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data / Bazar /</span> Edit</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('bazar.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        <h5 class="mb-0">Edit {{ $bazar->title }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('bazar.update', $bazar->id_bazar) }}" method="POST" enctype="multipart/form-data">
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
                                <label class="col-sm-2 col-form-label" for="title">Nama Bazar</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="title"
                                           placeholder="Nama Bazar" name="title" required value="{{ $bazar->title }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="tgl_acara">Tanggal Acara</label>
                                <div class="col-sm-10">
                                    <input type ="date" class="form-control w-50" id="tgl_acara" rows="3" name="tgl_acara" placeholder="Tanggal Acara Bazar" required required value="{{ $bazar->tgl_acara }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="destination_url">URL</label>
                                <div class="col-sm-10">

                                    <input type="text" class="form-control w-50" id="destination_url"
                                           placeholder="URL" name="destination_url" required value="{{ $bazar->destination_url }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="images">Gambar Bazar</label>
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

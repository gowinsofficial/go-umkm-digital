@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data / Slider Images /</span> Tambah</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('slider.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        <h5 class="mb-0">Slider Images</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="title">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="title"
                                        placeholder="Title" name="title" required />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="images">Upload Gambar</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control w-50" id="images" name="image" accept="image/*" required />
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

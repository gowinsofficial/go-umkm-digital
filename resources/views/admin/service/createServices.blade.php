@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data / Service /</span> Tambah</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('service.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        <h5 class="mb-0">Tambah Service</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="menu">Khas</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="menu" name="menu">
                                        @foreach($menu as $row)
                                            <option value="{{$row->id_menu}}">{{$row->nama_menu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="group">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="group" name="group">
                                        <option value="website">Website</option>
                                        <option value="ecommerce">Ecommerce</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="sub_group">Sub Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="group" name="group">
                                        <option value="website">Website</option>
                                        <option value="shoppe">Shoppe</option>
                                        <option value="tiktok">Tik-Tok</option>
                                        <option value="tokopedia">Tokopedia</option>
                                        <option value="lazada">Lazada</option>

                                    </select>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="template_wa">Template WA</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="template_wa"
                                           placeholder="Template WA" name="template_wa" required />
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

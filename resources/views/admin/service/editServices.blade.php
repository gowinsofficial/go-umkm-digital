@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data / Service /</span> Edit</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('service.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        <h5 class="mb-0">Edit {{ $services->nama }}</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('service.update', $services->id_event) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="menu">Khas</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="menu" name="menu">
                                        @foreach($menu as $row)
                                            <option value="{{$row->id_menu}}" {{ $row->id_menu==$kuliner->id_menu ? 'selected' : '' }}>{{$row->nama_menu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="group">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="group" name="group">
                                        <option value="website" {{ $services->kategori=='website' ? 'selected' : '' }}>Website</option>
                                        <option value="ecommerce" {{ $services->kategori=='ecommerce' ? 'selected' : '' }} >Ecommerce</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="sub_group">Sub Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="group" name="group">
                                        <option value="website" {{ $services->kategori=='website' ? 'selected' : '' }}>Website</option>
                                        <option value="shoppe" {{ $services->kategori=='shoppe' ? 'selected' : '' }}>Shoppe</option>
                                        <option value="tiktok" {{ $services->kategori=='tiktok' ? 'selected' : '' }} >Tik-Tok</option>
                                        <option value="tokopedia" {{ $services->kategori=='tokopedia' ? 'selected' : '' }} >Tokopedia</option>
                                        <option value="lazada" {{ $services->kategori=='lazada' ? 'selected' : '' }}>Lazada</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="template_wa">Template WA</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="whatsapp"
                                           placeholder="Template WA" name="template_wa" value="{{ $services->template_wa }}" />
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

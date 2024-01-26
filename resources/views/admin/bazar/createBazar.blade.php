@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data / Bazar UMKM /</span> Tambah</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('bazar.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        <h5 class="mb-0">Bazar UMKM</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('bazar.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="menu">Event</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="menu" name="menu">
                                        @foreach($menu as $row)
                                            <option value="{{$row->id_menu}}">{{$row->nama_menu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="title">Nama Bazar</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="title"
                                        placeholder="Nama Bazar" name="title" required />
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="tgl_acara">Tanggal Acara</label>
                                <div class="col-sm-10">
                                    <input type ="date" class="form-control w-50" id="tgl_acara" rows="3" name="tgl_acara" placeholder="Tanggal Acara Bazar" required />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="destination_url">URL</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="destination_url"
                                        placeholder="Tujuan URL" name="destination_url" required />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="whatsapp_member">No. Whatsapp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="whatsapp_member"
                                        placeholder="No. Whatsapp Whatsapp UMKM , Pakai (62): 62xxxxxxxxxxx" name="whatsapp_member" required />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="images">Gambar Bazar</label>
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

@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data / Eventship /</span> Edit</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('eventship.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        @foreach($eventship as $eventship)
                        <h5 class="mb-0">Edit {{ $eventship->title }}</h5>
                        @endforeach
                    </div>
                    <div class="card-body">
                        <form action="{{ route('eventship.update', $eventship->id_event) }}" method="POST" enctype="multipart/form-data">
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
                                <label class="col-sm-2 col-form-label" for="title">Nama Eventship</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="title"
                                           placeholder="Nama Event" name="title" required value="{{ $eventship->title }}" />
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="direct_wa">Direct Whatsapp</label>
                                <div class="col-sm-10">
                                    <select class="form-select w-50" id="direct_wa" name="direct_wa">
                                        <option value="website" {{ $eventship->direct_wa=='Y' ? 'selected' : '' }}>Yes</option>
                                        <option value="ecommerce" {{ $eventship->direct_wa=='N' ? 'selected' : '' }} >No</option>
                                    </select>
                                </div>
                            </div> --}}

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="whatsapp_member">No. Whatsapp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="whatsapp_member"
                                        placeholder="No. Whatsapp , Pakai (62): 62xxxxxxxxxxx" name="whatsapp_member" required value="{{ $eventship->whatsapp_member }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="destination_url">URL</label>
                                <div class="col-sm-10">

                                    <input type="text" class="form-control w-50" id="destination_url"
                                           placeholder="URL" name="destination_url" required value="{{ $eventship->destination_url }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="tgl_event">Tanggal Event</label>
                                <div class="col-sm-10">
                                    <input type ="date" class="form-control w-50" id="tgl_event" rows="3" name="tgl_event" placeholder="Tanggal Event" required  value="{{ $eventship->tgl_event }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="images">Gambar Eventship</label>
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

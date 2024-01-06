@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Pariwisata /</span> Detail</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('pariwisata.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        <h5 class="mb-0">Detail {{ $pariwisatum->nama }}</h5>
                    </div>
                    <div class="card-body">

                        <table class="table table-striped tab-table">
                            <tr>
                                <th width="130">Daerah </th>
                                <th width="20">:</th>
                                <th>{{ $pariwisatum->menu->nama_menu }}</th>
                            </tr>
                            <tr>
                                <th width="130">Nama Wisata </th>
                                <th width="20">:</th>
                                <th>{{ $pariwisatum->nama }}</th>
                            </tr>
                            <tr>
                                <th width="130">Lokasi </th>
                                <th width="20">:</th>
                                <th>{{ $pariwisatum->motif }}</th>
                            </tr>
                            <tr>
                                <th width="130">Maps </th>
                                <th width="20">:</th>
                                <th>{{ $pariwisatum->corak }}</th>
                            </tr>
                            <tr>
                                <th width="130">Rating </th>
                                <th width="20">:</th>
                                <th>{{ $pariwisatum->rating }}</th>
                            </tr>
                            <tr>
                                <th width="130">Whatsapp To </th>
                                <th width="20">:</th>
                                <th>{{ $pariwisatum->whatsapp_to }}</th>
                            </tr>
                            <tr>
                                <th width="130">Detail </th>
                                <th width="20">:</th>
                                <td>{{ $pariwisatum->detail }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>
                                    @foreach($pariwisatum->image->imgdetail as $image)
                                        <img src="{{ \Illuminate\Support\Facades\Storage::url($image->directory) }}" alt=".." style="max-width:140px;">
                                    @endforeach
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

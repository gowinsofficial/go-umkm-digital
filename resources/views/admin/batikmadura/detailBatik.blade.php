@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Kuliner /</span> Detail</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('batik.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        <h5 class="mb-0">Detail {{ $batik->nama }}</h5>
                    </div>
                    <div class="card-body">

                        <table class="table table-striped tab-table">
                            <tr>
                                <th width="130">Khas </th>
                                <th width="20">:</th>
                                <th>{{ $batik->menu->nama_menu }}</th>
                            </tr>
                            <tr>
                                <th width="130">Nama Batik </th>
                                <th width="20">:</th>
                                <th>{{ $batik->nama }}</th>
                            </tr>
                            <tr>
                                <th width="130">Motif </th>
                                <th width="20">:</th>
                                <th>{{ $batik->motif }}</th>
                            </tr>
                            <tr>
                                <th width="130">Corak </th>
                                <th width="20">:</th>
                                <th>{{ $batik->corak }}</th>
                            </tr>
                            <tr>
                                <th width="130">Harga </th>
                                <th width="20">:</th>
                                <th>{{ $batik->harga }}</th>
                            </tr>
                            <tr>
                                <th width="130">Rating </th>
                                <th width="20">:</th>
                                <th>{{ $batik->rating }}</th>
                            </tr>
                            <tr>
                                <th width="130">Whatsapp UMKM </th>
                                <th width="20">:</th>
                                <th>{{ $batik->whatsapp_umkm }}</th>
                            </tr>
                            <tr>
                                <th width="130">Detail </th>
                                <th width="20">:</th>
                                <td>{{ $batik->detail }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>
                                    @foreach($batik->image->imgdetail as $image)
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

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
                        <a href="{{route('kuliner.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        <h5 class="mb-0">Detail {{ $kuliner->nama }}</h5>
                    </div>
                    <div class="card-body">

                        <table class="table table-striped tab-table">
                            <tr>
                                <th width="130">Wilayah </th>
                                <th width="20">:</th>
                                <th>{{ $kuliner->menu->nama_menu }}</th>
                            </tr>
                            <tr>
                                <th width="130">Nama Kuliner </th>
                                <th width="20">:</th>
                                <th>{{ $kuliner->nama }}</th>
                            </tr>
                            <tr>
                                <th width="130">Kategori </th>
                                <th width="20">:</th>
                                <th>{{ $kuliner->kategori }}</th>
                            </tr>
                            <tr>
                                <th width="130">Outline </th>
                                <th width="20">:</th>
                                <th>{{ $kuliner->outline }}</th>
                            </tr>
                            <tr>
                                <th width="130">Resto </th>
                                <th width="20">:</th>
                                <th>{{ $kuliner->resto }}</th>
                            </tr>
                            <tr>
                                <th width="130">Link Resto </th>
                                <th width="20">:</th>
                                <th>{{ $kuliner->link_resto }}</th>
                            </tr>
                            <tr>
                                <th width="130">Harga </th>
                                <th width="20">:</th>
                                <th>{{ $kuliner->harga }}</th>
                            </tr>
                            <tr>
                                <th width="130">Rating </th>
                                <th width="20">:</th>
                                <th>{{ $kuliner->rating }}</th>
                            </tr>
                            <tr>
                                <th width="130">Detail </th>
                                <th width="20">:</th>
                                <td>{{ $kuliner->detail }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>
                                    @foreach($kuliner->image->imgdetail as $image)
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

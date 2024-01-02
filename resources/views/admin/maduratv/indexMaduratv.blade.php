@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data /</span> Madura TV</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Madura TV</h5>
                        <a href="{{route('maduratv.create')}}"><button class="btn btn-sm btn-primary"><i
                                    class='bx bx-plus'></i> Tambah TV</button></a>
                    </div>
                    <div class="card-body">

                        <table class="table table-striped table-bordered" id="mytable">
                            <thead>
                                <tr class="table-primary">
                                    <th width="20">#</th>
                                    <th>Wilayah</th>
                                    <th>Gambar</th>
                                    <th>Kategori</th>
                                    <th>Nama Tv</th>
                                    <th>Direct Link</th>
                                    <th>Detail</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php($no = 0)
                                @foreach ($maduratv as $row)
                                    <tr>
                                        <td>{{++$no}}</td>
                                        <td>{{$row->menu->nama_menu}}</td>
                                        <td><img src="{{ \Illuminate\Support\Facades\Storage::url($row->image->imgdetail[0]->directory ) }}" alt=".." style="max-height:80px;"> </td>
                                        <td>{{$row->kategori}}</td>
                                        <td>{{$row->nama}}</td>
                                        <td>{{$row->direct_link}}</td>
                                        <td>{{$row->detail}}</td>
                                        <td>
                                            <a href="{{ route('maduratv.edit', $row->id_tv) }}"><button
                                                    class="btn btn-sm btn-info"><i class='bx bxs-edit'></i></button></a>
                                            <form class="d-inline deleteBtn" action="{{ route('maduratv.destroy', $row->id_tv) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class='bx bx-trash-alt'></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>

        $(".deleteBtn").on('click', function () {
            if (confirm("benar anda akan menghapus data?")) {
                return true;
            }
            return false;
        });
    </script>
@endsection


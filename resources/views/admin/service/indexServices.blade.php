@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data /</span> Service</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Service</h5>
                        <a href="{{route('service.create')}}"><button class="btn btn-sm btn-primary"><i
                                    class='bx bx-plus'></i> Tambah Service</button></a>
                    </div>
                    <div class="card-body">

                        <table class="table table-striped table-bordered" id="mytable">
                            <thead>
                                <tr class="table-primary">
                                    <th width="20">#</th>
                                    <th>Kategori</th>
                                    <th>Sub Kategori</th>
                                    <th>Template WA</th>
                                    {{-- <th>Whatsapp UMKM</th> --}}
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @php($no = 0)
                                @foreach ($service as $row)
                                    <tr>
                                        <td>{{++$no}}</td>
                                        {{-- <td>{{$row->menu->nama_menu}}</td> --}}
                                        <td>{{$row->group}}</td>
                                        <td>{{$row->sub_group}}</td>
                                        <td>{{$row->template_wa}}</td>
                                        {{-- <td>{{$row->whatsapp_umkm}}</td> --}}
                                        <td>
                                            <a href="{{ route('service.show', $row->id_service) }}"><button
                                                    class="btn btn-sm btn-secondary"><i class='bx bxs-show'></i></button></a>
                                            <a href="{{ route('service.edit', $row->id_service) }}"><button
                                                    class="btn btn-sm btn-info"><i class='bx bxs-edit'></i></button></a>
                                            <form class="d-inline deleteBtn" action="{{ route('service.destroy', $row->id_service) }}" method="post">
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


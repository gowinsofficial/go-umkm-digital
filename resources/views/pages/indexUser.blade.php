@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Master /</span> User</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Data User</h5>
                        <a href=""><button class="btn btn-sm btn-primary"><i
                                    class='bx bx-plus'></i></button></a>
                    </div>
                    <div class="card-body">

                        <table class="table table-striped table-bordered" id="mytable">
                            <thead>
                                <tr class="table-primary">
                                    <th width="20">Email</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>No. HP</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

{{--                                @php($no = 0)--}}
{{--                                @foreach ($dosen as $row)--}}
                                    <tr>
                                        <td>Nomor</td>
                                        <td>Data</td>
                                        <td>Data</td>
                                        <td>Data</td>
                                        <td>Data</td>
                                        <td>Data</td>
                                        <td>
                                            <a href=""><button
                                                    class="btn btn-sm btn-info"><i class='bx bxs-edit'></i></button></a>
                                            <form class="d-inline" action="" method="post">
{{--                                                @csrf--}}
{{--                                                @method('DELETE')--}}
                                                <input type="hidden" name="kode_dosen" value="">
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class='bx bx-trash-alt'></i></button>
                                            </form>
                                        </td>
                                    </tr>
{{--                                @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

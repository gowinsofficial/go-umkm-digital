@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data / User  /</span> Edit</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('user.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        @foreach($user as $user)
                        <h5 class="mb-0">Edit {{ $user->nama }}</h5>
                        @endforeach
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.update', $user->id_user) }}" method="POST" enctype="multipart/form-data">
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
                                <label class="col-sm-2 col-form-label" for="name">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="name"
                                        placeholder="Isi Nama User Anda" name="name" required value="{{ $user->name }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="username">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="username"
                                        placeholder="Isi Username Anda" name="username" required value="{{ $user->username }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="password">Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="password"
                                        placeholder="Isi Password Anda" name="password" required value="{{ $user->password }}" />
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

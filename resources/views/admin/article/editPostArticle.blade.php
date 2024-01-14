@extends('templates.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Data / Article /</span> Edit</h5>

        @include('templates.alert')

        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center">
                        <a href="{{route('article.index')}}" title="Kembali"><button class="btn btn-sm btn-primary me-2"><i
                                    class='bx bx-caret-left'></i></button></a>
                        @foreach($article as $article)
                        <h5 class="mb-0">Edit {{ $article->header }}</h5>
                        @endforeach
                    </div>
                    <div class="card-body">
                        <form action="{{ route('article.update', $article->id_article) }}" method="POST" enctype="multipart/form-data">
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
                                <label class="col-sm-2 col-form-label" for="writer">Nama Penulis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="writer"
                                        placeholder="Nama Penulis" name="writer" required value="{{ $article->writer }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="header">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="header"
                                        placeholder="Judul Artikel" name="header" required value="{{ $article->header }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="content">Content</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control w-50" id="content" rows="3" name="content" placeholder="Deskripsi Isi Content Artikel">{{ $article->content }}</textarea>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="tgl_post">Tanggal Post</label>
                                <div class="col-sm-10">
                                    <input type ="datetime" class="form-control w-50" id="tgl_post" rows="3" name="tgl_post" placeholder="Tanggal Post" value="{{ $article->tgl_post }}" disabled  />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="file_upload"> Link URL</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control w-50" id="file_upload"
                                        placeholder="Link URL Artikel" name="file_upload" required value="{{ $article->file_upload }}"  />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="images">Gambar Artikel</label>
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

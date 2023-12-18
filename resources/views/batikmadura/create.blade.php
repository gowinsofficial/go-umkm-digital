@extends('layout.template')

@section('konten')
 <!-- START FORM -->
 <form action='{{ url }}' method='post'>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="id_menu" class="col-sm-2 col-form-label">Kota</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='id_menu' id="{{ $menu->id_menu }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Batik</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="motif" class="col-sm-2 col-form-label">Motif</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='motif' id="motif">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Corak</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jurusan' id="jurusan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jurusan' id="jurusan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Detail</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jurusan' id="jurusan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">No Whatsapp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jurusan' id="jurusan">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->
@endsection
      
        
    
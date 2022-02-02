@extends('..layouts/admin/layouts')
@section('title')
    Tambah Data Pengurus Masjid
@endsection
@section('pengurus_input')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Data Pengurus Masjid</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tambah Data Pengurus Masjid</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('/pengurus_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-1">
                        <label for="nama"  class="mt-1">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Text">
                    </div>

                    <div class="form-group mt-1">
                        <label for="tgllahir"  class="mt-1">Tanggal Lahir</label>
                        <input type="text" name="tgllahir" class="form-control">
                    </div>

                    <div class="form-group mt-1">
                        <label for="jekel" class="mt-1">Jenis Kelamin</label>
                        <input type="text" name="jekel" class="form-control" placeholder="Masukan Text">
                    </div>

                    <div class="form-group mt-1">
                        <label for="asal" class="mt-1">Asal</label>
                        <input type="text" name="asal" class="form-control" placeholder="Masukan Text">
                    </div>

                    <div class="form-group mt-1">
                        <label for="alamat"  class="mt-1">Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Masukan Text"></textarea>
                    </div>

                    <div class="form-group mt-1">
                        <label for="notelp" class="mt-1">No Telepon</label>
                        <input type="number" name="notelp" class="form-control" placeholder="Masukan Text">
                    </div>

                    <div class="form-group mt-1">
                        <label for="email" class="mt-1">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukan Text">
                    </div>

                    <div class="form-group mt-1">
                        <label for="jabatan" class="mt-1">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Masukan Text">
                    </div>
                    
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">
                            + Tambah Data Kegiatan
                        </button>
                    </div>

                    <div class="form-group mt-4">
                        <a href="{{ url('/pengurus') }}"><< kembali ke halaman Pengurus</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>
@endsection

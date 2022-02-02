@extends('..layouts/admin/layouts')
@section('title')
    Tambah Data Kegiatan Masjid
@endsection
@section('kegiatan_input')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Kegiatan Masjid</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tambah Data Kegiatan Masjid</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('/kegiatan_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-1">
                        <label for="nama"  class="mt-1">Nama Kegiatan</label>
                        <input type="text" name="nama_kegiatan" class="form-control" placeholder="Masukan Text">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama"  class="mt-1">Tanggal Kegiatan</label>
                        <input type="text" name="tgl_kegiatan" class="form-control">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama" class="mt-1">Waktu Kegiatan</label>
                        <input type="text" name="waktu" class="form-control" placeholder="Masukan Text">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama"  class="mt-1">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Masukan Text"></textarea>
                    </div>
                    
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">
                            + Tambah Data Kegiatan
                        </button>
                    </div>

                    <div class="form-group mt-4">
                        <a href="{{ url('/kegiatan') }}"><< kembali ke halaman Kegiatan</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>
@endsection

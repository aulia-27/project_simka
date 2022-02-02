@extends('..layouts/admin/layouts')
@section('title')
    Tambah Data Anggota Majelis Masjid
@endsection
@section('anggota_majelis_edit')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Data Anggota Majelis Masjid</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Edit Data Anggota Majelis Masjid</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('/update/' . $data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-1">
                        <label for="nama"  class="mt-1">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Text" value="{{ $data->nama }}">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama"  class="mt-1">Tanggal Lahir</label>
                        <input type="text" name="tgllahir" class="form-control" value="{{ $data->tgllahir }}">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama" class="mt-1">Jenis Kelamin</label>
                        <input type="text" name="jekel" class="form-control" placeholder="Masukan Text" value="{{ $data->jekel }}">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama" class="mt-1">Asal</label>
                        <input type="text" name="asal" class="form-control" placeholder="Masukan Text" value="{{ $data->asal }}">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama"  class="mt-1">Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Masukan Text">{{ $data->alamat }}"</textarea>
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama" class="mt-1">No Telepon</label>
                        <input type="text" name="notelp" class="form-control" placeholder="Masukan Text" value="{{ $data->notelp }}">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama" class="mt-1">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukan Text" value="{{ $data->email }}">
                    </div>
                    
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">
                            + Edit Data Kegiatan
                        </button>
                    </div>

                    <div class="form-group mt-4">
                        <a href="{{ url('/pengurus') }}"><< kembali ke halaman Anggota Majelis</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>
@endsection

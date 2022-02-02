@extends('..layouts/admin/layouts')
@section('title')
    Edit Data Pengurus Masjid
@endsection
@section('pengurus_edit')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Data Pengurus Masjid</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Edit Data Pengurus Masjid</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('/pengurus_update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-1">
                        <label for="nama"  class="mt-1">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Text" value="{{ $data->nama }}">
                    </div>

                    <div class="form-group mt-1">
                        <label for="tgllahir"  class="mt-1">Tanggal Lahir</label>
                        <input type="text" name="tgllahir" class="form-control" placeholder="tahun(1900)-bulan(01)-hari(01)" value="{{ $data->tgllahir }}"">
                    </div>

                    <div class="form-group mt-1">
                        <label for="jekel" class="mt-1">Jenis Kelamin</label>
                        <select name="jekel" id="jekel" class="form-control">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama" class="mt-1">Asal</label>
                        <input type="text" name="asal" class="form-control" placeholder="Masukan Text" value="{{ $data->asal }}">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama"  class="mt-1">Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Masukan Text"> {{ $data->alamat }}</textarea>
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama" class="mt-1">No Telepon</label>
                        <input type="text" name="notelp" class="form-control" placeholder="Masukan Text" value="{{ $data->notelp }}">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama" class="mt-1">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukan Text" value="{{ $data->email }}">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama" class="mt-1">Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-control">
                            <option value="Kepala">Kepala Pengurus Masjid</option>
                            <option value="Wakil Kepala">Wakil Ketua Pengurus Masjid</option>
                            <option value="Seketaris">Seketaris Pengurus Masjid</option>
                            <option value="Bendahara">Bendahara Pengurus Masjid</option>
                            <option value="Anggota">Anggota Pengurus Masjid</option>
                        </select>
                    </div>
                    
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">
                            + Edit Data Kegiatan
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

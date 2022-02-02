@extends('..layouts/admin/layouts')
@section('title')
    Kegiatan
@endsection
@section('kegiatan')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Kegiatan Masjid</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Data Kegiatan Masjid</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabel Data Kegiatan Masjid
            </div>
            <div class="card-body">
                <a href="{{ url('kegiatan_input') }}" class="btn btn-primary">+ Tambah Data Kegiatan</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Waktu</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Waktu</th>
                            <th>Deskripsi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $dataKegiatan)
                            <tr>
                                <td>{{ $dataKegiatan->id }}</td>
                                <td>{{ $dataKegiatan->nama_kegiatan }}</td>
                                <td>{{ $dataKegiatan->tgl_kegiatan }}</td>
                                <td>{{ $dataKegiatan->waktu }}</td>
                                <td>{{ $dataKegiatan->deskripsi }}</td>
                                <td>
                                    <a href="{{ url('/kegiatan_edit/'.$dataKegiatan->id) }}" class="btn btn-warning">edit</a>
                                    <a href="{{ url('/destroy/'.$dataKegiatan->id) }}" class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

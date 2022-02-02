@extends('..layouts/admin/layouts')
@section('title')
    ceramah
@endsection
@section('ceramah')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Ceramah Masjid</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Data Ceramah Masjid</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabel Data Ceramah Masjid
            </div>
            <div class="card-body">
                <a href="{{ url('ceramah_input') }}" class="btn btn-primary">+ Tambah Data Ceramah</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Judul</th>
                            <th>Tanggal Ceramah</th>
                            <th>Waktu</th>
                            <th>Ustad</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Judul</th>
                            <th>Tanggal Ceramah</th>
                            <th>Waktu</th>
                            <th>Ustad</th>
                            <th>Deskripsi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $dataCeramah)
                            <tr>
                                <td>{{ $dataCeramah->id }}</td>
                                <td>{{ $dataCeramah->judul }}</td>
                                <td>{{ $dataCeramah->tgl_ceramah }}</td>
                                <td>{{ $dataCeramah->waktu }}</td>
                                <td>{{ $dataCeramah->ustad }}</td>
                                <td>{{ $dataCeramah->deskripsi }}</td>
                                <td>
                                    <a href="{{ url('/ceramah_edit/'.$dataCeramah->id) }}" class="btn btn-warning">edit</a>
                                    <a href="{{ url('/destroy/'.$dataCeramah->id) }}" class="btn btn-danger">delete</a>
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

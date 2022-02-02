@extends('..layouts/admin/layouts')
@section('title')
    Pengurus
@endsection
@section('pengurus')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Pengurus Masjid</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Data Pengurus Masjid</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabel Data Pengurus Masjid
            </div>
            <div class="card-body">
                <a href="{{ url('pengurus_input') }}" class="btn btn-primary">+ Tambah Data Pengurus</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Asal</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Asal</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $dataRemajaMasjid)
                            <tr>
                                <td>{{ $dataRemajaMasjid->id }}</td>
                                <td>{{ $dataRemajaMasjid->nama }}</td>
                                <td>{{ $dataRemajaMasjid->tgllahir }}</td>
                                <td>{{ $dataRemajaMasjid->jekel }}</td>
                                <td>{{ $dataRemajaMasjid->asal }}</td>
                                <td>{{ $dataRemajaMasjid->alamat }}</td>
                                <td>{{ $dataRemajaMasjid->notelp }}</td>
                                <td>{{ $dataRemajaMasjid->email }}</td>
                                <td>{{ $dataRemajaMasjid->jabatan }}</td>
                                <td>
                                    <a href="{{ url('/pengurus_edit/'.$dataRemajaMasjid->id) }}" class="btn btn-warning">edit</a>
                                    <a href="{{ url('/destroy/'.$dataRemajaMasjid->id) }}" class="btn btn-danger">delete</a>
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

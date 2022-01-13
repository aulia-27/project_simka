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
                Tabel Pengurus Masjid
            </div>
            <div class="card-body">
                <a href="{{ url('input_pengurus') }}">
                    <button type="submit" class="btn btn-primary">Input Data Pengurus Masjid</button>
                </a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
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
                        @foreach ($datas as $key=>$values)
                            <tr>
                                <td>{{ $values->nama }}</td>
                                <td>{{ $values->tgllahir }}</td>
                                <td>{{ $values->jekel }}</td>
                                <td>{{ $values->asal }}</td>
                                <td>{{ $values->alamat }}</td>
                                <td>{{ $values->notelp }}</td>
                                <td>{{ $values->email }}</td>
                                <td>{{ $values->jabatan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

@extends('..layouts/admin/layouts')
@section('title')
    Anggota Majelis
@endsection
@section('anggota_majelis')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Anggota Majelis</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Data Anggota Majelis</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabel Data Anggota Majelis
            </div>
            <div class="card-body">
                <a href="{{ url('anggota_majelis_input') }}" class="btn btn-primary">+ Tambah Anggota Majelis</a>
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
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $dataAnggotaMajelis)
                            <tr>
                                <td>{{ $dataAnggotaMajelis->id }}</td>
                                <td>{{ $dataAnggotaMajelis->nama }}</td>
                                <td>{{ $dataAnggotaMajelis->tgllahir }}</td>
                                <td>{{ $dataAnggotaMajelis->jekel }}</td>
                                <td>{{ $dataAnggotaMajelis->asal }}</td>
                                <td>{{ $dataAnggotaMajelis->alamat }}</td>
                                <td>{{ $dataAnggotaMajelis->notelp }}</td>
                                <td>{{ $dataAnggotaMajelis->email }}</td>
                                <td>{{ $dataAnggotaMajelis->jabatan }}</td>
                                <td>
                                    <a href="{{ url('/anggota_majelis_edit/'.$dataAnggotaMajelis->id) }}" class="btn btn-warning">edit</a>
                                    <a href="{{ url('/destroy/'.$dataAnggotaMajelis->id) }}" class="btn btn-danger">delete</a>
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

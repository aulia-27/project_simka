@extends('..layouts/admin/layouts')
@section('title')
    User
@endsection
@section('user')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Daftar User</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tabel Daftar User
            </div>
            <div class="card-body">
                <a href="{{ url('user_input') }}" class="btn btn-primary">+ Tambah Data User</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $dataUser)
                            <tr>
                                <td>{{ $dataUser->id }}</td>
                                <td>{{ $dataUser->name }}</td>
                                <td>{{ $dataUser->email }}</td>
                                <td>{{ $dataUser->password }}</td>
                                <td>{{ $dataUser->status }}</td>
                                <td>
                                    <a href="{{ url('/user_edit/'.$dataUser->id) }}" class="btn btn-warning">edit</a>
                                    <a href="{{ url('/destroy/'.$dataUser->id) }}" class="btn btn-danger">delete</a>
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

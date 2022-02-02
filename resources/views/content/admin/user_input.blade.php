@extends('..layouts/admin/layouts')
@section('title')
    Tambah Data Remaja Masjid
@endsection
@section('user_input')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah Data Remaja Masjid</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Tambah Data Remaja Masjid</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ url('/remaja_masjid_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-1">
                        <label for="nama"  class="mt-1">Username</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukan Text">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama"  class="mt-1">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="example@gmail.com">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama" class="mt-1">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Masukan Text">
                    </div>

                    <div class="form-group mt-1">
                        <label for="nama" class="mt-1">Status</label>
                        <input type="text" name="status" class="form-control" placeholder="Masukan Text">
                    </div>
                    
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">
                            + Tambah Data User
                        </button>
                    </div>

                    <div class="form-group mt-4">
                        <a href="{{ url('/remaja_masjid') }}"><< kembali ke halaman user</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>
@endsection

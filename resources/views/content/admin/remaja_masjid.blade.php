@extends('..layouts/admin/layouts')
@section('title')
    Remaja Masjid
@endsection
@section('remaja_masjid')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <a href="{{ url('create_remaja_masjid') }}">
                    <button type="submit" class="btn btn-primary"> + Tambah Data Remaja Masjid</button>
                </a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tfoot>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection

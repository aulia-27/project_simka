@extends('../layouts/home/layouts')
@section('title')
    Anggota Majelis
@endsection
@section('anggota_majelis')
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h4 class="section-heading text-uppercase">Daftar Anggota Majelis</h4>
            </div>
            <div class="card-body">
                <table class="table mt-1 ml-auto">
                    <thead>
                      <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Asal</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Email</th>
                      </tr>
                    </thead>
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
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>

            <div class="card-body">
                <a href="{{ url('/') }}" class="btn btn-primary">Kembali Ke Home</a>
            </div>
        </div>
    </section>
@endsection
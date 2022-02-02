@extends('../layouts/home/layouts')
@section('title')
    Pengurus Masjid
@endsection
@section('pengurus_masjid')
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h4 class="section-heading text-uppercase">Daftar Pengurus Masjid</h4>
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
                        <th scope="col">Jabatan</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dataPengurus)
                        <tr>
                            <td>{{ $dataPengurus->id }}</td>
                            <td>{{ $dataPengurus->nama }}</td>
                            <td>{{ $dataPengurus->tgllahir }}</td>
                            <td>{{ $dataPengurus->jekel }}</td>
                            <td>{{ $dataPengurus->asal }}</td>
                            <td>{{ $dataPengurus->alamat }}</td>
                            <td>{{ $dataPengurus->notelp }}</td>
                            <td>{{ $dataPengurus->email }}</td>
                            <td>{{ $dataPengurus->jabatan }}</td>
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
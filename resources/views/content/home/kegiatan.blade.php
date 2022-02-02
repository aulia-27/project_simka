@extends('../layouts/home/layouts')
@section('title')
    Kegiatan
@endsection
@section('kegiatan')
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h4 class="section-heading text-uppercase">Daftar Kegiatan Masjid</h4>
            </div>
            @foreach ($data as $dataKegiatan)
              <div class="card-deck mt-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">{{ $dataKegiatan->nama_kegiatan }}</h5>
                    <h6 class="card-title">{{ $dataKegiatan->tgl_kegiatan }}</h6>
                    <p class="card-text">{{ $dataKegiatan->deskripsi }}</p>
                    <p class="card-text"><small class="text-muted">{{ $dataKegiatan->waktu }}</small></p>
                  </div>
                </div>
              </div>
            @endforeach
            <div class="card-body">
                <a href="{{ url('/') }}" class="btn btn-primary">Kembali Ke Home</a>
            </div>
        </div>
        
    </section>
@endsection
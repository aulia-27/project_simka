@extends('../layouts/home/layouts')
@section('title')
    Ceramah
@endsection
@section('ceramah')
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h4 class="section-heading text-uppercase">Daftar Ceramah Masjid</h4>
            </div>
            @foreach ($data as $dataCeramah)
              <div class="card-deck mt-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">{{ $dataCeramah->judul }}</h5>
                    <h6 class="card-title">{{ $dataCeramah->tgl_ceramah }}</h6>
                    <p class="card-text">{{ $dataCeramah->deskripsi }}</p>
                    <h6 class="card-title">{{ $dataCeramah->ustad }}</h6>
                    <p class="card-text"><small class="text-muted">{{ $dataCeramah->waktu }}</small></p>
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
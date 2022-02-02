@extends('../layouts/home/layouts')
@section('title')
    Home
@endsection
@section('main')
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h4 class="section-heading text-uppercase">Agenda dan Kegiatan Masjid</h4>
                <h6 class="section-subheading text-muted" style="margin-bottom: 30px;">Klik Icon dibawah untuk Akses ke Layanan di SIMKA</h6>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <a href="{{ url('ceramah_home') }}">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-calendar-alt fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Jadwal Pengajian</h4>
                    <p class="text-muted">Jadwal Pengajian Masjid.</p>
                </a>
                </div>
                

                <div class="col-md-4">
                    <a href="{{ url('anggota_majelis_home') }}">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Anggota Majelis</h4>
                    <p class="text-muted">Daftar Anggota Majelis Masjid.</p>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ url('kegiatan_home') }}">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-calendar-day fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Kegiatan Masjid</h4>
                    <p class="text-muted">Kegiatan Pada Masjid.</p>
                    </a>
                </div>
                
                <div style="margin-bottom: 25px;margin-top: 25px;"></div>

                <div class="col-md-4">
                    <a href="{{ url('remaja_masjid_home') }}">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-user-friends fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Anggota Remaja Masjid</h4>
                    <p class="text-muted">Daftar Anggota Remaja Masjid.</p>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ url('pengurus_home') }}">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-users fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Pengurus Masjid</h4>
                    <p class="text-muted">Daftar Anggota Pengurus Masjid.</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
<!DOCTYPE html>
<html lang="en">
    @include('../layouts/admin/head')
    <body class="sb-nav-fixed">
        @include('../layouts/admin/navbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('../layouts/admin/sidenavbar')
            </div>
            <div id="layoutSidenav_content">

                @yield('dashboard')

                @yield('pengurus')
                @yield('pengurus_input')
                @yield('pengurus_edit')
                @yield('input_pengurus')
                @yield('remaja_masjid')
                @yield('remaja_masjid_input')
                @yield('remaja_masjid_edit')
                @yield('ceramah')
                @yield('ceramah_input')
                @yield('ceramah_edit')
                @yield('anggota_majelis')
                @yield('anggota_majelis_input')
                @yield('anggota_majelis_edit')
                @yield('kegiatan')
                @yield('kegiatan_input')
                @yield('kegiatan_edit')

                @include('../layouts/admin/footer')
            </div>
        </div>
        @include('../layouts/admin/js')
    </body>
</html>
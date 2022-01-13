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
                @yield('remaja_masjid')
                @yield('ceramah')
                @yield('anggota_majelis')
                
                @yield('input_pengurus')


                @include('../layouts/admin/footer')
            </div>
        </div>
        @include('../layouts/admin/js')
    </body>
</html>
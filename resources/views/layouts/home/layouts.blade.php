<!DOCTYPE html>
<html lang="en">
    <body>
        @include('../layouts/home/head')
        @stack('before-style')
        @include('include.style')
        @stack('after-style')
            <!-- Navigation-->
            @include('../layouts/home/navigation')
            <!-- Masthead-->
            @include('../layouts/home/masthead')
        
            <!-- Content -->
            @stack('before-style')
            @yield('main')
            @yield('anggota_majelis')
            @yield('ceramah')
            @yield('kegiatan')
            @yield('pengurus_masjid')
            @yield('remaja_masjid')
            @stack('after-style')

            <!-- Footer-->
            @include('../layouts/home/footer')

            @include('../layouts/home/js')
            @stack('before-style')
            @include('include.style')
            @stack('after-style')
    </body>
</html>

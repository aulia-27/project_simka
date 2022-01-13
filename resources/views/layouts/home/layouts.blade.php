<!DOCTYPE html>
<html lang="en">
    <body>
        @include('../layouts/home/head')
            <!-- Navigation-->
            @include('../layouts/home/navigation')
            <!-- Masthead-->
            @include('../layouts/home/masthead')
        
            <!-- Content -->

            @yield('main')
            @yield('blog')

            <!-- Footer-->
            @include('../layouts/home/footer')

            @include('../layouts/home/js')
    </body>
</html>

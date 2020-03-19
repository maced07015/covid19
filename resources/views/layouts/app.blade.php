<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

    @include('layouts.header')

    @yield('content')

    <!-- ======= Footer ======= -->
    @include('layouts.footer')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Vendor JS Files -->
    @include('layouts.script')

</body>

</html>
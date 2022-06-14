<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body>

@if(!request()->is(['login','register']))
<!-- Navbar STart -->
@include('layouts.header')
<!-- Navbar End-->
@endif

@yield('content')

@include('layouts.footer')
<!-- Back to top -->
<a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
<!-- Back to top -->

<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/scrollspy.min.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

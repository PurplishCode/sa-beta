<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{  asset('bootstrap.bundle.js') }}">
</head>
<body>
{{-- BASEPLATE UI. --}}

@include('layout.sidenav')
<div class="content-container">

    @yield('content')

    @include('layout.footer')
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 
</div>



    <script src="{{ asset('bootstrap.bundle.js') }}"></script>
</body>
</html>
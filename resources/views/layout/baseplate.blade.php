<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{  asset('bootstrap.bundle.js') }}">
    @include('layout.script')

</head>
<body>
{{-- BASEPLATE UI. --}}
@include('layout.navbar')

@include('layout.sidebar')

<div class="content-container">

    @yield('content')

    @include('layout.footer')
       
</div>



</body>
</html>
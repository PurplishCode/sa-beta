<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
{{-- BASEPLATE UI. --}}

@include('layout.navbar')
<div class="container-fluid">
    <div class="row">
        @include('layout.sidebar')
        <div class="col">
            @yield('content')
        </div>
    </div>
</div>


    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    @include('layout.style')
</head>

<body>
    <div class="navbar bg-dark fixed-top navbar-expand-lg" id="header">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-md-block d-none">
                    <img src="{{ asset('logo-removebg-preview.png') }}" alt="logo" width="40" height="40" class="d-inline-block align-text-top">
                </div>
                <a href="#"
                    class="navbar-brand text-white fw-bold pl-1" style="font-family: cursive">IMV</a>
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                    aria-label="Control Sidebar" aria-controls="offcanvas">
                    <i class="bi bi-list text-white"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-start bg-dark" id="offcanvas" style="width: 250px;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold text-white">IMV</h5>
            <button class="btn-close text-reset bg-white" data-bs-dismiss="offcanvas" type="button"
                aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
@if (Auth::check())
<div>Hello!</div>

@else
<ul>
    
</ul>
@endif

        </div>
    </div>
    <script src="{{ asset('bootstrap.bundle.js') }}"></script>
</body>

</html>
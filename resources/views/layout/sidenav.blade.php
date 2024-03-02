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
    <!-- NEVER USE fixed-top! -->
    <header class="navbar bg-dark navbar-expand-lg p-2 " id="header">
        <div class="container-fluid">
            <div class="d-flex justify-content-start align-items-center">
                <div class="d-md-block d-none">
                    <img src="{{ asset('logo-removebg-preview.png') }}" alt="logo" width="40" height="40" class="d-inline-block align-text-top rounded-circle border">
                </div>
                <a href="#"
                    class="navbar-brand text-white fw-bold px-3" style="font-family: cursive">SA</a>
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
                    aria-label="Control Sidebar" aria-controls="offcanvas">
                    <i class="bi bi-list text-white"></i>
                </button>
           
            </div>
        </div>
        @if (Auth::check())
        <nav class="header-nav ms-auto">
            <div class="d-flex align-items-center">
            <div class="px-2 py-2 mb-1">
                <div class="container d-flex flex-wrap justify-content-center text-white fw-bold">PENGGUNA</div>
            </div>
            </div>
        </nav>
        @else
        <nav class="header-nav ms-auto">
            <div class="d-flex align-items-center">
                <div></div>
            </div>
        </nav>
            @endif
    </header>

    <div class="offcanvas offcanvas-start bg-dark" id="offcanvas" style="width: 250px;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold text-white">Navigation Menu</h5>
            <button class="btn-close text-reset bg-white" data-bs-dismiss="offcanvas" type="button"
                aria-label="Close"></button>
        </div>

       


        </div>
    </div>
    <script src="{{ asset('bootstrap.bundle.js') }}"></script>
</body>

</html>
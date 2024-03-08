<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    @include('layout.style')
    @include('layout.script')
    <style>
.badum:hover {
    color: gray;
    background-color: purple;
    
}
    </style>
</head>

<body>
    <!-- NEVER USE fixed-top! -->
    <header class="navbar bg-dark navbar-expand-lg p-2 " id="header">
        <div class="container-fluid">
            <div class="d-flex justify-content-start align-items-center">
                <div class="d-md-block d-none">
                    <img src="{{ asset('logo-removebg-preview.png') }}" alt="logo" width="40" height="40"
                        class="d-inline-block align-text-top rounded-circle border">
                </div>
                <a href="#" class="navbar-brand text-white fw-bold px-3" style="font-family: cursive">SA</a>
              
                    <i class="bi bi-list text-white toggle-sidebar-btn"></i>
        

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
                <div class="px-2 py-1 mb-1">
                    <div class="d-flex flex-wrap">
                        <a href="{{ route('session.index') }}" class="btn btn-success">LOGIN</a>
                    </div>
                </div>
            </div>
        </nav>
        @endif
    </header>

{{-- 
    <aside class="sidebar offcanvas offcanvas-start bg-dark toggle-sidebar" id="sidebar" style="width: 250px;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold text-white">Dashboard</h5>
            <button class="btn-close text-reset bg-white" data-bs-dismiss="offcanvas" type="button"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body text-white">


           @if (Auth::check())
           <div class="container-fluid bg-success p-2 rounded border"><a href="{{ route('home.index') }}"
            class="text-white text-center fw-bold badum" style="text-decoration: none;">Homepage</a></div>

    <div class="pt-4"></div>

           <div class="container-fluid bg-success p-2 rounded border"><a href="{{ route('foto.index') }}"
            class="text-white text-center fw-bold badum" style="text-decoration: none;">Foto</a></div>

    <div class="pt-4"></div>

    <div class="container-fluid bg-success p-2 border rounded"><a href="{{ route('album.index') }}"
            class="text-white text-center fw-bold badum" style="text-decoration: none;">Album</a></div>



</div>
           @else
<div class="offcanvas-body">
    
<div class="cointainer-fluid bg-success fw-bold p-2 rounded">
    <a href="" class="text-center text-white" style="text-decoration: none;"></a>
</div>
           
</div>
           @endif


    </div>


    </div>
</aside> --}}
    <script src="{{ asset('bootstrap.bundle.js') }}"></script>
</body>

</html>
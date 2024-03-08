<header class="header fixed-top d-flex align-items-center" id="header">
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex jusify-content-center">
        <img src="{{ asset('assets/logo.PNG') }}" alt="">
        <span class="d-lg-block d-none px-3">SiegeAlbus</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    @if (Auth::check())
        <nav class="header-nav ms-auto">
            <div class="d-flex align-items-center px-3">
               Pengguna
            </div>
        </nav>
        @else
        <nav class="header-nav ms-auto">
            <div class="d-flex align-items-center">
                <div class="px-3 py-2 mb-1">
                    <div class="container d-flex flex-wrap justify-content-cfoenter">
                        <a href="{{ route('session.index') }}" class="btn btn-success text-white btn-sm mt-1 me-2" style="background-color: #1b31fc">LOGIN</a>
                        <a href="{{ route('session.create') }}" class="btn btn-success text-white btn-sm mt-1 me-2" style="background-color: #1b31fc">REGISTER</a>
                    
                    </div>
                </div>
            </div>
        </nav>
    @endif
</header>
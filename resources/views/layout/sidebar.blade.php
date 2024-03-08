@include('layout.style')
@include('layout.script')
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/') }}">
                <i class="bi bi-grid"></i>
                <span style="color: #1b31fc"> Homepage</span>
            </a>
        </li>
        @if (Auth::check())
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/users/profile') }}">
                    <i class="bi bi-person"></i>
                    <span style="color: #055E68">Profil Saya</span>
                </a>
            </li>
            <li class="nav-heading">Your Menu</li>
         
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-search"></i>
                        <span style="color: #1b31fc">Explore</span>
                        <i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="{{ url('/users/foto') }}">
                                <i class="bi bi-circle"></i>
                                <span style="color: #1b31fc">Gallery Foto</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/users/album') }}">
                                <i class="bi bi-circle"></i>
                                <span style="color: #1b31fc">Album List</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/hall') }}">
                                <i class="bi bi-circle"></i>
                                <span style="color: #1b31fc">Hall of Image</span>
                            </a>
                        </li>
                    </ul>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ url('/users/activity') }}">
                            <i class="bi bi-clipboard-data"></i>
                            <span style="color: #1b31fc">Lihat Aktifitas</span>
                        </a>
                    </li>
                </li>
          
        @else
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/gallery') }}">
                    <i class="bi bi-camera"></i>
                    <span style="color: #1b31fc">Explore</span>
                </a>
            </li>
        @endif

        <li class="nav-heading">OTHERS</li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/about') }}">   
                <i class="bi bi-question-circle"></i>
                <span style="color: #1b31fc">About us</span>
            </a>
        </li>
        @if (Auth::check())
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/logout') }}">
                    <i class="bi bi-box-arrow-right"></i>
                    <span style="color: #1b31fc">Log Out</span>
                </a>
            </li>
        @endif
    </ul>
</aside>

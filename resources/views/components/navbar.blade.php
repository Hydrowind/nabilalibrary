<nav id="navbar" class="navbar">
    <ul>
        <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="/">Home</a></li>
        <li><a class="{{ request()->is('search') ? 'active' : '' }}" href="/search">Cari Buku</a></li>
        <li><a class="{{ request()->is('about') ? 'active' : '' }}" href="/about">About</a></li>
        <li><a class="{{ request()->is('pustakawan') ? 'active' : '' }}" href="/pustakawan">Pustakawan</a></li>
        <li><a target='_blank' href="https://docs.google.com/forms/d/e/1FAIpQLSdU3ZoGW9g_KgYty8xmJgsRq0CTxVQl2AHQQd4MyDFjIG69sw/viewform">Survey Kepuasan</a></li>
        <li><a target='_blank' href="https://docs.google.com/forms/d/e/1FAIpQLSfeXnuroMYvZhQuHAltJqzuQ8Q8wqiE_8otFsPqUMH_TDoKcQ/viewform?vc=0&c=0&w=1&flr=0">Form Peminjaman</a></li>
        <li><a href="blog.html">Daftar Hadir</a></li>
        <!-- <li class -->
        <li><a class="{{ request()->is('contact') ? 'active' : '' }}" href="/contact">Contact</a></li>
        
        @if(Auth::user())
            <div class="dropdown">
                <a class="dropdown-toggle" role="button" id="accountMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    <b><i class="bi bi-person-fill"></i> {{Auth::user()->name}}</b>
                </a>
                <ul class="dropdown-menu" aria-labelledby="accountMenu">
                    <li><a class="dropdown-item" href="{{ route('signout') }}">Logout</a></li>
                </ul>
            </div>
        @else
            <li><a href="{{ route('login') }}"><b>Login</b></a></li>
            <li><a target='_blank' href="https://docs.google.com/forms/d/e/1FAIpQLSfXHmd9Kf3I8KlkkNpTUZ5A3tdatJ5rWEx7TJzMAQSXe5md9Q/viewform?vc=0&c=0&w=1&flr=0"><b>Daftar</b></a></li>
        @endif
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
<!-- End of Topbar -->
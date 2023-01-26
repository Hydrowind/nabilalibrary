<nav id="navbar" class="navbar">
    <ul>
        <li><a class="{{ request()->is('/') ? 'active' : '' }}" href="/">Home</a></li>
        <li><a class="{{ request()->is('search') ? 'active' : '' }}" href="/search">Cari Buku</a></li>
        <li><a class="{{ request()->is('about') ? 'active' : '' }}" href="/about">About</a></li>
        <li><a class="{{ request()->is('pustakawan') ? 'active' : '' }}" href="/pustakawan">Pustakawan</a></li>
        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSd1SllLAOGmoQ7NWTnNBfliwpf1e1buYSnawmDurYy6G27pQw/viewform?usp=pp_url">Survey Kepuasan</a></li>
        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScjgZLUnyDnwrHALLOR-8GgBT0WLxqGgyT7LxgsR4LAgQlgcg/viewform?usp=pp_url">Form Peminjaman</a></li>
        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdta6h3s59_DruBylF72tstZS_h2TVGlqnMsrJ0dp78QAMV4w/viewform?usp=pp_url">Daftar Hadir</a></li>
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
            <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSdta6h3s59_DruBylF72tstZS_h2TVGlqnMsrJ0dp78QAMV4w/viewform?usp=pp_url"><b>Daftar</b></a></li>
        @endif
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
<!-- End of Topbar -->
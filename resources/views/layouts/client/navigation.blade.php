<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="index.html" class="logo me-auto"><img src="http://www.unbi.ac.id//assets/img/logsmall.png" alt="UNBI-LOGO" style="max-height: 72px" class="img-fluid">
            <span style="font-size: 16px" class="d-none d-xl-inline-block ">
                Informatika <br>
                Universitas Bali Internasional
            </span>
        </a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            @php
                $route = Request::route()->getName();
            @endphp
            <ul>
            <li><a class="{{ $route == 'index' ? 'active' : null }}" href="{{ route('index') }}">Beranda</a></li>
            <li><a class="{{ $route == 'about' ? 'active' : null }}" href="{{ route('about') }}">Tentang Kampus</a></li>
            <li><a href="pricing.html">Biaya</a></li>
            <li><a href="contact.html">Hubungi Kami</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

        <a href="courses.html" class="get-started-btn">Daftar</a>

    </div>
</header>

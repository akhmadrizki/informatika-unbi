<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}">Informatika UNBI</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">IF</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ Request::route()->getName() == 'admin.dashboard' ? 'active' : null }}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-fire"></i> <span>Dashboard</span>
            </a>
        </li>

        <li class="menu-header">Academic</li>
        <li class="{{ Request::route()->getName() == 'admin.pricelist.index' ? 'active' : null }}">
            <a class="nav-link" href="{{ route('admin.pricelist.index') }}">
                <i class="fas fa-dollar-sign"></i> <span>Biaya Pendidikan</span>
            </a>
        </li>

        <li class="{{ Request::route()->getName() == 'admin.student.index' ? 'active' : null }}">
            <a class="nav-link" href="{{ route('admin.student.index') }}">
                <i class="fas fa-user-friends"></i> <span>Pendaftar</span>
            </a>
        </li>

        <li class="menu-header">Blog & News</li>
        <li class="{{ Request::route()->getName() == 'admin.news.index' ? 'active' : null }}">
            <a class="nav-link" href="{{ route('admin.news.index') }}">
                <i class="far fa-file-alt"></i> <span>Berita</span>
            </a>
        </li>

        <li class="menu-header">Administrator</li>
        <li class="">
            <a class="nav-link" href="#">
                <i class="fas fa-user-secret"></i> <span>Admin</span>
            </a>
        </li>
    </ul>
</aside>

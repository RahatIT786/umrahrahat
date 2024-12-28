<div class="app-sidebar">
    <!-- Sidebar Logo -->
    <div class="logo-box">
        <a href="" class="logo-dark">
            <img src="/images/umrah_dark.png" style="height: 30px !important;" class="logo-sm" alt="logo sm">
            <img src="/images/umrah_dark.png" style="height: 60px !important;" class="logo-lg" alt="logo dark">
        </a>

        <a href="" class="logo-light">
            <img src="/images/UMRAH_COLOR.png" style="height: 30px !important;" class="logo-sm" alt="logo sm">
            <img src="/images/UMRAH_COLOR.png" style="height: 60px !important;" class="logo-lg" alt="logo light">
        </a>
    </div>

    <div class="scrollbar" data-simplebar>
        <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title">Menu</li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}" wire:navigate>
                    <span class="nav-icon">
                        <iconify-icon icon="solar:widget-2-outline"></iconify-icon>
                    </span>
                    <span class="nav-text"> Dashboard </span>
                </a>
            </li>

            <li class="menu-title">Package Controller</li>

            <li class="nav-item">
                <a class="nav-link menu-arrow {{ (Request::is('admin/package') || Request::is('admin/package-request')) ? 'active' : '' }}" href="#sidebarPackageManager" data-bs-toggle="collapse" role="button" aria-expanded="{{ (Request::is('admin/package') || Request::is('admin/package-request')) ? 'true' : 'false' }}" aria-controls="sidebarPackageManager">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:bag-2-bold"></iconify-icon>
                    </span>
                    <span class="nav-text"> Package Manager</span>
                </a>

                <div class="collapse {{ (Request::is('admin/package') || Request::is('admin/package-request')) ? 'show' : '' }}" id="sidebarPackageManager">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item {{ Request::is('admin/package') ? 'active' : '' }}">
                            <a class="sub-nav-link {{ Request::is('admin/package') ? 'active' : '' }}" href="{{ route('admin.package-manager') }}" wire:navigate>List All Packages</a>
                        </li>
                        <li class="sub-nav-item {{ Request::is('admin/package-request') ? 'active' : '' }}">
                            <a class="sub-nav-link {{ Request::is('admin/package-request') ? 'active' : '' }}" href="{{ route('admin.package-request') }}" wire:navigate>Package Requests</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-arrow {{ Request::is('admin/saudivisa') || Request::is('admin/saudivisa-request') ? 'active' : '' }}" href="#sidebarSaudiVisa" data-bs-toggle="collapse" role="button" aria-expanded="{{ Request::is('admin/saudivisa') || Request::is('admin/saudivisa-request') ? 'true' : 'false' }}" aria-controls="sidebarSaudiVisa">
                    <span class="nav-icon">
                        <iconify-icon icon="solar:passport-bold"></iconify-icon>
                    </span>
                    <span class="nav-text"> Saudi Visa Manager </span>
                </a>

                <div class="collapse {{ Request::is('admin/saudivisa') || Request::is('admin/saudivisa-request') ? 'show' : '' }}" id="sidebarSaudiVisa">
                    <ul class="nav sub-navbar-nav">
                        <li class="sub-nav-item {{ Request::is('admin/saudivisa') ? 'active' : '' }}">
                            <a class="sub-nav-link {{ Request::is('admin/saudivisa') ? 'active' : '' }}" href="{{ route('admin.saudi-visa') }}" wire:navigate>List All Visa</a>
                        </li>
                        <li class="sub-nav-item {{ Request::is('admin/saudivisa-request') ? 'active' : '' }}">
                            <a class="sub-nav-link {{ Request::is('admin/saudivisa-request') ? 'active' : '' }}" href="{{ route('admin.visa-request') }}" wire:navigate>Visa Requests</a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>

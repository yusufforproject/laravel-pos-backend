<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">FIC11 - POS</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item {{ Request::is('home') ? 'active' : ''}}">
                <a href="{{ url('home') }}"
                    class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Users</li>
            <li class="nav-item {{ Request::is('user') ? 'active' : ''}}">
                <a href="{{ route('user.index') }}"
                    class="nav-link"><i class="fas fa-users"></i><span>Users</span></a>
            </li>
            <li class="menu-header">Products</li>
            <li class="nav-item {{ Request::is('product') ? 'active' : ''}}">
                <a href="{{ route('product.index') }}"
                    class="nav-link"><i class="fas fa-cart-arrow-down"></i><span>Products</span></a>
            </li>
        </ul>


        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs"
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>

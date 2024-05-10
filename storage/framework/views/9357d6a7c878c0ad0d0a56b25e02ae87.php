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
            <li class="nav-item <?php echo e(Request::is('home') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('home')); ?>"
                    class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Users</li>
            <li class="nav-item <?php echo e(Request::is('user') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('user.index')); ?>"
                    class="nav-link"><i class="fas fa-users"></i><span>Users</span></a>
            </li>
            <li class="menu-header">Products</li>
            <li class="nav-item <?php echo e(Request::is('product') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('product.index')); ?>"
                    class="nav-link"><i class="fas fa-lemon"></i><span>Products</span></a>
            </li>
            <li class="menu-header">Orders</li>
            <li class="nav-item <?php echo e(Request::is('order') ? 'active' : ''); ?>">
                <a href="<?php echo e(route('order.index')); ?>"
                    class="nav-link"><i class="fas fa-cart-plus"></i><span>Orders</span></a>
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
<?php /**PATH D:\Project\Laravel\laravel-pos-backend\resources\views/components/sidebar.blade.php ENDPATH**/ ?>
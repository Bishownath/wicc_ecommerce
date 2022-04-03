<div>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="height: 100%">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon rotate-n-0">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Ecommerce <sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">

        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-list"></i>
                <span>Categories</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Lists:</h6>
                    <a class="collapse-item" href="{{ route('category.create') }}">Add Category</a>
                    <a class="collapse-item" href="{{ route('category.index') }}">Manage Category</a>
                </div>
            </div>
        </li>
        {{-- cat nav end --}}

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse"
                aria-expanded="true" aria-controls="productCollapse">
                <i class="fas fa-fw fa-history"></i>
                <span>Products</span>
            </a>
            <div id="productCollapse" class="collapse" aria-labelledby="headingTwo"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Lists:</h6>
                    <a class="collapse-item" href="{{ route('product.create') }}">Add Product</a>
                    <a class="collapse-item" href="{{ route('product.index') }}">Manage Product</a>
                    <a class="collapse-item" href="{{ route('image.index') }}">Product Images</a>
                </div>
            </div>
        </li>
        {{-- product nav end --}}


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brands" aria-expanded="true"
                aria-controls="brands">
                <i class="fas fa-fw fa-tag"></i>
                <span>Brands</span>
            </a>
            <div id="brands" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Lists:</h6>
                    <a class="collapse-item" href="{{ route('brand.create') }}">Add Brand</a>
                    <a class="collapse-item" href="{{ route('brand.index') }}">Manage Brand</a>
                </div>
            </div>
        </li>
        {{-- cat nav end --}}


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true"
                aria-controls="users">
                <i class="fas fa-fw fa-user"></i>
                <span>Vendors</span>
            </a>
            <div id="users" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Lists:</h6>
                    <a class="collapse-item" href="{{ route('user.create') }}">Add Vendor</a>
                    <a class="collapse-item" href="{{ route('user.index') }}">Manage Vendors</a>
                </div>
            </div>
        </li>
        {{-- cat nav end --}}


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
</div>

<!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">

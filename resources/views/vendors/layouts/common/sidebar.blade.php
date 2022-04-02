<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-0">
            <i class="fas fa-laugh-smile"></i>
        </div>
        <div class="sidebar-brand-text mx-3">E-commerce <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('vendors.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Navigation
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse"
            aria-expanded="true" aria-controls="productCollapse">
            <i class="fas fa-fw fa-history"></i>
            <span>Products</span>
        </a>
        <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Lists:</h6>
                <a class="collapse-item" href="{{ route('vendors.product.create') }}">Add Product</a>
                <a class="collapse-item" href="{{ route('vendors.product.index') }}">Manage Product</a>
                <a class="collapse-item" href="{{ route('vendors.image.index') }}">Product Images</a>
            </div>
        </div>
    </li>
    {{-- product nav end --}}

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tagsCollapse" aria-expanded="true"
            aria-controls="tagsCollapse">
            <i class="fas fa-fw fa-tags"></i>
            <span>Tag</span>
        </a>
        <div id="tagsCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Lists:</h6>
                <a class="collapse-item" href="{{ route('vendors.tags.create') }}">Add Tag</a>
                <a class="collapse-item" href="{{ route('vendors.tags.index') }}">Manage Tags</a>
                {{-- <a class="collapse-item" href="{{ route('vendors.image.index') }}">Product Images</a> --}}
            </div>
        </div>
    </li>
    {{-- product nav end --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->

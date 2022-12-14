<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin/assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Haneen Abu sha'ban</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{URL('dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <!-- <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}"> -->
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{Route('stores.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Stores
                            <i class="fas fa-angle-left right"></i>
                           
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{Route('stores.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Stores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{Route('stores.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Store</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Product
                            <i class="fas fa-angle-left right"></i>
                           
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{Route('products.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Show Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{Route('products.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Product</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p> 
                            Purshase Transaction
                            <i class="fas fa-angle-left right"></i>
                           
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{Route('PurshasesList')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Purshases List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{Route('Report')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transactions Report</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                
              
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
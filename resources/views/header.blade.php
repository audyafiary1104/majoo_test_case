<header id="header" class="animate__animated animate__fadeInDown wow" data-wow-duration=".5s">
        <nav class="navbar align-items-center" style="flex-wrap: unset;">
            <div class="nav-item  ml-lg-2 ml-xl-0 logo" style="min-width: fit-content;">
                <a class="navbar-brand nav-link px-0" href="/dashboard">
                    <img src="{{asset('images/logo.png')}}" class="img-fluid">
                </a>
            </div>

            <div class="nav-inner ml-5 pl-4 w-100">
                <ul class="navbar-nav d-flex align-items-center w-100">
                    @can('view_pos')
                    <li class="nav-item show-only-large-devices {{ (request()->segment(1) == 'pos') ? 'active' : '' }}">
                        <a class="nav-link" href="/pos"><i class="zmdi zmdi-assignment"></i>POS</a>
                    </li>
                    @endcan
                    @can('dashboard')
                    <li class="nav-item show-only-large-devices {{ (request()->segment(1) == 'dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="/dashboard"><i class="zmdi zmdi-collection-text"></i>Dashboard</a>
                    </li>
                    @endcan
                    @can('stock_report')
                    <li class="nav-item show-only-large-devices {{ (request()->segment(2) == 'stock') ? 'active' : '' }}">
                        <a class="nav-link" href="/report/stock"><i class="zmdi zmdi-collection-text"></i>Stock Report</a>
                    </li>
                    @endcan

                    <li class="nav-item profile_img ml-auto" type="button" id="menu">
                        <div class="dropdown">
                            <span>
                                <i class="zmdi zmdi-menu"></i>
                                <i class="zmdi zmdi-close"></i>
                            </span>
                            <a class="img_box center_img">
                                <img src="{{asset('images/rs_1.png')}}" class="crop_img">
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="right-side-menu">
            <div class="menu-inner">
                <ul class="align-items-center w-100">
                     @can('view_roles')
                    <li class="nav-item ">
                        <a class="nav-link active" href="/roles"><i class="zmdi zmdi-hourglass-alt"></i> Master Roles</a>
                    </li>
                    @endcan
                    @can('view_suplier')
                    <li class="nav-item">
                        <a class="nav-link" href="/suplier"><i class="zmdi zmdi-accounts-alt"></i> Master Supplier </a>
                    </li>
                    @endcan
                    @can('view_customer')
                   
                    <li class="nav-item">
                        <a class="nav-link" href="/customer"><i class="zmdi zmdi-balance-wallet"></i> Master customer</a>
                    </li>
                    @endcan
                    @can('view_users')

                    <li class="nav-item">
                        <a class="nav-link" href="/users"><i class="zmdi zmdi-cutlery"></i>Master Users </a>
                    </li>
                    @endcan
                    @can('view_product')
             
                    <li class="nav-item">
                        <a class="nav-link" href="/product"><i class="zmdi zmdi-star"></i>Master Product</a>
                    </li>
                    @endcan
                    @can('view_category')

                    <li class="nav-item">
                        <a class="nav-link" href="/category"><i class="zmdi zmdi-star"></i>Product Category</a>
                    </li>
                    @endcan
                 
                 
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}"><i class="zmdi zmdi-open-in-new"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

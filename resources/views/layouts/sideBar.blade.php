<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="{{ url('html/ltr/vertical-menu-template/index.html')}}"><span class="brand-logo"><img src="/img/favi.jpg" alt="">
                        <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                            <defs>
                                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                    <stop stop-color="#000000" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                            </defs>
                            
                        </svg></span>
                    <h2 class="brand-text">Toutici</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span><span class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="dashboard-analytics.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>
                    </li>
                    <li class="active"><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">eCommerce</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i> 
            </li>
            
            
            
             
            
               
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Product">Product</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('product.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                    </li>

                    <li><a class="d-flex align-items-center" href="{{route('product.create')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Add</span></a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg><span class="menu-title text-truncate" data-i18n="Category">Category</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('category.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                    </li>
                </ul>
            </li> 

            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg><span class="menu-title text-truncate" data-i18n="Partner">Partner</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('partner.index')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                    </li>
                </ul>
            </li> 

            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">User</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                    </li>
                </ul>
            </li>          
        </ul>
    </div>
</div>
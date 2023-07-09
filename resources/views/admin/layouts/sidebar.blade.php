<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo mt-1 d-flex align-items-center justify-content-between">
            <a href="{{ url('admin/dashboard') }}" class="text-nowrap logo-img">
                <img src="{{ url('admin/logo/banjirkita.svg') }}" class="dark-logo" width="180" alt="" />
                <img src="{{ url('admin/logo/banjirkita.svg') }}" class="light-logo" width="180" alt="" />

            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <!-- ============================= -->
                <!-- Home -->
                <!-- ============================= -->
                {{-- <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li> --}}
                <!-- =================== -->
                <!-- Dashboard -->
                <!-- =================== -->
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('admin/dashboard') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-home-infinity"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li> --}}
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link" href="index2.html" aria-expanded="false">
                        <span>
                            <i class="ti ti-shopping-cart"></i>
                        </span>
                        <span class="hide-menu">eCommerce</span>
                    </a>
                </li> --}}

                <!-- ============================= -->
                <!-- Apps -->
                <!-- ============================= -->
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Apps</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('admin/monitoring-banjir') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-heart-rate-monitor"></i>
                        </span>
                        <span class="hide-menu">Monitoring Banjir</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('admin/locationSensor') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-current-location"></i>
                        </span>
                        <span class="hide-menu">Location Sensor</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('admin/indicator-limit') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-forbid"></i>
                        </span>
                        <span class="hide-menu">Standby limit indicator</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="#" aria-expanded="false">
                        <span class="d-flex">
                            <i class="ti ti-chart-donut-3"></i>
                        </span>
                        <span class="hide-menu">Sensor</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{ url('admin/humadity') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-haze"></i>
                                </div>
                                <span class="hide-menu">Humadity</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('admin/temperature') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-thermometer"></i>
                                </div>
                                <span class="hide-menu">Temperature</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ url('admin/waterLevel') }}" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-ripple"></i>
                                </div>
                                <span class="hide-menu">Water Level</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Webiste</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('admin/notification-center') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-bell-ringing"></i>
                        </span>
                        <span class="hide-menu">Notification Center</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('home') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-home-2"></i>
                        </span>
                        <span class="hide-menu">Home</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Users</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ url('admin/user') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-cog"></i>
                        </span>
                        <span class="hide-menu">User</span>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

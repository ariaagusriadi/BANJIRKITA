<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>BanjirKita</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ url('admin') }}/dist/images/logos/favicon.png" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ url('admin') }}/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">

    @stack('style')

    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ url('admin') }}/dist/css/style.min.css" />

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ url('admin') }}/dist/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ url('admin') }}/dist/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('admin.layouts.sidebar')
        <!-- Sidebar End -->
        <!-- Main wrapper -->
        <div class="body-wrapper">
            <!-- Header Start -->
            @include('admin.layouts.header')
            <!-- Header End -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- container-fluid over -->
        </div>
    </div>

    <!--  Mobilenavbar -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <nav class="sidebar-nav scroll-sidebar">
            <div class="offcanvas-header justify-content-between">
                <img src="{{ url('admin') }}/dist/images/logos/favicon.png" alt="" class="img-fluid">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body profile-dropdown mobile-navbar" data-simplebar="" data-simplebar>
                <ul id="sidebarnav">
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                            <span>
                                <i class="ti ti-apps"></i>
                            </span>
                            <span class="hide-menu">Apps</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level my-3">
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-chat.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-invoice.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-mobile.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-message-box.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-cart.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-date.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-lifebuoy.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                                    </div>
                                </a>
                            </li>
                            <li class="sidebar-item py-2">
                                <a href="#" class="d-flex align-items-center">
                                    <div
                                        class="bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/icon-dd-application.svg"
                                            alt="" class="img-fluid" width="24" height="24">
                                    </div>
                                    <div class="d-inline-block">
                                        <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                                        <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                                    </div>
                                </a>
                            </li>
                            <ul class="px-8 mt-7 mb-4">
                                <li class="sidebar-item mb-3">
                                    <h5 class="fs-5 fw-semibold">Quick Links</h5>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">Pricing Page</a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">Authentication Design</a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">Register Now</a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">404 Error Page</a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">Notes App</a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">User Application</a>
                                </li>
                                <li class="sidebar-item py-2">
                                    <a class="fw-semibold text-dark" href="#">Account Settings</a>
                                </li>
                            </ul>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="app-chat.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-message-dots"></i>
                            </span>
                            <span class="hide-menu">Chat</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="app-calendar.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-calendar"></i>
                            </span>
                            <span class="hide-menu">Calendar</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="app-email.html" aria-expanded="false">
                            <span>
                                <i class="ti ti-mail"></i>
                            </span>
                            <span class="hide-menu">Email</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- Search Bar -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Shopping Cart</h5>
            <span data-bs-dismiss="offcanvas" class="link-secondary cursor-pointer">
                <!-- <i class="feather-base ms-4" data-feather="x-circle"></i> -->
            </span>
        </div>
        <div class="offcanvas-body h-100" data-simplebar>
            <ul>
                <li class="pb-4 border-bottom">
                    <div class="d-flex align-items-center py-2">
                        <img src="{{ url('admin') }}/dist/images/products/product-1.jpg" width="98"
                            class="rounded-2 me-3" alt="" />
                        <div>
                            <h6 class="fs-4 fw-normal mb-0">Supreme toys cooker</h6>
                            <p class="mb-0 text-muted fs-3">Kitchenware Item</p>
                            <div class="d-flex align-items-center mt-1">
                                <h6 class="fs-4 me-2 fw-normal mb-0">$250</h6>
                                <div class="input-group input-group-sm w-35">
                                    <button class="btn btn-light-success text-success rounded-1 minus" type="button"
                                        id="add1"> - </button>
                                    <input type="text"
                                        class="form-control bg-transparent border-0 rounded-1 text-center qty"
                                        placeholder="" aria-label="Example text with button addon"
                                        aria-describedby="add1" value="1" />
                                    <button class="btn btn-light-success text-success rounded-1 add" type="button"
                                        id="addo2"> + </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="py-4 border-bottom">
                    <div class="d-flex align-items-center py-2">
                        <img src="{{ url('admin') }}/dist/images/products/product-2.jpg" width="98"
                            class="rounded-2 me-3" alt="" />
                        <div>
                            <h6 class="fs-4 fw-normal mb-0">Supreme toys cooker</h6>
                            <p class="mb-0 text-muted fs-3">Kitchenware Item</p>
                            <div class="d-flex align-items-center mt-1">
                                <h6 class="fs-4 me-2 fw-normal mb-0">$250</h6>
                                <div class="input-group input-group-sm w-35">
                                    <button class="btn btn-light-success text-success rounded-1 minus" type="button"
                                        id="add2"> - </button>
                                    <input type="text"
                                        class="form-control bg-transparent border-0 rounded-1 text-center qty"
                                        placeholder="" aria-label="Example text with button addon"
                                        aria-describedby="add2" value="1" />
                                    <button class="btn btn-light-success text-success rounded-1 add" type="button"
                                        id="addon34"> + </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="py-4 border-bottom">
                    <div class="d-flex align-items-center py-2">
                        <img src="{{ url('admin') }}/dist/images/products/product-3.jpg" width="98"
                            class="rounded-2 me-3" alt="" />
                        <div>
                            <h6 class="fs-4 fw-normal mb-0">Supreme toys cooker</h6>
                            <p class="mb-0 text-muted fs-3">Kitchenware Item</p>
                            <div class="d-flex align-items-center mt-1">
                                <h6 class="fs-4 me-2 fw-normal mb-0">$250</h6>
                                <div class="input-group input-group-sm w-35">
                                    <button class="btn btn-light-success text-success rounded-1 minus" type="button"
                                        id="add3"> - </button>
                                    <input type="text"
                                        class="form-control bg-transparent border-0 rounded-1 text-center qty"
                                        placeholder="" aria-label="Example text with button addon"
                                        aria-describedby="add3" value="1" />
                                    <button class="btn btn-light-success text-success rounded-1 add" type="button"
                                        id="addon3"> + </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="align-bottom">
                <div class="d-flex align-items-center py-2">
                    <span class="text-muted fs-3">Sub Total</span>
                    <div class="ms-auto">
                        <span class="text-dark fw-normal fs-3">$2530</span>
                    </div>
                </div>
                <div class="d-flex align-items-center py-2">
                    <span class="text-muted fs-3">Total</span>
                    <div class="ms-auto">
                        <span class="text-dark fw-normal fs-3">$6830</span>
                    </div>
                </div>
                <a class="btn btn-primary text-white w-100 d-block" href="javascript:void(0);"> Place order </a>
            </div>
        </div>
    </div>
    <!-- Search Bar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-1">
                <div class="modal-header border-bottom">
                    <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
                    <span data-bs-dismiss="modal" class="lh-1 cursor-pointer">
                        <i class="ti ti-x fs-5 ms-3"></i>
                    </span>
                </div>
                <div class="modal-body message-body" data-simplebar="">
                    <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                    <ul class="list mb-0 py-2">
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Modern</span>
                                <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                                <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                                <span class="fs-3 text-muted d-block">/apps/contacts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Posts</span>
                                <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Detail</span>
                                <span
                                    class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Shop</span>
                                <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Modern</span>
                                <span class="fs-3 text-muted d-block">/dashboards/dashboard1</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Dashboard</span>
                                <span class="fs-3 text-muted d-block">/dashboards/dashboard2</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Contacts</span>
                                <span class="fs-3 text-muted d-block">/apps/contacts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Posts</span>
                                <span class="fs-3 text-muted d-block">/apps/blog/posts</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Detail</span>
                                <span
                                    class="fs-3 text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                            </a>
                        </li>
                        <li class="p-1 mb-1 bg-hover-light-black">
                            <a href="#">
                                <span class="fs-3 text-black fw-normal d-block">Shop</span>
                                <span class="fs-3 text-muted d-block">/apps/ecommerce/shop</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Customizer -->
    @include('admin.layouts.customizer')
    <!-- Customizer -->
    <!-- Import Js Files -->
    <script src="{{ url('admin') }}/dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ url('admin') }}/dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="{{ url('admin') }}/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- core files -->
    <script src="{{ url('admin') }}/dist/js/app.min.js"></script>
    <script src="{{ url('admin') }}/dist/js/app.init.js"></script>
    <script src="{{ url('admin') }}/dist/js/app-style-switcher.js"></script>
    <script src="{{ url('admin') }}/dist/js/sidebarmenu.js"></script>
    <script src="{{ url('admin') }}/dist/js/custom.js"></script>

    @stack('script')
</body>

</html>

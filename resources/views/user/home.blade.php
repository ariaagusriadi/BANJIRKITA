<!DOCTYPE html>
<html lang="en">

<head>
    <title>Banjir Kita</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('user') }}/vendors/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('user') }}/vendors/owl-carousel/css/owl.theme.default.css">
    <link rel="stylesheet" href="{{ url('user') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ url('user') }}/vendors/aos/css/aos.css">
    <link rel="stylesheet" href="{{ url('user') }}/css/style.css">
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    <header id="header-section">
        <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
            <div class="container">
                <div class="navbar-brand-wrapper d-flex w-100">
                    <img src="{{ url('admin') }}/logo/banjirkita.svg" width="150px" alt="">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-menu navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                    <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                        <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                            <div class="navbar-collapse-logo">
                                <img src="{{ url('admin') }}/logo/banjirkita.svg" width="150px" alt="">
                            </div>
                            <button class="navbar-toggler close-button" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                            </button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#header-section">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#features-section">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#digital-marketing-section">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#feedback-section">Testimonials</a>
                        </li>
                        <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                            <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Contact
                                Us</button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="banner">
        <div class="container" style="padding: 100px 0 100px 0;">
            <h1 class="font-weight-semibold">Informasi mengenai Banjir</h1>
            <h6 class="font-weight-normal text-muted pb-3">untuk daerah ketapang dan sekitaranya..</h6>
            {{-- <div>
                <button class="btn btn-opacity-light mr-1">Get started</button>
                <button class="btn btn-opacity-success ml-1">Learn more</button>
            </div> --}}
            {{-- <img src="{{ url('admin') }}/logo/banjirkita.svg" alt="" class="img-fluid"> --}}
        </div>
    </div>

    <div class="container-fluid mb-5" style="background-color: #D0E1F9">
        <div class="row justify-content-center py-5">
            <div class="col-md-8">
                <div class="card" style="background-color: rgba(255, 255, 255, 0.5);">
                    <div class="card-body">
                        <h4 class="text-center">Peringatan Dini Banjir</h4>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <div class="card">
                            <div class="card-body">
                                <p class="text-center">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, enim!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Peringatan Dini Banjir</h4>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="case-studies" id="case-studies-section">
            <div class="row grid-margin">
                <div class="col-12 text-center pb-5">
                    <h2>Perkiraan Cuaca</h2>
                    <h6 class="section-subtitle text-muted">sumber BMKG && ibnux</h6>
                </div>
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal & Waktu</th>
                                <th>Cuaca</th>
                                <th>Humidity</th>
                                <th>Temp C</th>
                                <th>Temp F</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_weather as $weather)
                                @if (strtotime($weather['jamCuaca']) > $time)
                                    <tr>
                                        <td>{{ $weather['jamCuaca'] }}</td>
                                        <td>
                                            <img src="https://ibnux.github.io/BMKG-importer/icon/{{ $weather['kodeCuaca'] }}.png"
                                                alt="" class="img-fluid">
                                            <p>{{ $weather['cuaca'] }}</p>
                                        </td>
                                        <td>{{ $weather['humidity'] }}</td>
                                        <td>{{ $weather['tempC'] }} C</td>
                                        <td>{{ $weather['tempF'] }} F</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <section class="customer-feedback" id="feedback-section">
            <div class="row">
                <div class="col-12 text-center pb-5">
                    <h2>What our customers have to say</h2>
                    <h6 class="section-subtitle text-muted m-0">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                    </h6>
                </div>
                <div class="owl-carousel owl-theme grid-margin">
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('user') }}/images/face2.jpg" width="89" height="89"
                                    alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                    Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Tony Martinez</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('user') }}/images/face3.jpg" width="89" height="89"
                                    alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                    Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Sophia Armstrong</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('user') }}/images/face20.jpg" width="89" height="89"
                                    alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                    Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Cody Lambert</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('user') }}/images/face15.jpg" width="89" height="89"
                                    alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                    Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Cody Lambert</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('user') }}/images/face16.jpg" width="89" height="89"
                                    alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                    Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Cody Lambert</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('user') }}/images/face1.jpg" width="89" height="89"
                                    alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                    Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Tony Martinez</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('user') }}/images/face2.jpg" width="89" height="89"
                                    alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                    Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Tony Martinez</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('user') }}/images/face3.jpg" width="89" height="89"
                                    alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                    Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Sophia Armstrong</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card customer-cards">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ url('user') }}/images/face20.jpg" width="89" height="89"
                                    alt="" class="img-customer">
                                <p class="m-0 py-3 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.
                                    Fusce egeabus consectetuer turpis, suspendisse.</p>
                                <div class="content-divider m-auto"></div>
                                <h6 class="card-title pt-3">Cody Lambert</h6>
                                <h6 class="customer-designation text-muted m-0">Marketing Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <section class="contact-us" id="contact-section">
            <div class="contact-us-bgimage grid-margin">
                <div class="pb-4">
                    <h4 class="px-3 px-md-0 m-0" data-aos="fade-down">Do you have any projects?</h4>
                    <h4 class="pt-1" data-aos="fade-down">Contact us</h4>
                </div>
                <div data-aos="fade-up">
                    <button class="btn btn-rounded btn-outline-danger">Contact us</button>
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <section class="contact-details" id="contact-details-section">
            <div class="row text-center text-md-left">
                <div class="col-12 col-md-6 col-lg-3 grid-margin">
                    <img src="{{ url('user') }}/images/Group2.svg" alt="" class="pb-2">
                    <div class="pt-2">
                        <p class="text-muted m-0">mikayla_beer@feil.name</p>
                        <p class="text-muted m-0">906-179-8309</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 grid-margin">
                    <h5 class="pb-2">Get in Touch</h5>
                    <p class="text-muted">Don’t miss any updates of our new templates and extensions.!</p>
                    <form>
                        <input type="text" class="form-control" id="Email" placeholder="Email id">
                    </form>
                    <div class="pt-3">
                        <button class="btn btn-dark">Subscribe</button>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 grid-margin">
                    <h5 class="pb-2">Our Guidelines</h5>
                    <a href="#">
                        <p class="m-0 pb-2">Terms</p>
                    </a>
                    <a href="#">
                        <p class="m-0 pt-1 pb-2">Privacy policy</p>
                    </a>
                    <a href="#">
                        <p class="m-0 pt-1 pb-2">Cookie Policy</p>
                    </a>
                    <a href="#">
                        <p class="m-0 pt-1">Discover</p>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-3 grid-margin">
                    <h5 class="pb-2">Our address</h5>
                    <p class="text-muted">518 Schmeler Neck<br>Bartlett. Illinois</p>
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <a href="#"><span class="mdi mdi-facebook"></span></a>
                        <a href="#"><span class="mdi mdi-twitter"></span></a>
                        <a href="#"><span class="mdi mdi-instagram"></span></a>
                        <a href="#"><span class="mdi mdi-linkedin"></span></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <footer class="border-top">
            <p class="text-center text-muted pt-4">Copyright © 2019<a href="https://www.bootstrapdash.com/"
                    class="px-1">Bootstrapdash.</a>All rights reserved.</p>
        </footer>
    </div>
    <!-- Modal for Contact - us Button -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="Name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control" id="Email-1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="Message">Message</label>
                            <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('user') }}/vendors/jquery/jquery.min.js"></script>
    <script src="{{ url('user') }}/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="{{ url('user') }}/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{ url('user') }}/vendors/aos/js/aos.js"></script>
    <script src="{{ url('user') }}/js/landingpage.js"></script>
</body>

</html>

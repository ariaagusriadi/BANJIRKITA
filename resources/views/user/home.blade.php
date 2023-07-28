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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
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
                            <a class="nav-link" href="#warning">warning</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#weather">weather</a>
                        </li>

                        {{-- <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                            <a class="btn btn-info" href="{{ url('login') }}">
                                Login</a>
                        </li> --}}
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

    <div class="container-fluid mb-5" style="background-color: #D0E1F9" id="warning">
        <div class="row justify-content-center py-5">
            <div class="col-md-8">
                <div class="card" style="background-color: rgba(255, 255, 255, 0.5);">
                    <div class="card-body">
                        <h4 class="text-center">Peringatan Dini Banjir</h4>
                        <p class="text-center">Peringatan atau notifikasi banjir </p>
                        @foreach ($notifications as $notification)
                            @if ($notification->status == 'Bahaya')
                                <div class="card mb-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex  align-items-center">
                                            <div class="card-body">
                                                <h4 class="">{{ $notification->title }}</h4>
                                                <p class="">
                                                    {{ $notification->description }}
                                                </p>
                                                <div class="d-flex row">
                                                    <div class="col-md-3">
                                                        <h5 class=""> <span class="p-3 badge"
                                                                style="background-color: #EB1C26">{{ $notification->locations->location_name }}</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5> <span class="p-3 badge"
                                                                style="background-color: #EB1C26">{{ $notification->status }}</span>
                                                        </h5>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <h5> <span class="p-3 badge"
                                                                style="background-color: #EB1C26">{{ $notification->created_at->format('F j, Y, g:i a') }}</span>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center align-items-center">
                                            <div class="">
                                                <img src="{{ url('admin/icons') }}/bahaya.svg" class="img-fluid"
                                                    width="150px" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif ($notification->status == 'Siaga')
                                <div class="card mb-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex  align-items-center">
                                            <div class="card-body">
                                                <h4 class="">{{ $notification->title }}</h4>
                                                <p class="">
                                                    {{ $notification->description }}
                                                </p>
                                                <div class="d-flex row">
                                                    <div class="col-md-3">
                                                        <h5 class=""> <span class="p-3 badge"
                                                                style="background-color: #F69128">{{ $notification->locations->location_name }}</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5> <span class="p-3 badge"
                                                                style="background-color: #F69128">{{ $notification->status }}</span>
                                                        </h5>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <h5> <span class="p-3 badge"
                                                                style="background-color: #F69128">{{ $notification->created_at->format('F j, Y, g:i a') }}</span>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center align-items-center">
                                            <div class="">
                                                <img src="{{ url('admin/icons') }}/siaga.svg" class="img-fluid"
                                                    width="150px" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif ($notification->status == 'Waspada')
                                <div class="card mb-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <div class="card-body">
                                                <h4 class="">{{ $notification->title }}</h4>
                                                <p class="">
                                                    {{ $notification->description }}
                                                </p>
                                                <div class="d-flex row">
                                                    <div class="col-md-3">
                                                        <h5 class=""> <span class="p-3 badge"
                                                                style="background-color: #FFDE13">{{ $notification->locations->location_name }}</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5> <span class="p-3 badge"
                                                                style="background-color: #FFDE13">{{ $notification->status }}</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5> <span class="p-3 badge"
                                                                style="background-color: #FFDE13">{{ $notification->created_at->format('F j, Y, g:i a') }}</span>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center align-items-center">
                                            <div class="">
                                                <img src="{{ url('admin/icons') }}/waspada.svg" class="img-fluid"
                                                    width="150px" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif ($notification->status == 'Normal')
                                <div class="card mb-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex  align-items-center">
                                            <div class="card-body">
                                                <h4 class="">{{ $notification->title }}</h4>
                                                <p class="">
                                                    {{ $notification->description }}
                                                </p>
                                                <div class="d-flex row">
                                                    <div class="col-md-3">
                                                        <h5 class=""> <span class="p-3 badge"
                                                                style="background-color: #CED2D5">{{ $notification->locations->location_name }}</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5> <span class="p-3 badge"
                                                                style="background-color: #CED2D5">{{ $notification->status }}</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5> <span class="p-3 badge"
                                                                style="background-color: #CED2D5">{{ $notification->created_at->format('F j, Y, g:i a') }}</span>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center align-items-center">
                                            <div class="">
                                                <img src="{{ url('admin/icons') }}/normal.svg" class="img-fluid"
                                                    width="150px" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Pemantauan Tinggi Air</h4>
                        <p class="text-center">Data di ambil dalam waktu 24 jam terakhir</p>
                        <table class="table table-bordered" id="tinggi">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Water Level</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_waterLevel as $waterLevel)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $waterLevel->location }}</td>
                                        <td>{{ $waterLevel->water_level }} Cm</td>
                                        <td>{{ $waterLevel->time }}</td>
                                        <td>{{ $waterLevel->created_at->format('F j, Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="weather">
        <section class="case-studies" id="case-studies-section">
            <div class="row grid-margin">
                <div class="col-12 text-center pb-5">
                    <h2>Perkiraan Cuaca Ketapang</h2>
                    <h6 class="section-subtitle text-muted">sumber <a href="https://data.bmkg.go.id/prakiraan-cuaca/"
                            target="_blank" rel="noopener noreferrer">BMKG</a> && <a
                            href="https://ibnux.github.io/BMKG-importer/#pakai-langsung" target="_blank"
                            rel="noopener noreferrer">ibnux</a> </h6>
                </div>
                <div class="owl-carousel owl-theme grid-margin">
                    @foreach ($all_weather as $weather)
                        @if (strtotime($weather['jamCuaca']) > $time)
                            <div class="card customer-cards mx-2" style="background-color:rgb(208,225,249) ">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="https://ibnux.github.io/BMKG-importer/icon/{{ $weather['kodeCuaca'] }}.png"
                                            width="89" height="89" alt="" class="img-customer">
                                        <h6 class="card-title pt-3">{{ $weather['jamCuaca'] }}</h6>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td> {{ $weather['humidity'] }}% Humidity</td>
                                                    <td>{{ $weather['tempC'] }} Celcius</td>
                                                    <td>{{ $weather['tempF'] }} Farenheit</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                    {{-- <table class="table table-bordered table-hover">
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

                    </table> --}}
                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <footer class="border-top">
            <p class="text-center text-muted pt-4">Copyright © 2023<a href="#" class="px-1">CodeWrite</a>All
                rights reserved.</p>
        </footer>
    </div>


    <script src="{{ url('user') }}/vendors/jquery/jquery.min.js"></script>
    <script src="{{ url('user') }}/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="{{ url('user') }}/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="{{ url('user') }}/vendors/aos/js/aos.js"></script>
    <script src="{{ url('user') }}/js/landingpage.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tinggi').DataTable();
        });
    </script>
</body>

</html>

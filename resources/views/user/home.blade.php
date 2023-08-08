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
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.2/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap.min.css">
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
        <div class="container" style="padding: 100px 0 0 0;">
            <h1 class="font-weight-semibold">Informasi mengenai Banjir</h1>
            <h6 class="font-weight-normal text-muted">untuk daerah ketapang dan sekitaranya..</h6>
            {{-- <div>
                <button class="btn btn-opacity-light mr-1">Get started</button>
                <button class="btn btn-opacity-success ml-1">Learn more</button>
            </div> --}}
            {{-- <img src="{{ url('admin') }}/logo/banjirkita.svg" alt="" class="img-fluid"> --}}
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fill-opacity="1"
                d="M0,128L48,117.3C96,107,192,85,288,117.3C384,149,480,235,576,250.7C672,267,768,213,864,197.3C960,181,1056,203,1152,192C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>

    <div class="container-fluid" style="background-color: #0099ff" id="warning">
        <div class="row justify-content-center position-relative">
            <div class="col-md-8">
                <div class="" style="background-color: rgba(255, 255, 255, 0.5); padding: 20px 20px 20px 20px; border-radius: 10px">
                    {{-- <div class="card-body"> --}}
                        <h4 class="text-center">Peringatan Dini Banjir</h4>
                        <p class="text-center">Peringatan atau notifikasi banjir </p>
                        @foreach ($notifications as $notification)
                            <div class="card px-3 py-3 mb-3">
                                <div class="card body p-3">
                                    <h4>{{ $notification->title }}</h4>

                                    <p class="mt-2">Kepada Warga Terhormat di Wilayah <b>
                                            {{ $notification->locations->location_name }} </b>,
                                        <br />
                                        Kami sampaikan bahwa daerah berikut ini sedang mengalami banjir darurat:
                                    </p>

                                    <ul>
                                        <li> Daerah Terdampak: <b> {{ $notification->affected_area }} </b></li>
                                        <li> Status Banjir: <b> {{ $notification->status }} </b></li>
                                        <li> Waktu Terdeteksi: <b>
                                                {{ $notification->created_at->format('F j, Y, g:i a') }} </b>
                                        </li>
                                    </ul>

                                    <p>
                                        Kami mohon agar Anda segera mengambil langkah-langkah berikut: <br />

                                        {!! $notification->description !!}

                                        Terima kasih
                                    </p>

                                </div>
                                @if ($notification->status == 'Bahaya')
                                    <div class="card-footer" style="background-color: #eb1c26"></div>
                                @elseif ($notification->status == 'Siaga')
                                    <div class="card-footer" style="background-color: #f69128"></div>
                                @elseif ($notification->status == 'Waspada')
                                    <div class="card-footer" style="background-color: #ffde13"></div>
                                @elseif ($notification->status == 'Normal')
                                    <div class="card-footer" style="background-color: #ced2d5"></div>
                                @endif

                            </div>
                        @endforeach
                    {{-- </div> --}}
                </div>


            </div>

            {{-- @if ($notification->status == 'Bahaya')
                                <div class="card mb-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex  align-items-center">
                                            <div class="card-body">
                                                <h4>{{ $notification->title }}</h4>
                                                <h6> {{ $notification->affected_area }}</h6>

                                                <p>
                                                    {{ $notification->description }}
                                                </p>
                                                <div class="d-flex row">
                                                    <div class="col-md-3">
                                                        <h5 class="text-white"> <span class="p-3 badge"
                                                                style="background-color: #EB1C26">{{ $notification->locations->location_name }}</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5 class="text-white"> <span class="p-3 badge"
                                                                style="background-color: #EB1C26">{{ $notification->status }}</span>
                                                        </h5>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <h5 class="text-white"> <span class="p-3 badge"
                                                                style="background-color: #EB1C26">{{ $notification->created_at->format('F j, Y, g:i a') }}</span>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center align-items-center">
                                            <div>
                                                <img src="{{ url('admin/icons') }}/bahaya.svg" width="150px"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif ($notification->status == 'Siaga')
                                <div class="card mb-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex  align-items-center">
                                            <div class="card-body">
                                                <h4>{{ $notification->title }}</h4>
                                                <h6> {{ $notification->affected_area }}</h6>

                                                <p>
                                                    {{ $notification->description }}
                                                </p>
                                                <div class="d-flex row">
                                                    <div class="col-md-3">
                                                        <h5 class="text-white"> <span class="p-3 badge"
                                                                style="background-color: #F69128">{{ $notification->locations->location_name }}</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5 class="text-white"> <span class="p-3 badge"
                                                                style="background-color: #F69128">{{ $notification->status }}</span>
                                                        </h5>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <h5 class="text-white"> <span class="p-3 badge"
                                                                style="background-color: #F69128">{{ $notification->created_at->format('F j, Y, g:i a') }}</span>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center align-items-center">
                                            <div>
                                                <img src="{{ url('admin/icons') }}/siaga.svg" width="150px"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif ($notification->status == 'Waspada')
                                <div class="card mb-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <div class="card-body">
                                                <h4>{{ $notification->title }}</h4>
                                                <h6> {{ $notification->affected_area }}</h6>

                                                <p>
                                                    {{ $notification->description }}
                                                </p>
                                                <div class="d-flex row">
                                                    <div class="col-md-3">
                                                        <h5 class="text-white"> <span class="p-3 badge"
                                                                style="background-color: #FFDE13">{{ $notification->locations->location_name }}</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5 class="text-white"> <span class="p-3 badge"
                                                                style="background-color: #FFDE13">{{ $notification->status }}</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5 class="text-white"> <span class="p-3 badge"
                                                                style="background-color: #FFDE13">{{ $notification->created_at->format('F j, Y, g:i a') }}</span>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center align-items-center">
                                            <div>
                                                <img src="{{ url('admin/icons') }}/waspada.svg" width="150px"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif ($notification->status == 'Normal')
                                <div class="card mb-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex  align-items-center">
                                            <div class="card-body">
                                                <h4>{{ $notification->title }}</h4>
                                                <h6> {{ $notification->affected_area }}</h6>
                                                <p>
                                                    {{ $notification->description }}
                                                </p>
                                                <div class="d-flex row">
                                                    <div class="col-md-3">
                                                        <h5 class="text-white"> <span class="p-3 badge"
                                                                style="background-color: #CED2D5">{{ $notification->locations->location_name }}</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5 class="text-white"> <span class="p-3 badge"
                                                                style="background-color: #CED2D5">{{ $notification->status }}</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <h5 class="text-white"> <span class="p-3 badge"
                                                                style="background-color: #CED2D5">{{ $notification->created_at->format('F j, Y, g:i a') }}</span>
                                                        </h5>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center align-items-center">
                                            <div>
                                                <img src="{{ url('admin/icons') }}/normal.svg" width="150px"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif --}}

            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Pemantauan Tinggi Air</h4>
                        <p class="text-center">Data di ambil dalam waktu 24 jam terakhir</p>
                        <table class="table table-bordered responsive" id="tinggi">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Water Level</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_waterLevel as $waterLevel)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $waterLevel->location }}</td>
                                        <td>{{ $waterLevel->water_level }} Cm</td>
                                        <td>{{ $waterLevel->time }}, {{ $waterLevel->created_at->format('F j, Y') }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1"
            d="M0,160L48,170.7C96,181,192,203,288,192C384,181,480,139,576,144C672,149,768,203,864,224C960,245,1056,235,1152,208C1248,181,1344,139,1392,117.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>

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
                            <div class="card customer-cards mx-2" style="background-color:#0099ff ">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="https://ibnux.github.io/BMKG-importer/icon/{{ $weather['kodeCuaca'] }}.png"
                                            width="89" height="89" alt="" class="img-customer">
                                        <h6 class="card-title pt-3 text-white">{{ $weather['jamCuaca'] }}</h6>
                                        <table class="table text-white">
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
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.3.2/js/dataTables.fixedHeader.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#tinggi').DataTable({
                responsive: true
            });


            new $.fn.dataTable.FixedHeader(table);
        });
    </script>
</body>

</html>

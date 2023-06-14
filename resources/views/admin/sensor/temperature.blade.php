@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-3 ">
            <div class="card ">
                <div class="card-body text-center">
                    <h5 class="fw-semibold fs-5 mb-4">Temperature</h5>
                    <div class="position-relative overflow-hidden d-inline-block">
                        <img src="{{ url('admin/icons/temperature.svg') }}" width="80" alt=""
                            class="img-fluid mb-4 rounded-circle position-relative" width="140">
                    </div>
                    <h1 class="display-6 mb-3 px-xl-5" id="temperature"></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="example" class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <!-- start row -->
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            <!-- end row -->
                        </thead>
                        <tbody>
                            <!-- start row -->
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <!-- end row -->
                            <!-- start row -->
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            <!-- end row -->
                        </tbody>
                        <tfoot>
                            <!-- start row -->
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            <!-- end row -->
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css">
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>

    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');

            const image = new Image();
            image.src = "{{ asset('admin/icons/temperature.svg') }}";

            const plugin = {
                id: 'customCanvasBackgroundImage',
                beforeDraw: (chart) => {
                    if (image.complete) {
                        const ctx = chart.ctx;
                        const {
                            top,
                            left,
                            width,
                            height
                        } = chart.chartArea;
                        const x = left + width / 2 - image.width / 2;
                        const y = top + height / 2 - image.height / 2;
                        ctx.drawImage(image, x, y);

                    } else {
                        image.onload = () => chart.draw();
                    }
                }
            };

            var ctx = document.getElementById("myChart").getContext('2d');
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [],
                    datasets: [{
                        label: 'Temperature',
                        data: [],
                        borderColor: 'rgba(0, 123, 255, 1)',
                        // backgroundColor: 'rgba(0, 123, 255, 0.5)',
                        // fill: 'origin',
                        lineTension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            display: true,
                            title: {
                                display: true,
                                text: 'Time'
                            }
                        },
                        y: {
                            display: true,
                            title: {
                                display: true,
                                text: 'Value'
                            }
                        }
                    }
                },
                plugins: [plugin],
            });

            function addData(data, currentTime) {

                chart.data.labels.push(currentTime);
                if (chart.data.labels.length > 8) {
                    chart.data.labels = chart.data.labels.slice(-8);
                }

                chart.data.datasets[0].data.push(data);
                if (chart.data.datasets[0].data.length > 8) {
                    chart.data.datasets[0].data = chart.data.datasets[0].data.slice(-8);
                }

                chart.update();
            }


            function fetchData() {
                $.ajax({
                    url: '/admin/fetchData',
                    type: 'GET',
                    dataType: 'json',
                    success: (data) => {
                        var time = data.date;
                        var temperature = data.suhu;
                        addData(temperature, time);

                        $('#temperature').text(temperature);
                    }
                })
            }

            fetchData()
            setInterval(() => {
                fetchData()
            }, 10000);
        })
    </script>
@endpush

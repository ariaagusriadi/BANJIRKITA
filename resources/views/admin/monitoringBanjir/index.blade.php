@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="card mt-2 p-4">
                <div class="card-body">
                    <h4>Data Detail</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Location</th>
                                <th>Last Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($locations as $location)
                                <tr>
                                    <td>
                                        <a href="{{ url('admin/monitoring-banjir', $location->id) }}"
                                            class="btn btn-sm btn-secondary">
                                            <i class="ti ti-info-square"></i> Detail
                                        </a>
                                    </td>
                                    <td>{{ $location->location_name }}</td>
                                    <td>24 hours</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-2">
                <div class="card-body text-center">
                    <h5 class="fw-semibold fs-5 mb-4">Water Level</h5>
                    <div class="position-relative overflow-hidden d-inline-block">
                        <img src="{{ url('admin/icons/waterlevel.svg') }}" width="80" alt=""
                            class="img-fluid mb-4 rounded-circle position-relative" width="140">
                    </div>
                    <h1 class="display-6 mb-3 px-xl-5" id="waterlevel"></h1>
                    <h5 class="fw-semibold fs-5 mb-2" id="location"></h5>

                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="">Recent Data</h5>
                    <div class="justify-content-center d-flex">
                        <ul class="timeline-widget mb-3 mt-3 position-relative mb-n5" id="myUl">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('style')
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        $(document).ready(function() {

            const image = new Image();
            image.src = "{{ asset('admin/icons/floads.svg') }}";

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
                        label: 'Water Level',
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
                if (chart.data.labels.length > 5) {
                    chart.data.labels = chart.data.labels.slice(-5);
                }

                chart.data.datasets[0].data.push(data);
                if (chart.data.datasets[0].data.length > 5) {
                    chart.data.datasets[0].data = chart.data.datasets[0].data.slice(-5);
                }

                chart.update();
            }


            function fetchData() {
                $.ajax({
                    url: '/admin/monitoring-banjir/fetchData',
                    type: 'GET',
                    dataType: 'json',
                    success: (data) => {
                        var time = data.time;
                        var waterlevel = data.ketingan_air;
                        addData(waterlevel, time);

                        var waterLevel2 = waterlevel + " Cm";
                        $('#waterlevel').text(waterLevel2);
                        $('#location').text(data.location)

                        $('#myUl').prepend(`
                            <li class="timeline-item d-flex position-relative overflow-hidden">
                                <div class="timeline-time text-dark flex-shrink-0 text-end">${time}</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                                <div class="timeline-desc fs-3 text-dark mt-n1">${data.location}</div>
                            </li>
                        `)

                        if ($('#myUl li').length > 5) {
                            $('#myUl li:last-child').remove();
                        }

                    }
                })
            }


            fetchData()
            setInterval(() => {
                fetchData()
            }, 20000);
        })
    </script>
@endpush

{{-- <div class="card-body">
    <div class="mb-3 d-flex justify-content-center align-items-center rounded-3"
        style="height: 80px; width:310px; background-color:rgb(235,28,38); opacity: 25%;" id="bahaya">
        <h5>Bahaya / Siaga 1</h5>
    </div>

    <div class="mb-3 d-flex justify-content-center align-items-center rounded-3"
        style="height: 80px; width:310px; background-color:rgb(246,145,40); opacity: 25%;" id="siaga">
        <h5>Siaga / Siaga 2</h5>
    </div>

    <div class="mb-3 d-flex justify-content-center align-items-center rounded-3"
        style="height: 80px; width:310px; background-color:rgb(255,222,19); opacity: 25%;" id="waspada">
        <h5>Waspada / Siaga 3</h5>
    </div>


    <div class="mb-3 d-flex justify-content-center align-items-center rounded-3"
        style="height: 80px; width:310px; background-color:rgb(206,210,213); opacity: 25%;" id="normal">
        <h5>Normal / Siaga 4</h5>
    </div>

</div> --}}



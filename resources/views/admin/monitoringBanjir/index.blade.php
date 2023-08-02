@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
            <div class="card mt-2 p-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4>Data Detail</h4>

                        </div>
                        <div>
                            @include('admin.layouts.utils.detailbutton', [
                                'url' => url('admin/notification-center'),
                            ])
                        </div>
                    </div>

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
        <div class="col-md-3">
            <div class="card mb-2">
                <div class="card-body text-center">
                    <h5 class="fw-semibold fs-5 mb-4">Water Level</h5>
                    <div class="position-relative overflow-hidden d-inline-block">
                        <img src="{{ url('admin/icons/waterlevel.svg') }}" width="50" alt=""
                            class="img-fluid mb-4 rounded-circle position-relative" width="100">
                    </div>
                    <h3 class="mb-3  px-xl-5" id="waterlevel"></h3>
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

            const data = <?php echo json_encode($waterLevels); ?>


            const water_level = data.map((item) => {
                return item.water_level
            })


            const time = data.map((item) => {
                return item.time
            })

            const latest = <?php echo json_encode($latestData); ?>


            const timeLate = latest.map((item) => {
                return item.time
            })

            const location2 = latest.map((item) => {
                return item.location
            })


            function addUl() {
                for (let i = 1; i < 5; i++) {
                    $('#myUl').append(`
                        <li class="timeline-item d-flex position-relative overflow-hidden">
                            <div class="timeline-time text-dark flex-shrink-0 text-end">${timeLate[i]}</div>
                                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                                    <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                                    <span class="timeline-badge-border d-block flex-shrink-0"></span>
                                </div>
                            <div class="timeline-desc fs-3 text-dark mt-n1">${location2[i]}</div>
                        </li>
                    `)
                }
            }

            addUl()

            var ctx = document.getElementById("myChart").getContext('2d');
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: time.slice().reverse(),
                    datasets: [{
                        label: 'Water Level',
                        data: water_level.slice().reverse(),
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
                if (chart.data.labels.length > 10) {
                    chart.data.labels = chart.data.labels.slice(-10);
                }

                chart.data.datasets[0].data.push(data);
                if (chart.data.datasets[0].data.length > 10) {
                    chart.data.datasets[0].data = chart.data.datasets[0].data.slice(-10);
                }

                chart.update();
            }


            function fetchData() {
                $.ajax({
                    url: '/admin/fetchDatabase',
                    type: 'GET',
                    dataType: 'json',
                    success: (data) => {
                        // console.log(data);
                        var time = data.time;
                        var waterlevel = data.water_level;
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


            // fetchData()
            // setInterval(() => {
            //     fetchData()
            // }, 60000); // 1 menit
            fetchData()
            setInterval(() => {
                fetchData()
            }, 3600000); // 1 jam
        })
    </script>
@endpush

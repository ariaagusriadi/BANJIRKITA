@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card ">
                <div class="card-body p-4">
                    <h4 class="fw-semibold">$10,230</h4>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        $(document).ready(function() {

            const image = new Image();
            image.src = "{{ asset('admin/icons/humadity.svg') }}";

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
                        label: 'Humidty',
                        data: [],
                        borderColor: 'rgba(0, 123, 255, 1)',
                        // backgroundColor: 'rgba(0, 123, 255, 0.5)',
                        // fill: 'origin',
                        lineTension: 0.3
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



            function addData(time, humidty) {
                chart.data.labels.push(time);
                chart.data.datasets[0].data.push(humidty);

                if (chart.data.labels.length > 10) {
                    chart.data.labels.shift(time);
                    chart.data.datasets[0].data.shift();
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
                        var humidty = data.kelembapan;
                        addData(time, humidty);
                    }
                })
            }

            fetchData()
            setInterval(() => {
                fetchData()
            }, 3000);
        })
    </script>
@endpush

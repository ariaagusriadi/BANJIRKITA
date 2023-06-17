@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        @include('admin.layouts.utils.backbutton', ['url' => url('admin/locationSensor')])
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Location Name</h6>
                            <p>{{ $locationSensor->location_name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Sensor Name</h6>
                            <p>{{ $locationSensor->sensor_name }}</p>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <h6>Description</h6>
                        <p>{{ $locationSensor->description }}</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <div id="map" class="mt-2" style="height:30vh; width: 100%;"></div> <br>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
@endpush

@push('script')
    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"
        integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
    <script>
        const DEFAULT_COORD_1 = {{ $location_1 }};
        const DEFAULT_COORD_2 = {{ $location_2 }};
        const result_map = document.getElementById("result-map");

        const Map = L.map("map")
        const osmUrl = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
        const attribute = "&copy; <a href='https://www.openstreetmap.org/copyright'>OpenStreetMap</a> contributors"

        const osmTile = new L.TileLayer(osmUrl, {
            minZoom: 2,
            maxZoom: 20,
            attribution: attribute
        })

        Map.setView(new L.latLng(DEFAULT_COORD_1, DEFAULT_COORD_2), 13)
        Map.addLayer(osmTile)

        const marker = L.marker([DEFAULT_COORD_1, DEFAULT_COORD_2]).addTo(Map);
    </script>
@endpush

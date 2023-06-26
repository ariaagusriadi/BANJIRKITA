@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    {{-- <div class="mb-4">
                        @include('admin.layouts.utils.backbutton', ['url' => url('admin/locationSensor')])
                    </div> --}}
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Location Name</h6>
                            <p>{{ $location->location_name }}</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Sensor Name</h6>
                            <p>{{ $location->sensor_name }}</p>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <h6>Description</h6>
                        <p>{{ $location->description }}</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div id="map" class="mt-2" style="height:30vh; width: 100%;"></div> <br>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            @if ($location->indicatorLimit)
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('admin/indicator-limit/edit', $location->id) }}" class="btn btn-success">
                            <i class="ti ti-settings"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 p-3 rounded-3" style="background-color:rgb(235,28,38); ">
                            <label for="" class="form-label">Bahaya / Siaga 1</label>
                            <div class="row">
                                <div class="col">
                                    <input type="number" class="form-control bg-white"
                                        value="{{ $location->indicatorLimit->bahaya_1 }}" readonly>
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control bg-white"
                                        value="{{ $location->indicatorLimit->bahaya_2 }}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 p-3 rounded-3" style="background-color:rgb(246,145,40);">
                            <label for="" class="form-label">Siaga / Siaga 2</label>
                            <div class="row">
                                <div class="col">
                                    <input type="number" class="form-control bg-white"
                                        value="{{ $location->indicatorLimit->siaga_1 }}" readonly>
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control bg-white"
                                        value="{{ $location->indicatorLimit->siaga_2 }}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 p-3 rounded-3" style="background-color:rgb(255,222,19);">
                            <label for="" class="form-label">Waspada / Siaga 3</label>
                            <div class="row">
                                <div class="col">
                                    <input type="number" class="form-control bg-white"
                                        value="{{ $location->indicatorLimit->waspada_1 }}" readonly>
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control bg-white"
                                        value="{{ $location->indicatorLimit->waspada_2 }}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 p-3 rounded-3" style="background-color:rgb(206,210,213);">
                            <label for="" class="form-label">Normal / Siaga 4</label>
                            <div class="row">
                                <div class="col">
                                    <input type="number" class="form-control bg-white"
                                        value="{{ $location->indicatorLimit->normal_1 }}" readonly>
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control bg-white"
                                        value="{{ $location->indicatorLimit->normal_2 }}" readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endif
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

@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <div class="mb-4">
                        @include('admin.layouts.utils.backbutton', ['url' => url('admin/locationSensor')])
                    </div>
                    <form action="{{ url('admin/locationSensor') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input name="location_name" type="text"
                                        class="form-control @error('location_name')
                                        is-invalid
                                    @enderror"
                                        id="tb-fname" placeholder="Enter Location Name">
                                    <label for="tb-fname">Location Name</label>
                                    @error('location_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input name="sensor_name" type="text"
                                        class="form-control @error('sensor_name')
                                        is-invalid
                                    @enderror"
                                        id="tb-fname2" placeholder="Enter Sensor Name">
                                    <label for="tb-fname2">Sensor Name</label>
                                    @error('sensor_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="" class="form-label">Description</label>

                            <textarea name="description"
                                class="form-control @error('description')
                                is-invalid
                            @enderror"
                                id="" cols="30" rows="10"></textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">save</button>
                        </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <input type="search" class="form-control" oninput="onTyping(this)"
                            placeholder="search your location..">
                        <div class="position-relative">
                            <ul id="result-map" class="position-absolute"
                                style="background:#fff; z-index:1001; list-style: none; padding:0px; top:10px;">
                            </ul>
                        </div>
                    </div>
                    <div id="map" class="mt-2" style="height:30vh; width: 100%;"></div> <br>
                    <label for="posisi" class="d-block">Posisi <span class="badge" style="color:#E13636">Drag
                            pin to get position*</span>

                    </label>
                    <input id="posisi" readonly type="text" required
                        class="form-control @error('location')
                        is-invalid
                    @enderror"
                        name="location">
                    @error('location')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                </form>

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
        const DEFAULT_COORD_1 = -1.8168321;
        const DEFAULT_COORD_2 = 109.9860561;
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

        var posisi = document.querySelector("[name=location]");

        Map.on('click', (e) => {
            const {
                lat,
                lng
            } = e.latlng
            marker.setLatLng([lat, lng])
            posisi.value = lat + "," + lng;
        })

        let typingInterval

        function onTyping(e) {
            clearInterval(typingInterval);
            const {
                value
            } = e;

            typingInterval = setInterval(() => {
                clearInterval(typingInterval);
                searchLocation(value)
            }, 500);
        }

        async function searchLocation(keyword) {
            if (keyword.length > 0) {
                const response = await fetch(
                    `https://nominatim.openstreetmap.org/search?q=${keyword}&format=json`
                );
                const jsonData = await response.json();
                if (jsonData.length > 0) {
                    renderSugestion(jsonData)
                } else {
                    alert("lokasi tidak ada di bumi")
                }
            }
        }

        function renderSugestion(data) {
            let sugestionHtml = ""
            data.map((item) => {
                sugestionHtml +=
                    `<li><a href="#" onclick="setLocation(${item.lat}, ${item.lon})">${item.display_name}</a></li>`
            })
            result_map.innerHTML = sugestionHtml;
        }

        function clearResult() {
            result_map.innerHTML = "";
        }

        function setLocation(lat, lon) {
            Map.setView(new L.latLng(lat, lon), 13)
            marker.setLatLng([lat, lon])

            clearResult()

            posisi.value = lat + "," + lon;
        }
    </script>
@endpush

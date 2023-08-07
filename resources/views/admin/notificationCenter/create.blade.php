@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="fw-semibold fs-5 mb-4 text-center">Peringatan Dini Banjir</h5>

                            <form action="{{ url('admin/notification-center') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" name="title"
                                        class="form-control @error('title')
                                       is-invalid
                                    @enderror"
                                        placeholder="Pemberitahuan Banjir Darurat">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Location</label>
                                    <select id="location" name="location"
                                        class="form-select @error('location')
                                       is-invalid
                                    @enderror"
                                        aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        @foreach ($locations as $location)
                                            <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Affected Area</label>
                                    <input type="text" name="affected_area"
                                        class="form-control @error('affected_area')
                                       is-invalid
                                    @enderror">
                                    @error('affected_area')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Status</label>
                                    <select name="status"
                                        class="form-select @error('status')
                                       is-invalid
                                    @enderror"
                                        aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="Bahaya">Bahaya / Siaga 1</option>
                                        <option value="Siaga">Siaga / Siaga 2</option>
                                        <option value="Waspada">Waspada / Siaga 3</option>
                                        <option value="Normal">Normal / Siaga 4</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Description</label>
                                    <textarea name="description" id="desc" cols="30" rows="18"
                                        class="form-control @error('description')
                                        is-invalid
                                     @enderror"></textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-dark">Publish</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-2">
                        <div class="card-body text-center">
                            <h5 class="fw-semibold fs-5 mb-3">Water Level</h5>
                            <div class="position-relative overflow-hidden d-inline-block">
                                <img src="{{ url('admin/icons/waterlevel.svg') }}" width="50" alt=""
                                    class="img-fluid mb-2 rounded-circle position-relative" width="140">
                            </div>
                            <h1 class="display-6 mb-3 px-xl-5" id="waterlevel"></h1>
                            <h5 class="fw-semibold fs-5 mb-2" id="location2"></h5>

                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="fw-semibold fs-5 mb-4 text-center">Limit Indicator</h5>

                            <div class="mb-3 p-3 rounded-3" style="background-color:rgb(235,28,38); ">
                                <label for="" class="form-label">Bahaya / Siaga 1</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" readonly class="form-control bg-white " name="bahaya_1"
                                            id="bahaya_1">
                                    </div>
                                    <div class="col">
                                        <input type="text" readonly class="form-control bg-white " name="bahaya_2"
                                            id="bahaya_2">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 p-3 rounded-3" style="background-color:rgb(246,145,40);">
                                <label for="" class="form-label">Siaga / Siaga 2</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" readonly class="form-control bg-white " name="siaga_1"
                                            id="siaga_1">
                                    </div>
                                    <div class="col">
                                        <input type="text" readonly
                                            class="form-control bg-white @error('siaga_2') is-invalid @enderror"
                                            name="siaga_2" id="siaga_2">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 p-3 rounded-3" style="background-color:rgb(255,222,19);">
                                <label for="" class="form-label">Waspada / Siaga 3</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" readonly class="form-control bg-white " name="waspada_1"
                                            id="waspada_1">
                                    </div>
                                    <div class="col">
                                        <input type="text" readonly class="form-control bg-white " name="waspada_2"
                                            id="waspada_2">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 p-3 rounded-3" style="background-color:rgb(206,210,213);">
                                <label for="" class="form-label">Normal / Siaga 4</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" readonly class="form-control bg-white " name="normal_1"
                                            id="normal_1">
                                    </div>
                                    <div class="col">
                                        <input type="text" readonly class="form-control bg-white " name="normal_2"
                                            id="normal_2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


@push('style')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $('#desc').summernote({
                tabsize: 2,
                height: 150,
                // toolbar: [
                //     // [groupName, [list of button]]
                //     ['style', ['bold', 'italic', 'underline', 'clear']],
                //     ['font', ['strikethrough', 'superscript', 'subscript']],
                //     ['fontsize', ['fontsize']],
                //     ['color', ['color']],
                //     ['para', ['ul', 'ol', 'paragraph']],
                //     ['height', ['height']]
                // ]
            });
            $('#location').on('change', function() {
                let id = $(this).val();
                $.ajax({
                    url: '/admin/getData/' + id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {


                        $('#bahaya_1').val(data.bahaya_1 + " Cm")
                        $('#bahaya_2').val(data.bahaya_2 + " Cm")
                        $('#siaga_1').val(data.siaga_1 + " Cm")
                        $('#siaga_2').val(data.siaga_2 + " Cm")
                        $('#waspada_1').val(data.waspada_1 + " Cm")
                        $('#waspada_2').val(data.waspada_2 + " Cm")
                        $('#normal_1').val(data.normal_1 + " Cm")
                        $('#normal_2').val(data.normal_2 + " Cm")
                    }
                })
            })


            function fetchData() {
                $.ajax({
                    url: "/admin/fetchDatabase",
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        var waterlevel = data.water_level;
                        var waterLevel2 = waterlevel + " Cm";
                        $('#waterlevel').text(waterLevel2);
                        $('#location2').text(data.location)
                    }
                })
            }

            fetchData()

            setInterval(() => {
                fetchData();
            }, 600000);

        })
    </script>
@endpush

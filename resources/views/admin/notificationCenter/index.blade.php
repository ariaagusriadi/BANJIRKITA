@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
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

                </div>
            </div>
        </div>
    </div>
@endsection


@push('style')
@endpush

@push('script')
@endpush

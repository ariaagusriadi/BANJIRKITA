@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-hover" id="table">
                        <thead>
                            <tr>
                                <th>Location</th>
                                <th>Sensor</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($locations as $location)
                                <tr>
                                    <td>{{ $location->location_name }}</td>
                                    <td>{{ $location->sensor_name }}</td>
                                    <td>
                                        <a href="{{ url('admin/indicator-limit', $location->id) }}" class="btn btn-dark">
                                            <i class="ti ti-info-circle"></i>
                                        </a>
                                        @if (!$location->indicatorLimit)
                                            <a href="{{ url('admin/indicator-limit/edit', $location->id) }}"
                                                class="btn btn-success">
                                                <i class="ti ti-settings"></i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style')
@endpush

@push('script')
@endpush

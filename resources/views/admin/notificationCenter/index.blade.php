@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <h5 class="mb-0">Notification Center</h5>
                    </div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-fill mt-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#navpill-111" role="tab">
                                <span>Notification Publish</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#navpill-222" role="tab">
                                <span>Log Notifications</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content border mt-2">
                        <div class="tab-pane active p-3" id="navpill-111" role="tabpanel">

                            <div class="my-3 d-flex justify-content-end">
                                <a href="{{ url('admin/notification-center/create') }}" class="btn btn-success">
                                    <i class="ti ti-bell-plus"></i> Add Notification
                                </a>
                            </div>

                            @foreach ($locations_publishs as $notification_publish)
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <h5 class="fw-semibold fs-5 mb-3">{{ $notification_publish->title }}</h5>
                                        <p> {{ $notification_publish->description }}</p>
                                        @if ($notification_publish->status == 'Bahaya')
                                            <span class="mb-1 badge"
                                                style="background-color:rgb(235,28,38)">{{ $notification_publish->status }}</span>
                                        @elseif ($notification_publish->status == 'Siaga')
                                            <span class="mb-1 badge"
                                                style="background-color:rgb(246,145,40);">{{ $notification_publish->status }}</span>
                                        @elseif ($notification_publish->status == 'Waspada')
                                            <span class="mb-1 badge"
                                                style="background-color:rgb(255,222,19)">{{ $notification_publish->status }}</span>
                                        @elseif ($notification_publish->status == 'Normal')
                                            <span class="mb-1 badge"
                                                style="background-color:rgb(206,210,213);">{{ $notification_publish->status }}</span>
                                        @endif
                                        &nbsp {{ $notification_publish->locations->location_name }} &nbsp
                                        {{ $notification_publish->created_at->format('F j, Y, g:i a') }}

                                        <form action="{{ url('admin/notification-center/unPublished', $notification_publish->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button id="unpublished" class="btn btn-dark float-end">Un Published</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="tab-pane p-3" id="navpill-222" role="tabpanel">
                            @foreach ($locations_logs as $notification_log)
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <h5 class="fw-semibold fs-5 mb-3">{{ $notification_log->title }}</h5>
                                        <p> {{ $notification_log->description }}</p>
                                        @if ($notification_log->status == 'Bahaya')
                                            <span class="mb-1 badge"
                                                style="background-color:rgb(235,28,38)">{{ $notification_log->status }}</span>
                                        @elseif ($notification_log->status == 'Siaga')
                                            <span class="mb-1 badge"
                                                style="background-color:rgb(246,145,40);">{{ $notification_log->status }}</span>
                                        @elseif ($notification_log->status == 'Waspada')
                                            <span class="mb-1 badge"
                                                style="background-color:rgb(255,222,19)">{{ $notification_log->status }}</span>
                                        @elseif ($notification_log->status == 'Normal')
                                            <span class="mb-1 badge"
                                                style="background-color:rgb(206,210,213);">{{ $notification_log->status }}</span>
                                        @endif
                                        &nbsp {{ $notification_log->locations->location_name }} &nbsp
                                        {{ $notification_log->created_at->format('F j, Y, g:i a') }}

                                        <form action="{{ url('admin/notification-center/delete', $notification_log->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button id="delete" class="btn btn-warning float-end">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('style')
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
@endpush

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

    <script>
        $(document).on('click', '#unpublished', function(e) {
            e.preventDefault();
            const form = $(this).parents('form');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2D384A',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Un Published!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Un Published!',
                        'Your notification Un Published.',
                        'success'
                    )
                    form.submit();
                }
            })
        })
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            const form = $(this).parents('form');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2D384A',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Delete!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Delete!',
                        'Your notification delete.',
                        'success'
                    )
                    form.submit();
                }
            })
        })
    </script>
@endpush

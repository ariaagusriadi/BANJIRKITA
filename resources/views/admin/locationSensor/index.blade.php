@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/locationSensor/create') }}" class="btn btn-dark float-end"><i
                            class="ti ti-plus"></i> Create Location Sensor</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Action</th>
                                <th>Location Name</th>
                                <th>Sensor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($locationSensors as $locationSensor)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>

                                        <a href="{{ url('admin/locationSensor', $locationSensor->id) }}"
                                            class="btn btn-dark"><i class="ti ti-info-square"></i></a>
                                        <a href="{{ url('admin/locationSensor', $locationSensor->id) }}/edit"
                                            class="btn btn-secondary"><i class="ti ti-edit"></i></a>
                                        <form action="{{ url('admin/locationSensor', $locationSensor->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button id="delete" class="btn btn-warning"><i
                                                    class="ti ti-trash"></i></button>
                                        </form>

                                    </td>
                                    <td>{{ $locationSensor->location_name }}</td>
                                    <td>{{ $locationSensor->sensor_name }}</td>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
@endpush

@push('script')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#table").DataTable();
        })
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            const form = $(this).parents('form');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                    form.submit();
                }
            })
        })
    </script>
@endpush

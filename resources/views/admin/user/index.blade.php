@extends('admin.layouts.app')

@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/user/create') }}" class="btn btn-dark float-end">Add User</a>
                </div>
                <div class="card-body">
                    <table id="example" class="table border table-striped table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Action</th>
                                <th>Email</th>
                                <th>username</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <a href="{{ url('admin/user', $user->id) }}"
                                            class="btn btn-dark"><i class="ti ti-info-square"></i></a>
                                        <a href="{{ url('admin/user', $user->id) }}/edit"
                                            class="btn btn-secondary"><i class="ti ti-edit"></i></a>
                                        <form action="{{ url('admin/user', $user->id) }}" method="post"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button id="delete" class="btn btn-warning"><i
                                                    class="ti ti-trash"></i></button>
                                        </form>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->username }}</td>
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
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
@endpush

@push('script')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>


    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({

            });

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

        })
    </script>
@endpush

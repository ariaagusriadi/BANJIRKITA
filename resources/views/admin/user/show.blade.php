@extends('admin.layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @include('admin.layouts.utils.backbutton', ['url' => url('admin/user')])
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <dt>UserName</dt>
                                <dd>{{ $user->username }}</dd>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <dt>Email</dt>
                                <dd>{{ $user->email }}</dd>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <dt>First Name</dt>
                                <dd>{{ $user->first_name }}</dd>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <dt>Last Name</dt>
                                <dd>{{ $user->last_name }}</dd>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

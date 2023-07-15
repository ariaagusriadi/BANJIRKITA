@extends('admin.layouts.app')

@section('content')
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @include('admin.layouts.utils.backbutton', ['url' => url('admin/user')])
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/user', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="" class="form-label">Username</label>
                                    <input type="text"
                                        class="form-control @error('username')
                                        is-invalid
                                    @enderror"
                                        name="username" value="{{ $user->username }}">
                                    @error('username')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email"
                                        class="form-control @error('email')
                                        is-invalid
                                    @enderror"
                                        name="email" value="{{ $user->email }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="" class="form-label">First Name</label>
                                    <input type="text"
                                        class="form-control @error('first_name')
                                        is-invalid
                                    @enderror"
                                        name="first_name" value="{{ $user->first_name }}">
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="" class="form-label">Last Name</label>
                                    <input type="text"
                                        class="form-control @error('last_name')
                                        is-invalid
                                    @enderror"
                                        name="last_name" value="{{ $user->last_name }}">
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password"
                                class="form-control @error('password')
                                is-invalid
                            @enderror"
                                name="password">
                            @error('password')
                                is-inval <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-dark">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

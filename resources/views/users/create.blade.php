@extends('layouts.app')
@section('title')
    User - Create
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">

        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-auto me-auto fw-bold">User - Create</div>
                        <div class="col-auto">
                            <a href="{{ route('users.index') }}" class="btn btn-dark btn-sm">
                                <i class="fas fa-backspace"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="post" autocomplete="off">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                                placeholder="Name">

                            <!-- error message untuk title -->
                            @error('name')  
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">

                            <!-- error message untuk title -->
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status_id" class="form-label fw-bold">Status</label>
                                    <select name="status_id" id="status_id" class="form-select @error('status_id') is-invalid @enderror">
                                        <option value="" hidden>-- Pilih Status --</option>
                                        @foreach($status as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
        
                                    <!-- error message untuk title -->
                                    @error('status_id')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="role_id" class="form-label fw-bold">Roles</label>
                                    <select name="role_id" id="role_id" class="form-select @error('role_id') is-invalid @enderror">
                                        <option value="" hidden>-- Pilih Roles --</option>
                                        @foreach($roles as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
        
                                    <!-- error message untuk title -->
                                    @error('role_id')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password" class="form-label fw-bold">Password</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
        
                                    <!-- error message untuk title -->
                                    @error('password')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="confirm-password" class="form-label fw-bold">Confrime Password</label>
                                    <input type="password" name="confirm-password" class="form-control @error('confirm-password') is-invalid @enderror" placeholder="Confrim Password">
        
                                    <!-- error message untuk title -->
                                    @error('confirm-password')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="footer">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Store</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

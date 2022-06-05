@extends('layouts.app')
@section('title')
    User - Show
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">

        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-auto me-auto fw-bold">User - Show</div>
                        <div class="col-auto">
                            <a href="{{ route('users.index') }}" class="btn btn-dark btn-sm">
                                <i class="fas fa-backspace"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="id" class="form-label fw-bold">ID</label>
                        <input type="text" name="id" class="form-control" 
                            placeholder="id" value="{{ $user->id }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Name</label>
                        <input type="text" name="name" class="form-control" 
                            placeholder="Name" value="{{ $user->name }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}" readonly>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status_id" class="form-label fw-bold">Status</label>
                                <input type="text" class="form-control" value="{{ $user->status->name }}" readonly>
    
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
                                <input type="text" class="form-control" value="{{ $user->role->name }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

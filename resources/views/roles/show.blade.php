@extends('layouts.app')
@section('title')
    Role - Show
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">

        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-auto me-auto fw-bold">Roles - Show</div>
                        <div class="col-auto">
                            <a href="{{ route('roles.index') }}" class="btn btn-dark btn-sm">
                                <i class="fas fa-backspace"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="id" class="form-label fw-bold">ID</label>
                                <input type="text" class="form-control" value="{{ $role->id }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Name</label>
                                <input type="name" class="form-control" id="name" value="{{ $role->name }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

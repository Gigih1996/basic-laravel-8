@extends('layouts.app')
@section('title')
    Status - Edit
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">

        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-auto me-auto fw-bold">Status - Edit #{{ $status->id }}</div>
                        <div class="col-auto">
                            <a href="{{ route('status.index') }}" class="btn btn-dark btn-sm">
                                <i class="fas fa-backspace"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('status.update', $status->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold te">Name<span class="text-danger">*</span></label>
                            <input name="name" type="name" class="form-control @error('name') @enderror" id="name" value="{{ $status->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        

                        <div class="footer">
                            <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i> Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('title')
    Status - Create
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">

        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-auto me-auto fw-bold">Status - Create</div>
                        <div class="col-auto">
                            <a href="{{ route('status.index') }}" class="btn btn-dark btn-sm">
                                <i class="fas fa-backspace"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('status.store') }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name">

                            <!-- error message untuk title -->
                            @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
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

@extends('layouts.app')
@section('title')
    Status - Index
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">

        <div class="col-md-12 mt-3">
              <!-- Notifikasi menggunakan flash session data -->
              @if (session('success'))
                <div class="alert alert-success fw-bold text-success">
                    {{ session('success') }}
                </div>
              @endif

              @if (session('error'))
                <div class="alert alert-error fw-bold text-success">
                    {{ session('error') }}
                </div>
              @endif

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-auto me-auto font-weight-bold">Status - Index</div>
                        <div class="col-auto">
                            <a href="{{ route('status.create') }}" class="btn btn-dark btn-sm">
                                <i class="fa fa-plus-circle"></i> Create
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-reponsive">
                    @if (count($status) > 0)
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <th class="font-weight-bold text-center">NO</th>
                                <th>Name</th>
                                <th>Create</th>
                                <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($status as $key => $item )
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('status.show', $item->id) }}" class="btn btn-success btn-sm">
                                            <i class="fa fa-search"></i> Show
                                        </a>
                                        <a href="{{ route('status.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('status.destroy', $item->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button href="" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash-alt"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                    </div>
                        <span class="text-danger">The data is empty</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

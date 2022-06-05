@extends('layouts.app')
@section('title')
    Users - Index
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

            @if (session('destroy'))
                <div class="alert alert-danger fw-bold text-danger">
                    {{ session('destroy') }}
                </div>
            @endif

            
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-auto me-auto font-weight-bold">Users - Index</div>
                        <div class="col-auto">
                            <a href="{{ route('users.create') }}" class="btn btn-dark btn-sm">
                                <i class="fa fa-plus-circle"></i> Create
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-reponsive">
                    @if (count($users) > 0)
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <th class="font-weight-bold text-center">NO</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Role</th>
                                <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $item )
                                <tr>
                                    <td class="text-center">{{ ++$key }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->status->name }}</td>
                                    <td>{{ $item->role->name }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('users.show', $item->id) }}" class="btn btn-success btn-sm">
                                            <i class="fa fa-search"></i> Show
                                        </a>
                                        <a href="{{ route('users.edit', $item->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('users.destroy', $item->id) }}" method="post" class="d-inline">
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

                    <div class="footer d-flex justify-content-center">
                        <div class="mb-1">{!! $users->links() !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

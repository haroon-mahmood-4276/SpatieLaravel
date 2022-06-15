@extends('app.layout.layout')

@section('PageCSS')
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="w-100">
                    <a class="btn btn-primary me-auto mx-1">Add</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($roles as $role)
                            <tr>
                                <th scope="row">{{ $loop->index }}</th>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <div class="w-100 d-flex justify-content-center align-items-center">
                                        <a class="btn btn-warning mx-1">Edit</a>
                                        <a class="btn btn-danger mx-1">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr class="text-center">
                                <td colspan="4" scope="row">No data found!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('PageJS')
@endsection

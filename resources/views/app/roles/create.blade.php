@extends('app.layout.layout')

@section('PageCSS')
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card">
            <form action="{{ route('roles.store') }}" method="post">

                <div class="card-header">
                    <div class="w-100">
                        <h2>Create Role</h2>
                    </div>
                </div>
                <div class="card-body">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <label for="role_name" class="form-label">Role</label>
                                <input type="text" class="form-control" id="role_name" name="role_name" aria-describedby="emailHelp" placeholder="Role name">
                                <div id="role_name_help" class="form-text">Enter role name</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="w-100 text-end">
                        <button class="btn btn-success mx-1">Save</button>
                        <a href="{{ route('roles.index') }}" class="btn btn-danger mx-1">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('PageJS')
@endsection

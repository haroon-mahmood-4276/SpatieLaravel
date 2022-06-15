@extends('app.layout.layout')

@section('PageCSS')
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card">
            <form action="{{ route('permissions.store') }}" method="post">

                <div class="card-header">
                    <div class="w-100">
                        <h2>Create Permission</h2>
                    </div>
                </div>
                <div class="card-body">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <label for="permission_name" class="form-label">Permission</label>
                                <input type="text" class="form-control" id="permission_name" name="permission_name" aria-describedby="emailHelp" placeholder="Permission name">
                                <div id="permission_name_help" class="form-text">Enter permission name</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="w-100 text-end">
                        <button class="btn btn-success mx-1">Save</button>
                        <a href="{{ route('permissions.index') }}" class="btn btn-danger mx-1">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('PageJS')
@endsection

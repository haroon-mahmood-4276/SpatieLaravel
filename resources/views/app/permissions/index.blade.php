@extends('app.layout.layout')

@section('PageCSS')
@endsection

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <div class="w-100 text-end">
                    <a href="{{ route('permissions.create') }}" class="btn btn-primary">Add</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Permissions</th>
                            <th scope="col">Guard</th>
                            @foreach ($roles as $role)
                                <th scope="col">{{ $role->name }}</th>
                            @endforeach
                            <th scope="col" class="text-center" style="width: 15%;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($permissions as $permission)
                            <tr>
                                <td style="vertical-align: middle;" scope="row">{{ $loop->index + 1 }}</td>
                                <td style="vertical-align: middle;">{{ $permission->name }}</td>
                                @foreach ($roles as $role)
                                    @if ($loop->index == 0)
                                        <td style="vertical-align: middle;">{{ $role->guard_name }}</td>
                                    @endif
                                    <td style="vertical-align: middle;">
                                        <div class="form-check" class="text-center">
                                            <input class="form-check-input" type="checkbox" value="1"
                                                id="role_{{ $role->id }}_permission_{{ $permission->id }}"
                                                onchange="assignPermissionToRole({{ $role->id }}, {{ $permission->id }})">
                                        </div>
                                    </td>
                                @endforeach
                                <td style="vertical-align: middle;">
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
    <script>
        function assignPermissionToRole(role_id, permission_id) {
            console.log('role_id => ' + role_id, 'permission_id => ' + permission_id);
        }
    </script>
@endsection

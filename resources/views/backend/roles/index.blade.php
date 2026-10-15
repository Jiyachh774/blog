@extends('layouts.backend.app')

@section('title', 'Roles Management')

@section('content')
    <div class="body flex-grow-1">
        <div class="container-lg px-4">
            <div class="row g-4 mb-4">
                <div class="col-lg-12">
                    <a href="{{ route('admin.roles.create') }}" class="btn btn-primary mb-3">
                        Create Role
                    </a>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Permissions</th>
                                <th>Users</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ ucwords(replaceUnderscores($role->name)) }}</td>
                                    <td>{{ $role->permissions_count }}</td>
                                    <td>{{ $role->users_count }}</td>
                                    <td>{{ $role->created_at }}</td>
                                    <td>{{ $role->updated_at }}</td>
                                    <td>
                                        <a href="{{ route('admin.roles.edit', $role->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('admin.roles.destroy', $role->id) }}" method="POST" style="display:inline;"
                                            onsubmit="return confirm('Are you sure you want to delete this role?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

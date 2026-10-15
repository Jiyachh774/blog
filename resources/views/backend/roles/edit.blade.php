@extends('layouts.backend.app')

@section('title', 'Edit Role')

@section('content')
    <div class="body flex-grow-1">
        <div class="container-lg px-4">

            <div class="row">
                <div class="col-lg-8">

                    <h4 class="mb-4">Edit Role</h4>

                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-4">
                                    <label for="name" class="form-label">
                                        Name
                                    </label>

                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $role->name) }}"
                                        required
                                    >

                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    Update Role
                                </button>

                                <a href="{{ route('admin.roles.index') }}"
                                   class="btn btn-secondary">
                                    Cancel
                                </a>

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection

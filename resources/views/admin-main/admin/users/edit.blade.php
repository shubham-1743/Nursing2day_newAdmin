@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Users</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf

                        <!-- User Level -->
                        <div class="mb-3">
                            <label for="user_level" class="form-label">User Level</label>
                            <select name="user_level" id="user_level" class="form-control">
                                <option value="">-- Select User Level --</option>
                                <option value="Administrator" {{ old('user_level') == 'Administrator' ? 'selected' : '' }}>Administrator</option>
                                <option value="Editor" {{ old('user_level') == 'Editor' ? 'selected' : '' }}>Editor</option>
                                <option value="Viewer" {{ old('user_level') == 'Viewer' ? 'selected' : '' }}>Viewer</option>
                            </select>
                        </div>

                        <!-- Group -->
                        <div class="mb-3">
                            <label for="group_id" class="form-label">Group</label>
                            <select name="group_id" id="group_id" class="form-control">
                                <option value="">None selected</option>
                              
                                    <option value=""></option>
                               
                            </select>
                        </div>

                        <!-- Username -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                        </div>

                        <!-- Mobile -->
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="text" name="mobile" id="mobile" class="form-control" value="{{ old('mobile') }}">
                        </div>

                        <!-- Buttons -->
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-plus"></i> Save
                        </button>
                        <a href="{{ url('admin/users') }}" class="btn btn-danger">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush

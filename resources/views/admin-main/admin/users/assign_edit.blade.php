@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Level Users</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf

                        

                        <div class="mb-3">
                            <label for="username" class="form-label">Leval User</label>
                            <input type="text" name="leval_name"  class="form-control" placeholder="Leval User" value="{{ old('username') }}">
                        </div>

                        

                        <!-- Buttons -->
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-refresh"></i> Update
                        </button>
                        <a href="{{ url('users/assign-rights') }}" class="btn btn-danger">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

@endpush

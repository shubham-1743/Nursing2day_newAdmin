@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Subjects</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Group Name -->
                        <div class="mb-3">
                            <label for="group_id" class="form-label">Group Name</label>
                            <select name="group_id" id="group_id" class="form-control">
                                <option value="">None selected</option>
                               
                            </select>
                        </div>

                        <!-- Subject Name -->
                        <div class="mb-3">
                            <label for="subject_name" class="form-label">Subject Name</label>
                            <input type="text" name="subject_name" id="subject_name" class="form-control"
                                   placeholder="Subject Name" value="{{ old('subject_name') }}">
                        </div>

                        <!-- Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>

                        <!-- Buttons -->
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-plus"></i> Save
                        </button>
                        <a href="{{ url('admin/subjects') }}" class="btn btn-danger">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
@endpush

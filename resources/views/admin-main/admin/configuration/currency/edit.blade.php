@extends('admin-main.layouts.default')
@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Currency</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Course Name -->
                        <div class="mb-3">
                            <label for="course_name" class="form-label">Currency Name</label>
                            <input type="text" name="currency_name" id="currency_name" class="form-control" placeholder="currency_name" value="{{ old('currency_name') }}">
                        </div>

                        <!-- Sort Order -->
                        <div class="mb-3">
                            <label for="sort_order" class="form-label">Sort Name</label>
                            <input type="text" name="short_name"  class="form-control" placeholder="Sort Order" value="{{ old('short_name') }}">
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Currency</label>
                            <input type="file" name="upload_currency" id="image" class="form-control">
                        </div>

                       

                        <!-- Buttons -->
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-plus"></i> Save
                        </button>
                        <a href="{{ url('admin/currency') }}" class="btn btn-danger">Close</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush

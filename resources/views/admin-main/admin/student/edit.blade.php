@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Students</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="email" class="form-label">Email *</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Name *</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address *</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}" required>
                </div>

                <div class="mb-3">
                    <label for="alternate_number" class="form-label">Alternate Number</label>
                    <input type="text" name="alternate_number" id="alternate_number" class="form-control" value="{{ old('alternate_number') }}">
                </div>

                <div class="mb-3">
                    <label for="expiry_days" class="form-label">Expiry Days</label>
                    <input type="number" name="expiry_days" id="expiry_days" class="form-control" value="0">
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Upload Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control">
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="group_id" class="form-label">Group *</label>
                    <select name="group_id" id="group_id" class="form-control" required>
                        <option value="">None selected</option>
                        {{-- Add group options dynamically --}}
                    </select>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password *</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone *</label>
                    <input type="number" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
                </div>

                <div class="mb-3">
                    <label for="enrolment_number" class="form-label">Enrolment Number</label>
                    <input type="text" name="enrolment_number" id="enrolment_number" class="form-control" value="{{ old('enrolment_number') }}">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="active" selected>Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="mb-3">
            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Save</button>
            <a href="{{ url('admin/students') }}" class="btn btn-danger">Close</a>
        </div>
    </form>
</div>

@endsection

@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">

    <h4 class="mb-3">Import/Export Students</h4>

    <div class="mb-4">
        <a href="{{ url('admin/students') }}" class="btn btn-info btn-sm">
            <i class="fa fa-arrow-left"></i> Back To Students
        </a>
        <a href="javascript:void(0);" class="btn btn-success btn-sm">
            <i class="fa fa-upload"></i> Export Students
        </a>
    </div>

    <form action="" id="post_req" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3 align-items-center">
            <label class="col-sm-2 col-form-label">Select File</label>
            <div class="col-sm-4">
                <input type="file" name="" id="IestudentFile" required class="form-control-file">
            </div>
            <div class="col-sm-6">
                <a href="#" class="text-danger">Click here to download excel file format</a>
            </div>
        </div>

        <div class="row mb-4 align-items-center">
            <label class="col-sm-2 col-form-label">Group</label>
            <div class="col-sm-4">
                <select name="group_id" class="form-control" id="group_id">
                    <option value="">None selected</option>
                </select>
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-success">
                <i class="fa fa-download"></i> Import Students
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')


{{-- <script>
    $(document).ready(function () {
        $('.multiselectgrp').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            maxHeight: 300,
            buttonWidth: '100%',
            nonSelectedText: 'None selected'
        });
    });
</script> --}}
@endpush

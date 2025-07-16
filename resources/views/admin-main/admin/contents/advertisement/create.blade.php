@extends('admin-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Advertisement</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form enctype="multipart/form-data">

                        <!-- Advertisement Name -->
                        <div class="mb-3">
                            <label class="form-label">Advertisement Name</label>
                            <input type="text" class="form-control" placeholder="Advertisement Name">
                        </div>

                        <!-- Ordering -->
                        <div class="mb-3">
                            <label class="form-label">Ordering</label>
                            <input type="number" class="form-control" placeholder="Ordering">
                        </div>

                        <!-- URL -->
                        <div class="mb-3">
                            <label class="form-label">URL</label>
                            <input type="text" class="form-control" placeholder="URL">
                        </div>

                        <!-- URL Type -->
                        <div class="mb-3">
                            <label class="form-label d-block">URL Type</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="url_type" value="internal" checked>
                                <label class="form-check-label">Internal</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="url_type" value="external">
                                <label class="form-check-label">External</label>
                            </div>
                        </div>

                        <!-- URL Target -->
                        <div class="mb-3">
                            <label class="form-label d-block">URL Target</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="target" value="_self" checked>
                                <label class="form-check-label">_self</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="target" value="_blank">
                                <label class="form-check-label">_blank</label>
                            </div>
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-3">
                            <label class="form-label">Upload Image (350x260)</label>
                            <input type="file" class="form-control">
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-plus"></i> Save
                            </button>
                            <a href="{{ url('admin/Advertisements') }}" class="btn btn-danger">
                                <i class="fa fa-times"></i> Close
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

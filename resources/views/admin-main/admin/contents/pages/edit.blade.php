@extends('admin-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Pages</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf

                        <!-- Parent Id -->
                        <div class="mb-3">
                            <label for="parent_id" class="form-label">Parent Id</label>
                            <select name="parent_id" class="form-select">
                                <option value="0">Root</option>
                               
                            </select>
                        </div>

                        <!-- Link Name & Icon -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Link Name</label>
                                <input type="text" name="link_name" class="form-control" placeholder="Link Name" value="{{ old('link_name') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Icon</label>
                                <input type="text" name="icon" class="form-control" placeholder="Icon Name" value="{{ old('icon') }}">
                            </div>
                        </div>

                        <!-- Sort Order -->
                        <div class="mb-3">
                            <label class="form-label">Sort Order</label>
                            <input type="number" name="sort_order" class="form-control" placeholder="Sort order" value="{{ old('sort_order') }}">
                        </div>

                        <!-- Page Type -->
                        <div class="mb-3">
                            <label class="form-label d-block">Page Type</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="page_type" value="internal" checked>
                                <label class="form-check-label">Internal</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="page_type" value="page">
                                <label class="form-check-label">Page</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="page_type" value="external">
                                <label class="form-check-label">External</label>
                            </div>
                        </div>

                        <!-- Page Name & URL -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Page Name</label>
                                <input type="text" name="page_name" class="form-control" placeholder="Page Name" value="{{ old('page_name') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Page URL</label>
                                <input type="text" name="page_url" class="form-control" placeholder="Page URL" value="{{ old('page_url') }}">
                            </div>
                        </div>

                        <!-- Page Content -->
                        <div class="mb-3">
                            <label class="form-label">Page Content</label>
                            <textarea name="page_content" class="form-control" rows="4" placeholder="Page Content">{{ old('page_content') }}</textarea>
                        </div>

                        <!-- Load Editor -->
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary">Load Editor</button>
                        </div>

                        <!-- Meta Info -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Meta Title</label>
                                <textarea name="meta_title" class="form-control" rows="2">{{ old('meta_title') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Meta Keyword</label>
                                <textarea name="meta_keyword" class="form-control" rows="2">{{ old('meta_keyword') }}</textarea>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Meta Content</label>
                            <textarea name="meta_content" class="form-control" rows="3">{{ old('meta_content') }}</textarea>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-plus"></i> Save
                            </button>
                            <a href="{{ url('admin/pages') }}" class="btn btn-danger">Close</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

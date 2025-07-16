@extends('admin-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Section</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Section Name -->
                        <div class="mb-3">
                            <label class="form-label">Sections</label>
                            <input type="text" name="section_name" class="form-control" placeholder="section Name" value="{{ old('section_name') }}">
                        </div>

                        <!-- Heading -->
                        <div class="mb-3">
                            <label class="form-label">Heading</label>
                            <input type="text" name="heading" class="form-control" placeholder="Heading" value="{{ old('heading') }}">
                        </div>

                        <!-- Content -->
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="content" class="form-control" rows="5" placeholder="Content">{{ old('content') }}</textarea>
                        </div>

                        <!-- Load Editor Button -->
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary">Load Editor</button>
                        </div>

                        <!-- Link -->
                        <div class="mb-3">
                            <label class="form-label">Link</label>
                            <input type="text" name="link" class="form-control" placeholder="Link" value="{{ old('link') }}">
                        </div>

                        <!-- Show Content Radio -->
                        <div class="mb-3">
                            <label class="form-label d-block">Show content</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="show_content" value="1" {{ old('show_content', '1') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="show_content" value="0" {{ old('show_content') == '0' ? 'checked' : '' }}>
                                <label class="form-check-label">No</label>
                            </div>
                        </div>

                        <!-- Show Image Radio -->
                        <div class="mb-3">
                            <label class="form-label d-block">Show image</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="show_image" value="1" {{ old('show_image', '1') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="show_image" value="0" {{ old('show_image') == '0' ? 'checked' : '' }}>
                                <label class="form-check-label">No</label>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-2 mt-3">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-refresh"></i> Update
                            </button>
                            <a href="{{ url('admin/Homesections') }}" class="btn btn-danger">
                                <i class="fa fa-times"></i> Cancel
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('admin-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Slide</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Slide Name -->
                        <div class="mb-3">
                            <label class="form-label">Slide Name</label>
                            <input type="text" name="slide_name" class="form-control" placeholder="Slide Name" value="{{ old('slide_name') }}">
                        </div>

                        <!-- Heading -->
                        <div class="mb-3">
                            <label class="form-label">Heading</label>
                            <input type="text" name="heading" class="form-control" placeholder="Heading" value="{{ old('heading') }}">
                        </div>

                        <!-- Content -->
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea name="content" class="form-control" rows="4" placeholder="Content">{{ old('content') }}</textarea>
                        </div>

                        <!-- Load Editor -->
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary">Load Editor</button>
                        </div>

                        <!-- Ordering -->
                        <div class="mb-3">
                            <label class="form-label">Ordering</label>
                            <input type="number" name="ordering" class="form-control" placeholder="Ordering" value="{{ old('ordering') }}">
                        </div>

                        <!-- Slide Upload -->
                        <div class="mb-3">
                            <label class="form-label">Upload Slide (1350×550)</label>
                            <input type="file" name="slide_image" class="form-control">
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-refresh"></i> Update
                            </button>
                            <a href="{{ url('admin/Slides') }}" class="btn btn-danger">
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

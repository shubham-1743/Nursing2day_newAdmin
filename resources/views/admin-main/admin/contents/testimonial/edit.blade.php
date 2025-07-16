@extends('admin-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Testimonials</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Image Title -->
                        <div class="mb-3">
                            <label for="image_title" class="form-label">Name</label>
                            <input type="text" name="name"  class="form-control" placeholder="name">
                        </div>
                        <!-- Image Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" rows="3" class="form-control" placeholder="Enter description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Rating</label>
                            <input type="text" name="rating"  class="form-control" placeholder="rating">
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-3">
                            <label for="image_file" class="form-label">Upload Photo (150*150)</label>
                            <input type="file" name="photo" id="image_file" class="form-control">
                        </div>

                        

                        <!-- Action Buttons -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-refresh"></i> Update
                            </button>
                            <a href="{{ url('admin/Testimonials') }}" class="btn btn-danger"><i class="fa fa-times"></i> Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

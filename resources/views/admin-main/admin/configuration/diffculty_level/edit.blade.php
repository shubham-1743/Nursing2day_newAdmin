@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Difficulty Level</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <form action="" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="" id="" class="form-control" placeholder=" name for the Diffculty" required>
        </div>

        

        <div class="mb-3">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-plus"></i> Save
            </button>
            <a href="{{ url('admin/diffcultys') }}" class="btn btn-danger"><i class="fa fa-times"></i> Close</a>
        </div>
    </form>
</div>

@endsection

@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Menu Names</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <form action="" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Model Name</label>
            <input type="text" class="form-control" name="" id=""  >
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Page Name</label>
            <input type="text" class="form-control" name="" id=""  >
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Icon</label>
            <input type="text" class="form-control" name="" id=""  >
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Ordering</label>
            <input type="number" class="form-control" name="" id=""  >
        </div>

        

        <div class="mb-3">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-plus"></i> Save
            </button>
            <a href="{{ url('admin/Menunames') }}" class="btn btn-danger"><i class="fa fa-times"></i> Close</a>
        </div>
    </form>
</div>

@endsection

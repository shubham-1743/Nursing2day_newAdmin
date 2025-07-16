@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>Add Question Language</h3>

    <form class="mt-4">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Name">
            </div>
        </div><br>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">True</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Language True">
            </div>
        </div><br>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">False</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Language False">
            </div>
        </div><br>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-plus"></i> Save
            </button>
            <a href="{{ url('admin/Languages') }}" class="btn btn-danger"><i class="fa fa-times"></i> Close</a>
        </div>
    </form>
</div>
@endsection

@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Topics</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf

                        <!-- Subject Dropdown -->
                        <div class="mb-3">
                            <label for="subject_id" class="form-label">Subject</label>
                            <select name="subject_id" id="subject_id" class="form-control">
                                <option value="">Please Select</option>
                               
                            </select>
                        </div>

                        <!-- Topic Name -->
                        <div class="mb-3">
                            <label for="topic_name" class="form-label">Topic Name</label>
                            <input type="text" name="topic_name" id="topic_name" class="form-control"
                                   placeholder="Topic Name" value="{{ old('topic_name') }}">
                        </div>

                        <!-- Buttons -->
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-plus"></i> Save
                        </button>
                        <a href="{{ url('admin/topices') }}" class="btn btn-danger">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

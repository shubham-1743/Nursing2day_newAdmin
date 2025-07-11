@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Sub Topics</a></li>
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

                        <!-- Topic Dropdown -->
                        <div class="mb-3">
                            <label for="topic_id" class="form-label">Topic</label>
                            <select name="topic_id" id="topic_id" class="form-control">
                                <option value="">Please Select</option>
                              
                            </select>
                        </div>

                        <!-- Sub Topic Name -->
                        <div class="mb-3">
                            <label for="sub_topic_name" class="form-label">Sub Topic Name</label>
                            <input type="text" name="sub_topic_name" id="sub_topic_name" class="form-control"
                                   placeholder="Sub Topic Name" value="{{ old('sub_topic_name') }}">
                        </div>

                        <!-- Buttons -->
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-plus"></i> Save
                        </button>
                        <a href="{{ url('admin/subtopices') }}" class="btn btn-danger">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

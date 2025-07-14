@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Live URL</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf

                        <!-- Package Dropdown -->
                        <div class="mb-3">
                            <label for="package_id" class="form-label">Package</label>
                            <select name="package_id" id="package_id" class="form-control">
                                <option value="">1 Year Prime Membership 2020 (Not Available Now)</option>
                                <!-- Add more options dynamically -->
                            </select>
                        </div>

                        <!-- Subject -->
                        <div class="mb-3">
                            <label for="subject_id" class="form-label">Subject</label>
                            <select name="subject_id" id="subject_id" class="form-control">
                                <option value="">Please Select</option>
                            </select>
                        </div>

                        <!-- Topic -->
                        <div class="mb-3">
                            <label for="topic_id" class="form-label">Topic</label>
                            <select name="topic_id" id="topic_id" class="form-control">
                                <option value="">Please Select</option>
                            </select>
                        </div>

                        <!-- Sub Topic -->
                        <div class="mb-3">
                            <label for="sub_topic_id" class="form-label">Sub Topic</label>
                            <select name="sub_topic_id" id="sub_topic_id" class="form-control">
                                <option value="">Please Select</option>
                            </select>
                        </div>

                        <!-- Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <textarea name="title" id="title" class="form-control" placeholder="Title"></textarea>
                            <button type="button" class="tinybtn mt-2" onclick="javascript:setup();">Load Editor</button>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Description"></textarea>
                            <button type="button" class="tinybtn mt-2" onclick="javascript:setup();">Load Editor</button>
                        </div>

                        <!-- Link -->
                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" name="link" id="link" class="form-control" placeholder="Live url">
                        </div>

                        <!-- Buttons -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Save</button>
                            <a href="{{ url('admin/lives') }}" class="btn btn-danger">Close</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

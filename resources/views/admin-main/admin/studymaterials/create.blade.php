@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">StudyMaterial</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <!-- Choose Photo -->
                        <div class="mb-3">
                            <label for="photo" class="form-label">Choose Photo</label>
                            <input type="file" name="photo" class="form-control" id="photo">
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
                            <textarea name="title" id="title" class="form-control"></textarea>
                            <button type="button" class="tinybtn" onclick="javascript:setup();">Load Editor</button>
                        </div>
                    
                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                            <button type="button" class="tinybtn" onclick="javascript:setup();">Load Editor</button>
                        </div>
                    
                        <!-- Video URL -->
                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" name="link" id="link" class="form-control" placeholder="Video url">
                        </div>
                    
                        <!-- Upload PDF -->
                        <div class="mb-3">
                            <label for="pdf" class="form-label">Upload PDF</label>
                            <input type="file" name="pdf" id="pdf" class="form-control">
                        </div>
                    
                        <!-- Buttons -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Save</button>
                            <a href="{{ url('admin/studymaterials') }}" class="btn btn-danger">Close</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

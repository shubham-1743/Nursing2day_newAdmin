@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add CustomNotifications

        </a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <!-- Select Group -->
                        <div class="mb-3">
                            <label for="group_id" class="form-label">Select Group</label>
                            <select name="group_id" id="group_id" class="form-control">
                                <option value="">None selected</option>
                            </select>
                        </div>
                    
                        <!-- Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <textarea name="title" id="title" class="form-control" placeholder="Title"></textarea>
                        </div>
                    
                        <!-- URL -->
                        <div class="mb-3">
                            <label for="url" class="form-label">URL</label>
                            <input type="text" name="url" id="url" class="form-control" placeholder="URL">
                        </div>
                    
                        <!-- Choose Photo -->
                        <div class="mb-3">
                            <label for="photo" class="form-label">Choose Photo</label>
                            <input type="file" name="photo" id="photo" class="form-control">
                        </div>
                    
                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Description" rows="5"></textarea>
                            <button type="button" class="tinybtn mt-2" onclick="javascript:setup();">Load Editor</button>
                        </div>
                    
                        <!-- Buttons -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Save</button>
                            <a href="{{ url('admin/CustomNotifications') }}" class="btn btn-danger">Close</a>
                        </div>
                    </form>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

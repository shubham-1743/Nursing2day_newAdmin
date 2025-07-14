@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)"> Edit CurrentAffairs URL</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <!-- CurrentAffairs URL Title & Page URL -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="url_title" class="form-label">CurrentAffairs Url Title</label>
                                <input type="text" name="url_title" id="url_title" class="form-control" placeholder="CurrentAffairs Url Title">
                            </div>
                            <div class="col-md-6">
                                <label for="page_url" class="form-label">Page Url</label>
                                <input type="text" name="page_url" id="page_url" class="form-control" placeholder="Page Url">
                            </div>
                        </div>
                    
                        <!-- Photo Upload -->
                        <div class="mb-3">
                            <label for="photo" class="form-label">Choose Photo</label>
                            <input type="file" name="photo" id="photo" class="form-control">
                        </div>
                    
                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">CurrentAffairs Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="CurrentAffairs Url Description" rows="4"></textarea>
                            <button type="button" class="tinybtn mt-2" onclick="javascript:setup();">Load Editor</button>
                        </div>
                    
                        <!-- Meta Fields -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="Meta Title">
                            </div>
                            <div class="col-md-4">
                                <label for="meta_keyword" class="form-label">Meta Keyword</label>
                                <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" placeholder="Meta Keyword">
                            </div>
                            <div class="col-md-4">
                                <label for="meta_content" class="form-label">Meta Content</label>
                                <input type="text" name="meta_content" id="meta_content" class="form-control" placeholder="Meta Content">
                            </div>
                        </div>
                    
                        <!-- Buttons -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Save</button>
                            <a href="{{ url('admin/current_affairs') }}" class="btn btn-danger">Close</a>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

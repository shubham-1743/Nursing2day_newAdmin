@extends('admin-main.layouts.default')

@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Video</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Groups -->
        <div class="mb-3">
            <label for="groups" class="form-label">Groups</label>
            <select name="groups" id="groups" class="form-control" >
                <option value="" disabled selected>None selected</option>
                
            </select>
        </div>

        <!-- Subject -->
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <select name="subject" id="subject" class="form-control">
                <option value="">Please Select</option>
            </select>
        </div>

        <!-- Topic -->
        <div class="mb-3">
            <label for="topic" class="form-label">Topic</label>
            <select name="topic" id="topic" class="form-control">
                <option value="">Please Select</option>
             
            </select>
        </div>

        <!-- Sub Topic -->
        <div class="mb-3">
            <label for="sub_topic" class="form-label">Sub Topic</label>
            <select name="sub_topic" id="sub_topic" class="form-control">
                <option value="">Please Select</option>
      
            </select>
        </div>

        <div class="form-group">
            <label for="imageOption" class="col-sm-2 control-label">
                <small>Choose Photo</small>
            </label>
        
            <div class="col-sm-10">
                <select id="imageOption" class="form-control">
                    <option value="upload">Upload New Image</option>
                    <option value="select">Select Existing Image</option>
                </select>
            </div>
        </div>

        <div id="uploadImageDiv" class="form-group" style="display: none;">
            <label for="photo-input" class="col-sm-2 control-label">
                <small>Upload Photo</small>
            </label>
            <div class="col-sm-10">
                <div class="input file"><label for="photo-input">Photo</label><input type="file" name="data[Video][photo]" class="form-control" id="photo-input"/></div>    </div>
        </div>
        
        <!-- Select Existing Image -->
        <div id="selectImageDiv" class="form-group" style="display: none;">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imageModal">
                Select Image
            </button>
            <input type="text" id="selectedImage" name="photo" readonly>
            <img id="imagePreview" src="" alt="Selected Image" style="max-width: 200px; display: none; margin-top: 20px;">
        </div>

        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel">Select an Image</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row" id="imageContainer">
                            <!-- Images will be loaded here dynamically via AJAX -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="loadMoreImages">Load More</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image Upload Options -->
        <div id="uploadImageDiv" class="form-group" style="">
            <label for="photo-input" class="col-sm-2 control-label">
                <small>Upload Photo</small>
            </label>
            <div class="col-sm-10">
                <div class="input file"><label for="photo-input">Photo</label><input type="file" name="data[Video][photo]" class="form-control" id="photo-input"></div>    </div>
        </div>

        <!-- Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <textarea name="data[Video][title]" class="form-control" placeholder="Title" cols="30" rows="6" id="VideoTitle"></textarea><br/><button onclick="javascript:setup();" type="button" class="tinybtn">Load Editor</button>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="data[Video][description]" class="form-control" placeholder="Description" cols="30" rows="6" id="VideoDescription"></textarea><br/><button onclick="javascript:setup();" type="button" class="tinybtn">Load Editor</button>
        </div>    

        <!-- Video Type -->
        <div class="mb-3">
            <label for="video_type" class="form-label">Video Type</label>
            <select name="video_type" id="video_type" class="form-control" required>
                <option value="">Please Select</option>
                <option value="youtube">YouTube</option>
                <option value="vimeo">Vimeo</option>
                <option value="uploaded">Uploaded Video</option>
            </select>
        </div>

        <!-- Video URL -->
        <div class="mb-3">
            <label for="video_url" class="form-label">Link</label>
            <input type="url" name="video_url" id="video_url" class="form-control" placeholder="Enter video link (YouTube/Vimeo)">
        </div>

        <!-- Video Download URL -->
        <div class="mb-3">
            <label for="video_download_url" class="form-label">Video Download URL</label>
            <input type="url" name="video_download_url" id="video_download_url" class="form-control" placeholder="Direct download link (if available)">
        </div>

        <!-- Top Video Checkbox -->
        <div class="form-check mb-2">
            <input type="checkbox" class="form-check-input" name="top_video" id="top_video">
            <label class="form-check-label" for="top_video">Top Videos</label>
        </div>

        <!-- FAQ Video Checkbox -->
        <div class="form-check mb-2">
            <input type="checkbox" class="form-check-input" name="faq_video" id="faq_video">
            <label class="form-check-label" for="faq_video">FAQ Videos</label>
        </div>

        <!-- Chat Label -->
        <div class="mb-3">
            <label for="chat_label" class="form-label">Chat Label</label>
            <input type="text" name="chat_label" id="chat_label" class="form-control" placeholder="Chat Label">
        </div>

        <!-- Show Chat Button Checkbox -->
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" name="show_chat_button" id="show_chat_button">
            <label class="form-check-label" for="show_chat_button">Show Chat Button</label>
        </div>

        <!-- Buttons -->
        <div class="mb-3">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
            <a href="{{ url('admin/videos') }}" class="btn btn-danger"><i class="fa fa-times"></i> Close</a>
        </div>
    </form>
</div>

@endsection

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
            <label for="groups">Groups</label>
            <select name="groups" id="groups" class="form-control">
                <option value="" disabled selected>None selected</option>
            </select>
        </div>

        <!-- Subject -->
        <div class="mb-3">
            <label for="subject">Subject</label>
            <select name="subject" id="subject" class="form-control">
                <option value="">Please Select</option>
            </select>
        </div>

        <!-- Topic -->
        <div class="mb-3">
            <label for="topic">Topic</label>
            <select name="topic" id="topic" class="form-control">
                <option value="">Please Select</option>
            </select>
        </div>

        <!-- Sub Topic -->
        <div class="mb-3">
            <label for="sub_topic">Sub Topic</label>
            <select name="sub_topic" id="sub_topic" class="form-control">
                <option value="">Please Select</option>
            </select>
        </div>
        <!-- Choose Image Option -->
        <div class="mb-3">
            <label for="imageOption">Choose Photo</label>
            <select id="imageOption" class="form-control">
                <option value="upload">Upload New Image</option>
                <option value="select">Select Existing Image</option>
            </select>
        </div>

        <!-- Upload New Image -->
        <div id="uploadImageDiv" class="mb-3" style="display: none;">
            <label for="photo-input">Upload Photo</label>
            <input type="file" name="photo_upload" class="form-control" id="photo-input">
        </div>

        <!-- Select Existing Image -->
        <div id="selectImageDiv" class="mb-3" style="display: none;">
            <label>Select Existing Photo</label><br>
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#imageModal">
                Select Image
            </button>

            <input type="text" id="selectedImage" name="photo" class="form-control mt-2" readonly>

            <img id="imagePreview" src="" alt="Selected Image" class="img-thumbnail mt-2" style="max-width: 200px; display: none;">
        </div>
        <!-- ===================== MODAL FOR IMAGE SELECTION ===================== -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Select an Image</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="row" id="imageContainer">
                            <!-- Images will be dynamically loaded here -->
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>




        <!-- Title -->
        <div class="mb-3">
            <label for="VideoTitle">Title</label>
            <textarea name="data[Video][title]" class="form-control" rows="4"></textarea>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="VideoDescription">Description</label>
            <textarea name="data[Video][description]" class="form-control" rows="4"></textarea>
        </div>

        <!-- Video Type -->
        <div class="mb-3">
            <label for="video_type">Video Type</label>
            <select name="video_type" id="video_type" class="form-control">
                <option value="">Please Select</option>
                <option value="others">Others(YouTube)</option>
                <option value="zoom">Zoom</option>
                <option value="Existing">Existing</option>
            </select>
           
        </div>

        <!-- Video Link -->
        <div class="mb-3">
            <label for="video_url">Video Link</label>
            <input type="url" name="video_url" id="video_url" class="form-control">
        </div>

        <!-- Download Link -->
        <div class="mb-3">
            <label for="video_download_url">Download Link (Optional)</label>
            <input type="url" name="video_download_url" id="video_download_url" class="form-control">
        </div>

        <!-- Checkboxes -->
        <div class="form-check mb-2">
            <input type="checkbox" class="form-check-input" name="top_video" id="top_video">
            <label class="form-check-label" for="top_video">Top Video</label>
        </div>
        <div class="form-check mb-2">
            <input type="checkbox" class="form-check-input" name="faq_video" id="faq_video">
            <label class="form-check-label" for="faq_video">FAQ Video</label>
        </div>

        <!-- Chat Label -->
        <div class="mb-3">
            <label for="chat_label">Chat Label</label>
            <input type="text" name="chat_label" id="chat_label" class="form-control">
        </div>

        <!-- Show Chat -->
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" name="show_chat_button" id="show_chat_button">
            <label class="form-check-label" for="show_chat_button">Show Chat Button</label>
        </div>

        <!-- Submit Buttons -->
        <div class="mb-3">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
            <a href="{{ url('admin/videos') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancel</a>
        </div>
    </form>
</div>

@endsection



@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {

        // Toggle between Upload and Select image
        $('#imageOption').on('change', function() {
            const selected = $(this).val();
            $('#uploadImageDiv').toggle(selected === 'upload');
            $('#selectImageDiv').toggle(selected === 'select');
        }).trigger('change'); // Trigger on page load


        const imageUrls = [
            "/images/avatar/pic2.jpg"
            , "/images/avatar/pic3.jpg"
            , "/images/avatar/pic4.jpg"
        ];

        // Load images into modal
        $('#imageModal').on('show.bs.modal', function() {
            const container = $('#imageContainer');
            container.empty(); // clear before load

            imageUrls.forEach(function(url) {
                const imgHtml = `
                    <div class="col-md-3 mb-3">
                        <img src="${url}" class="img-fluid img-thumbnail select-image" data-image-url="${url}" style="cursor:pointer;">
                    </div>
                `;
                container.append(imgHtml);
            });
        });

        // Handle image click
        $(document).on('click', '.select-image', function() {
            const url = $(this).data('image-url');
            $('#selectedImage').val(url);
            $('#imagePreview').attr('src', url).show();
            $('#imageModal').modal('hide');
        });

    });

</script>

@endpush

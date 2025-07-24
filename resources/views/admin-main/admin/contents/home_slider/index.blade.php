@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>Slides
    </h3>

    <!-- Top action buttons -->
    <div class="mb-3">
        <a href="{{url('admin/Slides/create')}}" class="btn btn-success btn-sm">+ Add New Slid
        </a>
        <a href="javascript:void(0);" onclick="check_perform_sedit()" class="btn btn-warning btn-sm">Edit</a>
        <a href="" onclick="event.preventDefault(); document.getElementById('delete-form').submit();" class="btn btn-danger btn-sm">
            Delete
        </a>

        <form id="delete-form" action="" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </div>


    <!-- Top search -->
    <div class="mb-2 d-flex">
        <input type="text" class="form-control w-25" placeholder="Search">
        <button class="btn btn-success ms-2"><i class="fa fa-search"></i></button>
    </div>

    <!-- Group table -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>#</th>
                            <th>Slide Name</th>
                            <th>Ordering</th>
                            <th>Satus</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>NORCET_2023</td>
                            <td>4</td>
                            <td>
                                <aspan class="badge badge-success light border-0">Active</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a class="dropdown-item text-success" data-bs-toggle="modal" data-bs-target="#viewmodel">
                                            <i class="fa fa-arrows-alt"></i> View
                                        </a>
                                        <a class="dropdown-item text-success" data-bs-toggle="modal" data-bs-target="#updatePhotoModal">
                                            <i class="fa fa-photo"></i> Change Photo
                                        </a>
                                        <a class="dropdown-item text-success" href="{{ url('admin/Slides/{id}/edit') }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a class="dropdown-item text-success" href="javascript:void(0);">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>

                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bottom search -->
    <div class="mt-3 d-flex">
        <input type="text" class="form-control w-25" placeholder="Search">
        <button class="btn btn-success ms-2"><i class="fa fa-search"></i></button>
    </div>

    <!-- ViewModal -->
    <div class="modal fade" id="viewmodel" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header bg-light">
                    <h5 class="modal-title fw-bold" id="viewLabel">View Slides</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">

                    <!-- Optional subtitle -->
                    <p class="text-muted mb-2">
                        NORCET 2023 NEW BATCH सेमिनार<br>
                        रजिस्ट्रेशन शुरू 📞 +91-9358187266, +91-9529488883 | 13 & 14 JULY दोपहर 2 बजे
                    </p>

                    <!-- Images in one row -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('images/avatar/pic1.jpg') }}" alt="Slide 1" class="img-fluid rounded shadow-sm w-100" style="height: auto;">
                        </div>
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('images/avatar/pic2.jpg') }}" alt="Slide 2" class="img-fluid rounded shadow-sm w-100" style="height: auto;">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Modal: Update Photo -->
<div class="modal fade" id="updatePhotoModal" tabindex="-1" role="dialog" aria-labelledby="updatePhotoLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header border-bottom">
                <h5 class="modal-title" id="updatePhotoLabel">Update Photo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Body -->
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST') 

                <div class="modal-body text-center">
                    <label class="mb-2">Upload Slide <small>(1350×550)</small></label><br>
                    <input type="file" name="photo" accept="image/*" required>
                </div>

                <!-- Footer -->
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-refresh"></i> Update
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <i class="fa fa-times"></i> Cancel
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>


</div>
@endsection
@push('scripts')
<!-- jQuery -->

@endpush


@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>Testimonials
    </h3>

    <!-- Top action buttons -->
    <div class="mb-3">
        <a href="{{url('admin/Testimonials/create')}}" class="btn btn-success btn-sm">+ Add New Testimonials
        </a>
        <a href="javascript:void(0);" onclick="check_perform_sedit()" class="btn btn-warning btn-sm">Edit</a>
        <a href=""
           onclick="event.preventDefault(); document.getElementById('delete-form').submit();"
           class="btn btn-danger btn-sm">
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
                            <th>Name</th>
                            <th>Description</th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th>photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>Rohit</td>
                            <td>This website helped me prepare extremely well for my exams. Highly recommended !</td>
                            <td>5</td>
                            <td><aspan class="badge badge-success light border-0">Active</span></td>
                            <td><img src="{{ asset('images/avatar/pic1.jpg') }}" alt="photo" style="height: 70px; width: 70px;"></td>
                           
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle"
                                            type="button"
                                            id="dropdownMenuButton"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"> 
                                        <a class="dropdown-item text-success" data-bs-toggle="modal" data-bs-target="#updatePhotoModal">
                                            <i class="fa fa-photo"></i> Change Photo
                                        </a>
                                        <a class="dropdown-item text-success" href="{{ url('admin/Testimonials/{id}/edit') }}">
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

    <!-- Bottom search -->
    <div class="mt-3 d-flex">
        <input type="text" class="form-control w-25" placeholder="Search">
        <button class="btn btn-success ms-2"><i class="fa fa-search"></i></button>
    </div>
</div>
@endsection
@push('scripts')

@endpush


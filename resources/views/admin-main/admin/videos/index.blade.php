
@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>Video
    </h3>

    <!-- Top action buttons -->
    <div class="mb-3">
        <a href="{{url('admin/videos/create')}}" class="btn btn-success btn-sm">+ Add New Video
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
                            <th>Title</th>
                            <th>Subject</th>
                            <th>Topic</th>
                            <th>Stopic</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>14 July !! Live Class -3 !! NEET/ CUET B.Sc. Nursing Entrance 2025	</td>
                            <td>NEET/ CUET B.Sc. Nursing Entrance	</td>
                            <td>NEET/ CUET B.Sc. Nursing Entrance 2025	</td>
                            <td>NEET/ CUET B.Sc. Nursing Entrance 2025	</td>
                            <td>https://youtu.be/xagRAmNXFBs	
                            </td>
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
                                        <a class="dropdown-item btn-success" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#VideoViewModal">
                                            <i class="fa fa-arrows-alt"></i>View
                                        </a>
                                        <a class="dropdown-item btn-success" href="{{ url('admin/videos/{id}/edit') }}">
                                            <i class="fa fa-edit"></i>Edit
                                        </a>
                                        <a class="dropdown-item btn-success" href="javascript:void(0);">
                                            <i class="fa fa-trash"></i>Delete
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
    <!-- Video View Modal -->
    <div class="modal fade" id="VideoViewModal" tabindex="-1" aria-labelledby="VideoViewModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="VideoViewModal">Video Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">


                    <!-- Right Column: Question Info -->
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Tile</th>
                                    <td>24 July !! Live Class -3 !! NEET/ CUET B.Sc. Nursing Entrance 2025</td>
                                </tr>
                                <tr>
                                    <th>Groups</th>
                                    <td>B. Sc. Nursing 4th Year Students ,MAD GURU'S ,NURSING EXAM</td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <td>NEET/ CUET B.Sc. Nursing Entrance</td>
                                </tr>
                                <tr>
                                    <th>Topic</th>
                                    <td>YODDHA TEST SERIES PAPER - 03</td>
                                </tr>
                                <tr>
                                    <th>Sub Topic</th>
                                    <td>
                                        NEET/ CUET B.Sc. Nursing Entrance 2025
                                    </td>
                                </tr>
                                <tr>
                                    <th>Link</th>
                                    <td>https://youtu.be/rV6OdaNsQoU</td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td>24 July !! Live Class -3 !! NEET/ CUET B.Sc. Nursing Entrance 2025</td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush


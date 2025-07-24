
@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>Study Material</h3>

    <!-- Top action buttons -->
    <div class="mb-3">
        <a href="{{url('admin/studymaterials/create')}}" class="btn btn-success btn-sm">+ Add New Study-Material</a>
        <a href="" class="btn btn-warning btn-sm">Edit</a>
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
   

    <!-- Group table -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>#</th>
                            <th>Photo</th>
                            <th>PDF</th>
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
                            <td><img src="{{asset('images/avatar/2.jpg')}}" alt="image" style="height: 70px; width: 70px;"></td>
                            <td><a target="_blank" href="javascript:void(0);">PDF</a></td>
                            <td>Hindi</td>
                            <td>Hindi</td>
                            <td>Medical Surgical Nursing	</td>
                            <td>NURSING EXAM </td>
                            <td>###</td>
                           
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
                                        <a class="dropdown-item btn-success" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#studyViewModal">
                                            <i class="fa fa-arrows-alt"></i>View
                                        </a>
                                        <a class="dropdown-item" href="{{ url('admin/studymaterials/{id}/edit') }}" onclick="check_perform_sedit()">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);" onclick="check_perform_sdelete('15')">
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

     <!-- Studymaterial Modal -->
     <div class="modal fade" id="studyViewModal" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
    
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="viewLabel">Study Material Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
    
                <!-- Modal Body -->
                <div class="modal-body">
                    <table class="table table-bordered mb-0">
                        <tbody>
                            <!-- Photo Row -->
                            <tr>
                                <th style="width: 200px;">Photo</th>
                                <td class="text-center">
                                    <img src="{{ asset('images/avatar/2.jpg') }}" alt="Study Material Image"
                                         class="img-fluid rounded" style="height: 120px; width: auto;">
                                </td>
                            </tr>
                            <!-- Info Rows -->
                            <tr>
                                <th>Title</th>
                                <td>ANM Study Materials</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>ANM</td>
                            </tr>
                            <tr>
                                <th>Topic</th>
                                <td>ANM Study Materials</td>
                            </tr>
                            <tr>
                                <th>Sub Topic</th>
                                <td>ANM Study Materials</td>
                            </tr>
                            <tr>
                                <th>Link</th>
                                <td>####</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>ANM Study Materials</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
            </div>
        </div>
    </div>
    
</div>
@endsection
@push('scripts')


   
@endpush


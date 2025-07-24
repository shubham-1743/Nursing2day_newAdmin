@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>Students</h3>

    <!-- Top action buttons -->
    <div class="mb-3">
        <a href="{{url('admin/students/create')}}" class="btn btn-success btn-sm">+ Add New Student</a>
        <a href="javascript:void(0);" onclick="check_perform_sedit()" class="btn btn-warning btn-sm">Edit</a>
        <a href="" onclick="event.preventDefault(); document.getElementById('delete-form').submit();" class="btn btn-danger btn-sm">
            Delete
        </a>

        <form id="delete-form" action="" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
        <a class="btn btn-primary btn-sm" onclick="return confirm(' you want to reset?');" href="javascript:void(0);" onclick="check_perform_sedit()"><span class="fa fa-trash"></span> Reset All Student Auth</a>
        <a href="{{route('students.Iestudents')}}" class="btn btn-default"><span class="fa fa-exchange"></span>&nbsp;Import/Export Students</a>
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
                            <th>Email</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Groups</th>
                            <th>Admission-date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>brosis@gmail.com</td>
                            <td>brosis</td>
                            <td>9966332255</td>
                            <td>B. Sc. Nursing 4th Year Students </td>
                            <td>14-07-2025 </td>
                            <td>
                                <aspan class="badge badge-success light border-0">status</span>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item btn-success" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#studentViewModal">
                                            <i class="fa fa-arrows-alt"></i>View
                                        </a>
                                        <a class="dropdown-item btn-success" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#packageViewModal">
                                            <i class="fa fa-shopping-cart"></i>Sales Package
                                        </a>
                                        <a class="dropdown-item btn-success" href="{{ url('admin/students/{id}/edit') }}" >
                                            <i class="fa fa-edit"></i>Edit
                                        </a>
                                        <a class="dropdown-item btn-success" href="javascript:void(0);" >
                                            <i class="fa fa-trash"></i>Delete
                                        </a>
                                        <a class="dropdown-item btn-success" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#packageViewModal">
                                            <i class="fa fa-trash"></i>Reset Auth
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

    <!-- Student Modal -->
    <div class="modal fade" id="studentViewModal" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="viewLabel">View Student Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="{{ asset('images/avatar/2.jpg') }}" alt="User Photo" class="img-fluid rounded mb-2" style="height: 120px;">
                            <div class="d-grid gap-2">
                                <!-- Update Photo Button -->
                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#updatePhotoModal">
                                    Update Photo
                                </button>

                                <!-- Change Password Button -->
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                                    Change Password
                                </button>
                            </div>

                        </div>

                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Full Name</th>
                                        <td>sanjay kumar meena</td>
                                        <th>Phone Number</th>
                                        <td>7427816720</td>
                                    </tr>
                                    <tr>
                                        <th>Registered Email</th>
                                        <td>sm9001806@gmail.com</td>
                                        <th>Alternate Number</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th>Enrolment Number</th>
                                        <td></td>
                                        <th>Admission Date</th>
                                        <td>23-07-2025</td>
                                    </tr>
                                    <tr>
                                        <th>Groups</th>
                                        <td colspan="3">(1) MAD GURU'S</td>
                                    </tr>
                                    <tr>
                                        <th>Expiry Days</th>
                                        <td>Unlimited</td>
                                        <th>Last Login</th>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <hr>

                    <h6 class="text-muted">Package Details</h6>
                    <table class="table table-bordered">
                        <thead class="text-warning">
                            <tr>
                                <th>S.No.</th>
                                <th>Package Name</th>
                                <th>Exams</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Amount</th>
                                <th>Coupon Discount</th>
                                <th>Net Amount</th>
                                <th>Date</th>
                                <th>Expiry Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3"></td>
                                <td>₹ 0</td>
                                <td>0</td>
                                <td>₹ 0</td>
                                <td>₹ 0</td>
                                <td>₹ 0</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
    {{-- update image model --}}

    <div class="modal fade" id="updatePhotoModal" tabindex="-1" aria-labelledby="updatePhotoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="updatePhotoLabel">Update Photo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
    
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="photo" class="form-label">Upload Photo</label>
                            <input type="file" class="form-control" name="photo" required>
                        </div>
                    </div>
    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-refresh"></i> Update
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                            <i class="fa fa-times"></i> Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- change password model --}}
    <div class="modal fade" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="changePasswordLabel">Change Password</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
    
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
    
                        <div class="mb-3">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-refresh"></i> Update
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                            <i class="fa fa-times"></i> Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

     {{-- package model --}}

     <div class="modal fade" id="packageViewModal" tabindex="-1" aria-labelledby="updatePhotoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="" >
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="changePasswordLabel">Sales Package </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                  
    
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="package" class="form-label">Package</label>
                            <select name="package_id" class="form-control" id="package_id">
                                <option value="">None selected</option>
                            </select>
                           
                        </div>
                    </div>
    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-refresh"></i> Submit
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
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

@endpush

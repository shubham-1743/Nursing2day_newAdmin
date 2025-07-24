@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>Packages</h3>

    <!-- Top action buttons -->
    <div class="mb-3">
        <a href="{{url('admin/packages/create')}}" class="btn btn-success btn-sm">+ Add New Packages</a>

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
                            <th>Photo</th>
                            <th>Group Name</th>
                            <th>Category</th>
                            <th>Type</th>
                            <th>Package</th>
                            <th>Exam</th>
                            <th>Amount</th>
                            <th>Discounted Amount</th>
                            <th>Expiry date</th>
                            <th>Short Oder</th>
                            <th>Status</th>
                            <th>Show Home</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td><img src="" alt=""> </td>
                            <td>NURSING EXAM ,MAD GURU'S ,B. Sc. Nursing 4th Year Students </td>
                            <td>Video</td>
                            <td>PAID</td>
                            <td>Eye ENT || Medical Surgical Nursing </td>
                            <td>NURSING EXAM | MAD GURU'S | B. Sc. Nursing 4th Year Students </td>
                            <td>0.00 </td>
                            <td>0.00 </td>
                            <td>365 Days </td>
                            <td>0</td>
                            <td>
                                <aspan class="badge badge-success light border-0">status</span>
                            </td>
                            <td>0</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a class="dropdown-item text-success" data-bs-toggle="modal" data-bs-target="#view">
                                            <i class="fa fa-arrows-alt"></i> Show
                                        </a>
                                        <a class="dropdown-item" href="{{ url('admin/packages/{id}/edit') }}" onclick="check_perform_sedit()">
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

    <!-- Modal -->
    <div class="modal fade" id="view" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="viewLabel">View Package Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        <!-- Image -->
                        <div class="col-md-4 text-center">
                            <img src="{{asset('images/avatar/2.jpg')}}" alt="image" class="img-fluid rounded" style="height: 120px; width: auto;">
                        </div>

                        <!-- Table Info -->
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Package Name</th>
                                        <td>Eye ENT || Medical Surgical Nursing</td>
                                    </tr>
                                    <tr>
                                        <th>Groups</th>
                                        <td>NURSING EXAM, MAD GURU'S, B.Sc. Nursing 4th Year Students</td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <td>Video</td>
                                    </tr>
                                    <tr>
                                        <th>Type</th>
                                        <td>PAID</td>
                                    </tr>
                                    <tr>
                                        <th>Amount</th>
                                        <td>₹ 0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Discounted Amount</th>
                                        <td>₹ 0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Expiry Days</th>
                                        <td>180 Days</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>Lorem ipsum dolor sit amet.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
@endsection
@push('scripts')


@endpush

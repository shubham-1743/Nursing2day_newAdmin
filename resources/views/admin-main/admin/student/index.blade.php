
@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>Students</h3>

    <!-- Top action buttons -->
    <div class="mb-3">
        <a href="{{url('admin/students/create')}}" class="btn btn-success btn-sm">+ Add New Student</a>
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
        <a class="btn btn-primary btn-sm" onclick="return confirm(' you want to reset?');" href="javascript:void(0);" onclick="check_perform_sedit()"><span class="fa fa-trash"></span> Reset All Student Auth</a>
        <a href="javascript:void(0);" onclick="check_perform_sedit()" class="btn btn-default"><span class="fa fa-exchange"></span>&nbsp;Import/Export Students</a>
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
                            <td>B. Sc. Nursing 4th Year Students	</td>
                            <td>14-07-2025	</td>
                            <td><aspan class="badge badge-success light border-0">status</span></td>
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
                                        <li><a href="javascript:void(0);" ><span class="fa fa-arrows-alt"></span>&nbsp;View</a></li>
                                        <li><a href="javascript:void(0);" name="packagefrm" ><span class="fa fa-shopping-cart"></span>&nbsp;Sales Package</a></li>
                                        <li><a href="{{ url('admin/students/{id}/edit') }}" name="editallfrm" ><span class="fa fa-edit"></span>&nbsp;Edit</a></li>
                                        <li><a href="javascript:void(0);" onclick="check_perform_sdelete('24339');"><span class="fa fa-trash"></span>&nbsp;Delete</a></li>
                                        <li><a onclick="return confirm(' you want to reset?');" href="javascript:void(0);"><span class="fa fa-trash"></span>Reset Auth</a></li>
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
</div>
@endsection
@push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Popper.js (required for Bootstrap 4 dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Bootstrap 4 JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- <script>
        function check_perform_sedit() {
            alert('Edit clicked');
        }

        function check_perform_sdelete(id) {
            alert('Delete clicked with ID: ' + id);
        }
    </script> --}}
@endpush


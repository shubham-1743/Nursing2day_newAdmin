
@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>Pages
    </h3>

    <!-- Top action buttons -->
    <div class="mb-3">
        <a href="{{url('admin/pages/create')}}" class="btn btn-success btn-sm">+ Add New Pages
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
                            <th>Sort Order</th>
                            <th>Link Name</th>
                            <th>Page Name</th>
                            <th>Icon</th>
                            <th>Published</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>5</td>
                            <td>privacy-policy</td>
                            <td>privacy-policy</td>
                            <td>©</td>
                            <td><a href="javascript:void(0);" class="btn btn-danger"><span class="fa fa-times-circle"></span>&nbsp;Unpublished</a>  </td>                            <td>
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
                                        <a href="{{ url('admin/pages/{id}/edit') }}" name="editallfrm" ><span class="fa fa-edit"></span>&nbsp;Edit</a>
                                        <li><a href="javascript:void(0);" onclick="check_perform_sdelete('17');"><span class="fa fa-trash"></span>&nbsp;Delete</a></li>                                        
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
  
@endpush


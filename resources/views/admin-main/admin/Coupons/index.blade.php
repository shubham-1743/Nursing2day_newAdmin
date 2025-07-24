
@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>Coupons</h3>

    <!-- Top action buttons -->
    <div class="mb-3">
        <a href="{{url('admin/Coupons/create')}}" class="btn btn-success btn-sm">+ Add New Coupon</a>
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
        <a href="{{route('Coupons.UseCoupon')}}" class="btn btn-info btn-sm"><span class="fa fa-briefcase"></span>&nbsp;Used Coupons</a>
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
                            <th>Coupon Name</th>
                            <th>Coupon Amount</th>
                            <th>Minimum Order</th>
                            <th>Coupon Code</th>
                            <th>No.Of Coupon </th>
                            <th>User per Customer</th>
                            <th>Start & End date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>Happy Teachers Day and Ganesh Chaturthi	</td>
                            <td>50.00%</td>
                            <td>2000.00</td>
                            <td>flat50	</td>
                            <td>100</td>
                            <td>1</td>
                            <td>05-09-2024
                                to
                                10-09-2024</td>
                            <td><aspan class="badge badge-danger light border-0">Suspend</span></td>
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
                                        <li><a href="{{route('Coupons.UseCoupon')}}"><span class="fa fa-server"></span>&nbsp;Used Coupons</a></li>                                       
                                        <a href="{{ url('admin/Coupons/{id}/edit') }}" name="editallfrm" ><span class="fa fa-edit"></span>&nbsp;Edit</a>
                                        <li><a href="javascript:void(0);" ><span class="fa fa-trash"></span>&nbsp;Delete</a></li>                                        
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


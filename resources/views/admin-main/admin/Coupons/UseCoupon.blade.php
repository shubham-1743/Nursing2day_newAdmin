@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Coupon Usage</h4>

    <!-- Filter Form -->
    <form method="GET" action="#" class="mb-4">
        <div class="row align-items-end">

            <!-- Coupon Name -->
            <div class="col-md-3 mb-2">
                <label>Coupon Name</label>
                <input type="text" name="coupon_name" class="form-control" placeholder="My Coupon">
            </div>

            <!-- Used Date From -->
            <div class="col-md-2 mb-2">
                <label>Used Date</label>
                <input type="date" name="used_from" class="form-control">
            </div>

            <!-- Used Date To -->
            <div class="col-md-2 mb-2">
                <label>&nbsp;</label>
                <input type="date" name="used_to" class="form-control">
            </div>

            <!-- Search and Reset -->
            <div class="col-md-3 mb-2">
                <label>&nbsp;</label><br>
                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-search"></i> Search</button>
                <a href="javascript:void(0);" class="btn btn-warning btn-sm"><i class="fa fa-refresh"></i> Reset</a>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="mt-3">
            <a href="{{url('admin/Coupons')}}" class="btn btn-info btn-sm"><i class="fa fa-arrow-left"></i> Back to coupons</a>
            <a href="javascript:void(0);" class="btn btn-secondary btn-sm"><i class="fa fa-file-excel-o"></i> Export In Excel</a>
        </div>
    </form>

    <!-- Table -->
    <div class="table-responsive mt-3">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>S.No.</th>
                    <th>Coupon Name</th>
                    <th>Coupon Code</th>
                    <th>Student Name</th>
                    <th>Student Email</th>
                    <th>Used Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="6" class="text-center text-muted">No data available</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
   
@endpush

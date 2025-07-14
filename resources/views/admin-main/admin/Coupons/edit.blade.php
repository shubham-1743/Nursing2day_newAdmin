@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Coupons</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <form action="" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="A short name for the coupon" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" placeholder="A description of the coupon for the customer" rows="3"></textarea>
        </div>

        <div class="row">
            <div class="col-md-9">
                <div class="mb-3">
                    <label for="amount" class="form-label">Coupon Amount</label>
                    <input type="number" name="amount" id="amount" class="form-control" placeholder="The value of the discount for the coupon" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select name="type" id="type" class="form-control">
                        <option value="amount">Amount</option>
                        <option value="percent">Percent</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="minimum_order" class="form-label">Coupon Minimum Order</label>
            <input type="number" name="minimum_order" id="minimum_order" class="form-control" placeholder="The minimum order value before the coupon is valid">
        </div>

        <div class="mb-3">
            <label for="code" class="form-label">Coupon Code</label>
            <input type="text" name="code" id="code" class="form-control" placeholder="Enter code or leave blank for auto-generate">
        </div>

        <div class="mb-3">
            <label for="total_uses" class="form-label">No. of Coupon</label>
            <input type="number" name="total_uses" id="total_uses" class="form-control" placeholder="Max times coupon can be used">
        </div>

        <div class="mb-3">
            <label for="uses_per_user" class="form-label">Uses per Customer</label>
            <input type="number" name="uses_per_user" id="uses_per_user" class="form-control" placeholder="No. of times per customer">
        </div>

        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control">
        </div>

        <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" name="end_date" id="end_date" class="form-control">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-plus"></i> Save
            </button>
            <a href="{{ url('admin/Coupons') }}" class="btn btn-danger"><i class="fa fa-times"></i> Close</a>
        </div>
    </form>
</div>

@endsection

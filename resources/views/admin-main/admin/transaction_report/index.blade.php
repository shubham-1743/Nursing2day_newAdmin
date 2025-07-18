@extends('admin-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Transaction Report</h5></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row mb-3">
        <div class="col-md-2">
            <select class="form-control">
                <option>None selected</option>
                <option>User Email</option>
                <option>User Phone</option>
            </select>
        </div>
        <div class="col-md-2">
            <select class="form-control">
                <option>None selected</option>
                <option>Transaction ID</option>
                <option>Package</option>
            </select>
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="name,email,phone">
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="Transaction ID">
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="Payment Gateway Transaction ID">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="Cart Amount">
        </div>
        <div class="col-md-2">
            <input type="text" class="form-control" placeholder="TRN Amount">
        </div>
        <div class="col-md-2">
            <input type="date" class="form-control" placeholder="Date From">
        </div>
        <div class="col-md-2">
            <input type="date" class="form-control" placeholder="Date To">
        </div>
        <div class="col-md-4 text-end">
            <button class="btn btn-success">Search</button>
            <button class="btn btn-warning">Reset</button>
            <button class="btn btn-info">Export In Excel</button>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered" id="transaction-table">
                    <thead>
                        <tr>
                            <th>Sr.NO</th>
                            <th>Transaction Status</th>
                            <th>Payment Mode</th>
                            <th>User Name</th>
                            <th>Category Name</th>
                            <th>Shipping Address</th>
                            <th>User Email</th>
                            <th>User Phone No.</th>
                            <th>Transaction ID</th>
                            <th>Packages Purchased</th>
                            <th>Payment Gateway Transaction ID</th>
                            <th>Cart Amount</th>
                            <th>Transaction Amount</th>
                            <th>Transaction Date and Time</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr>
                            <td>1</td>
                            <td><span class="badge badge-success light border-0">Success</span></td>
                            <td>Free</td>
                            <td>ramniwas Choudhary	</td>
                            <td>Test Paper</td>
                            <td>Jaipur</td>
                            <td>mr.choudhary.2008@gmail.com	</td>
                            <td>9966338855</td>
                            <td>295</td>
                            <td>1</td>
                            <td>ip20</td>
                            <td>2000</td>
                            <td>400</td>
                            <td>20/6/2025</td>
                        </tr>
                       
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')

@endpush

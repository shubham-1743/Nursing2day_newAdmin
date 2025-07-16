@extends('admin-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Payment Options</h5></li>
    </ol>
</div>

<!-- Tabs -->
<ul class="nav nav-tabs" id="paymentTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab">Paypal</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="ccavenue-tab" data-toggle="tab" href="#ccavenue" role="tab">CCAvenue</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="payumoney-tab" data-toggle="tab" href="#payumoney" role="tab">PayUmoney</a>
    </li>
</ul>

<div class="tab-content mt-3" id="paymentTabContent">
    <!-- PayPal -->
    <div class="tab-pane fade show active" id="paypal" role="tabpanel">
        <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Pay Pal">
            </div>
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Signature</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="paypalSandbox">
                <label class="form-check-label" for="paypalSandbox">Sandbox Mode</label>
            </div>
            <div class="form-group mt-2">
                <label>Published</label><br>
                <label><input type="radio" name="paypal_published" checked> Yes</label>
                <label class="ml-3"><input type="radio" name="paypal_published"> No</label>
            </div>
            <button type="submit" class="btn btn-success">Save Settings</button>
        </form>
    </div>

    <!-- CCAvenue -->
    <div class="tab-pane fade" id="ccavenue" role="tabpanel">
        <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="CC AVENUE">
            </div>
            <div class="form-group">
                <label>Merchant ID</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Access Code</label>
                <input type="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Working Key</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Gateway URL</label>
                <input type="text" class="form-control" placeholder="https://secure.ccavenue.com">
            </div>
            <div class="form-group mt-2">
                <label>Published</label><br>
                <label><input type="radio" name="ccavenue_published"> Yes</label>
                <label class="ml-3"><input type="radio" name="ccavenue_published" checked> No</label>
            </div>
            <button type="submit" class="btn btn-success">Save Settings</button>
        </form>
    </div>

    <!-- PayUmoney -->
    <div class="tab-pane fade" id="payumoney" role="tabpanel">
        <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="PAYU MONEY">
            </div>
            <div class="form-group">
                <label>Merchant ID</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Merchant Key</label>
                <input type="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Merchant Salt</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Service Provider</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Header Authorization</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-check mt-2">
                <input type="checkbox" class="form-check-input" id="payumoneySandbox">
                <label class="form-check-label" for="payumoneySandbox">Sandbox Mode</label>
            </div>
            <div class="form-group mt-2">
                <label>Published</label><br>
                <label><input type="radio" name="payumoney_published"> Yes</label>
                <label class="ml-3"><input type="radio" name="payumoney_published" checked> No</label>
            </div>
            <button type="submit" class="btn btn-success">Save Settings</button>
        </form>
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
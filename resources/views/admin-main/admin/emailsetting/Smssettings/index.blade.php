@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">SMS Settings</h3>

    <form method="POST" action="#">
        @csrf
        <div class="row">
            <!-- Left Column -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">API Link</label>
                    <input type="text" class="form-control" name="api_link" value="http://im.smsraja.in/vendorsms/pushsms.aspx">
                </div>
                <div class="mb-3">
                    <label class="form-label">User Name</label>
                    <input type="text" class="form-control" name="username" value="nursing2day">
                </div>
                <div class="mb-3">
                    <label class="form-label">Heading Username</label>
                    <input type="text" class="form-control" name="heading_username" value="user">
                </div>
                <div class="mb-3">
                    <label class="form-label">Heading Mobile No</label>
                    <input type="text" class="form-control" name="heading_mobile" value="msisdn">
                </div>
                <div class="mb-3">
                    <label class="form-label">Heading Sender Id</label>
                    <input type="text" class="form-control" name="heading_senderid" value="sid">
                </div>
                <div class="mb-3">
                    <label class="form-label">Post Type</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="post_type" value="POST">
                        <label class="form-check-label">POST</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="post_type" value="GET" checked>
                        <label class="form-check-label">GET</label>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Sender ID</label>
                    <input type="text" class="form-control" name="sender_id" value="BROSIS">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="********">
                </div>
                <div class="mb-3">
                    <label class="form-label">Heading Password</label>
                    <input type="text" class="form-control" name="heading_password" value="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Heading Message</label>
                    <input type="text" class="form-control" name="heading_message" value="msg">
                </div>
                <div class="mb-3">
                    <label class="form-label">Others</label>
                    <input type="text" class="form-control" name="others" value="fl=0&gwid=2">
                    {{-- <small class="form-text text-muted">e.g: channel=Trans&DCS=0&flashsms=0&route=2</small> --}}
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <div class="mt-3">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-sync-alt"></i> Save Settings
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endpush

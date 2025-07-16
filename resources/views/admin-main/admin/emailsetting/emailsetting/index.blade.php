@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">E-Mail Settings</h3>

    <form method="POST" action="#">
        @csrf

        <!-- Email Type -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email Type</label>
            <div class="col-sm-10 d-flex align-items-center gap-3">
                <div class="form-check mr-3">
                    <input class="form-check-input" type="radio" name="email_type" id="email_localhost" value="localhost" checked>
                    <label class="form-check-label" for="email_localhost">LOCALHOST</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="email_type" id="email_smtp" value="smtp">
                    <label class="form-check-label" for="email_smtp">SMTP</label>
                </div>
            </div>
        </div>

        <!-- SMTP Settings (hidden by default) -->
        <div id="smtp-settings" style="display: none;">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Server Name / Host</label>
                    <input type="text" name="smtp_host" class="form-control" placeholder="Server Name / Host">
                </div>

                <div class="form-group col-md-6">
                    <label>Port</label>
                    <input type="text" name="smtp_port" class="form-control" placeholder="Port">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>User Name</label>
                    <input type="text" name="smtp_user" class="form-control" placeholder="User Name">
                </div>

                <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="password" name="smtp_pass" class="form-control" placeholder="Password">
                </div>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" name="starttls" id="starttls">
                <label class="form-check-label" for="starttls">STARTTLS</label>
            </div>
        </div>

        <!-- Save Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-sync"></i> Save Settings
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('input[name="email_type"]').on('change', function () {
            if ($(this).val() === 'smtp') {
                $('#smtp-settings').slideDown();
            } else {
                $('#smtp-settings').slideUp();
            }
        });

        // Trigger initial check on load
        if ($('#email_smtp').is(':checked')) {
            $('#smtp-settings').show();
        }
    });
</script>
@endpush

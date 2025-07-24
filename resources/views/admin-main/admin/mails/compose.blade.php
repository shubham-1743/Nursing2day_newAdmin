@extends('admin-main.layouts.default')


@section('content')
<div class="panel panel-custom">
    <div class="panel-heading"><b>Compose Mail</b></div><br>
    <div class="panel">
        <div class="panel-body">
            <form action="" class="form-horizontal" id="MailComposeForm" method="post" accept-charset="utf-8">
                <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>
                <div class="form-group">
                    <label for="group_name" class="col-sm-3 control-label">
                        <small>To</small>
                    </label>
                    <div class="col-sm-9">
                        <input name="data[Mail][to_email]" id="studentId" class="form-control" placeholder="Search Student Mail" maxlength="100" type="text" /> </div>
                </div>
                <div class="form-group">
                    <label for="group_name" class="col-sm-3 control-label">
                        <small>Subject</small>
                    </label>
                    <div class="col-sm-9">
                        <input name="data[Mail][subject]" class="form-control" placeholder="Subject" maxlength="255" type="text" id="MailSubject" required="required" /> </div>
                </div>
                <div class="form-group">
                    <label for="group_name" class="col-sm-3 control-label">
                        <small>Message</small>
                    </label>
                    <div class="col-sm-9">
                        <div class="input textarea"><textarea name="data[Mail][message]" placeholder="Message" class="form-control" cols="30" rows="6" id="MailMessage"></textarea></div><br>
                        <button onclick="setup();" type="button" class="tinybtn btn btn-secondary">Load Editor</button>

                    </div>
                </div><br>
                <div class="form-group text-left">
                    <div class="col-sm-offset-3 col-sm-7">
                        <button class="btn btn-success" type="submit"><span class="fa fa-plus-circle"></span>&nbsp;Send</button><a href="{{url('admin/mails')}}" class="btn btn-danger"><span class="fa fa-close"></span>&nbsp;Close</a> </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
{{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}


<script>
    function setup() {
        if (!tinymce.get('MailMessage')) {
            tinymce.init({
                selector: '#MailMessage',
                height: 300,
                menubar: true,
                plugins: 'lists link image preview code',
                toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist | link image | code preview | blocks fontfamily fontsize |link image media table mergetags| exportpdf | exportpdf | exportword | importword | markdown |',
                branding: false
            });
        } else {
            alert("Editor is already loaded.");
        }
    }
</script>

@endpush

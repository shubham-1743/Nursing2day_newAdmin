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
                        <small></small>
                    </label>
                    <div class="col-sm-9">
                        <div class="input textarea"><textarea name="data[Mail][message]" placeholder="Message" class="form-control" cols="30" rows="6" id="MailMessage"></textarea></div><br>
                        <button onclick="javascript:setup();" type="button" class="tinybtn">Load Editor</button>
                    </div>
                </div><br>
                <div class="form-group text-left">
                    <div class="col-sm-offset-3 col-sm-7">
                        <button class="btn btn-success" type="submit"><span class="fa fa-plus-circle"></span>&nbsp;Send</button><a href="/admin/mails" class="btn btn-danger"><span class="fa fa-close"></span>&nbsp;Close</a> </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

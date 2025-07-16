@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Send Emails</h3>

    <form method="POST" action="#">
        @csrf

        <!-- Type -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
                <select name="" class="form-control" >
                    <option value="">Please Select</option>
                    <option value="Student">Students</option>
                    <option value="Teacher">Teachers</option>
                    <option value="Any">Any Email</option>
                </select>
            </div>
        </div><br>

        <!-- Subject -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Subject</label>
            <div class="col-sm-10">
                <input type="text" name="subject" class="form-control" placeholder="Type subject">
            </div>
        </div><br>

        <!-- Select Email Template -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Select Email Template</label>
            <div class="col-sm-10">
                <select class="form-control" name="email_template">
                    <option value="">Please Select</option>
                   
                </select>
            </div>
        </div><br>

        <!-- Email Template -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email Template:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="message" rows="6"
                    placeholder="If you do not want to select email template then simply type email message. Once you load editor then you can not select template go to reset button"></textarea>
            </div>
        </div><br>

        <!-- Load Editor Button -->
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="button" class="btn btn-light border">Load Editor</button>
            </div>
        </div><br>

        <!-- Send & Reset Buttons -->
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2 d-flex gap-2">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-paper-plane"></i> Send
                </button>
                <button  type="reset" class="btn btn-danger">
                    <i class="fa fa-sync"></i> Reset
                </button>
            </div>
        </div>

    </form>
</div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endpush

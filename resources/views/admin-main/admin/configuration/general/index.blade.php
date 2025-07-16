@extends('admin-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Configuration Options</h5></li>
    </ol>
</div>

<form method="POST" action="#">
    <div class="row">
        <!-- Left Column -->
        <div class="col-md-6">
            <div class="form-group">
                <label>Site Name</label>
                <input type="text" name="site_name" class="form-control">
            </div>

            <div class="form-group">
                <label>Domain Name</label>
                <input type="text" name="domain_name" class="form-control">
            </div>

            <div class="form-group">
                <label>Meta Title</label>
                <textarea name="meta_title" class="form-control" rows="2"></textarea>
            </div>

            <div class="form-group">
                <label>Meta Content</label>
                <textarea name="meta_content" class="form-control" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label>Time Zone</label>
                <select name="time_zone" class="form-control">
                    <option value="Kolkata">Kolkata</option>
                </select>
            </div>

            <div class="form-group">
                <label>Header Contact</label>
                <input type="text" name="header_contact" class="form-control">
            </div>

            <div class="form-group">
                <label>Display records per page</label>
                <input type="number" name="display_records" class="form-control">
            </div>

            <div class="form-group">
                <label>Date Format</label>
                <input type="text" name="date_format" class="form-control">
            </div>

            <div class="form-group">
                <label>Captcha</label><br>
                <label><input type="radio" name="captcha" value="image"> Image</label>
                <label class="ml-3"><input type="radio" name="captcha" value="text"> Text</label>
            </div>

            <div class="form-group">
                <label>Language</label>
                <select name="language" class="form-control">
                    <option value="English">English</option>
                </select>
            </div>

            <div class="form-group">
                <label>YouTube Link</label>
                <input type="text" name="youtube_link" class="form-control">
            </div>

            <div class="form-group">
                <label>Telegram Link</label>
                <input type="text" name="telegram_link" class="form-control">
            </div>

            <div class="form-group">
                <label>Latitude</label>
                <input type="text" name="latitude" class="form-control">
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-6">
            <div class="form-group">
                <label>Organization Name</label>
                <input type="text" name="organization_name" class="form-control">
            </div>

            <div class="form-group">
                <label>Organization Email</label>
                <input type="email" name="organization_email" class="form-control">
            </div>

            <div class="form-group">
                <label>Meta Keyword</label>
                <textarea name="meta_keyword" class="form-control" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label>Currency</label>
                <select name="currency" class="form-control">
                    <option value="INR">India Rupee INR</option>
                </select>
            </div>

            <div class="form-group">
                <label>Email Contact</label>
                <input type="text" name="email_contact" class="form-control">
            </div>

            <div class="form-group">
                <label>Powered By Link</label>
                <input type="text" name="powered_by_link" class="form-control">
            </div>

            <div class="form-group">
                <label>Max records per page</label>
                <input type="number" name="max_records_page" class="form-control">
            </div>

            <div class="form-group">
                <label>Text Direction</label><br>
                <label><input type="radio" name="text_direction" value="ltr"> Left to Right (LTR)</label>
                <label class="ml-3"><input type="radio" name="text_direction" value="rtl"> Right to Left (RTL)</label>
            </div>

            <div class="form-group">
                <label>WhatsApp Number</label>
                <input type="text" name="whatsapp_number" class="form-control">
            </div>

            <div class="form-group">
                <label>Instagram Link</label>
                <input type="text" name="instagram_link" class="form-control">
            </div>

            <div class="form-group">
                <label>Longitude</label>
                <input type="text" name="longitude" class="form-control">
            </div>
        </div>
    </div>

    <!-- Checkboxes Section -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="form-group">
                <div class="form-check form-check-inline"><input type="checkbox" name="enable_sms"> Enable SMS Notification</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="enable_email"> Enable Email Notification</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="manual_verification"> Manual Verification</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="front_end_registration"> Front End Registration</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="front_end_slides"> Front End Slides</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="translation"> Translation</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="exam_feedback"> Exam Feedback</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="leader_board"> Leader Board</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="math_editor"> Math Editor</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="show_free_package"> Show Free Package</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="certificate"> Certificate</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="testimonial"> Testimonial</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="advertisement"> Advertisement</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="no_of_visitor"> No. of Visitor</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="no_of_student"> No. of Student</div>
                <div class="form-check form-check-inline"><input type="checkbox" name="no_of_exam"> No. of Exam</div>
            </div>

            <div class="form-group mt-3">
                <label>Tolerance Count</label>
                <input type="number" name="tolerance_count" class="form-control w-25">
            </div>
        </div>
    </div>

    <div class="form-group mt-4">
        <button type="submit" class="btn btn-success"><span class="fa fa-refresh">Save Settings</span></button>
    </div>
</form>
@endsection

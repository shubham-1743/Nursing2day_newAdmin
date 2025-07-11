@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Exam</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <form action="" method="POST">
        @csrf

        <!-- Name of Exam -->
        <div class="mb-3">
            <label for="exam_name" class="form-label">Name of Exam</label>
            <input type="text" name="exam_name" id="exam_name" class="form-control" placeholder="Name of Exam">
        </div>

        <!-- Passing Percentage -->
        <div class="mb-3">
            <label for="passing_percentage" class="form-label">Passing Percentage</label>
            <input type="number" name="passing_percentage" id="passing_percentage" class="form-control" placeholder="Passing Percentage">
        </div>

        <!-- Instruction -->
        <div class="mb-3">
            <label for="instruction" class="form-label">Instruction</label>
            <textarea name="instruction" id="instruction" class="form-control" rows="3" placeholder="Instruction"></textarea>
            <br>
            <button onclick="javascript:setup();" type="button" class="tinybtn">Load Editor</button>
        </div>

        <!-- Syllabus -->
        <div class="mb-3">
            <label for="syllabus" class="form-label">Syllabus</label>
            <textarea name="syllabus" id="syllabus" class="form-control" rows="3" placeholder="Syllabus"></textarea>
            <br>
            <button onclick="javascript:setup();" type="button" class="tinybtn">Load Editor</button>
        </div>

        <!-- Exam Duration -->
        <div class="mb-3">
            <label for="duration" class="form-label">Exam Duration (Min.)</label>
            <input type="number" name="duration" id="duration" class="form-control" placeholder="0 for unlimited duration">
        </div>

        <!-- Attempt Count -->
        <div class="mb-3">
            <label for="attempt_count" class="form-label">Attempt Count</label>
            <input type="number" name="attempt_count" id="attempt_count" class="form-control" placeholder="0 for unlimited attempt">
        </div>

        <!-- Start & End Date -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" name="start_date" id="start_date" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" name="end_date" id="end_date" class="form-control">
            </div>
        </div>

        <!-- Group Select -->
        <div class="mb-3">
            <label for="group_id" class="form-label">Select Group</label>
            <select name="group_id" id="group_id" class="form-control">
                <option value="">None selected</option>
            </select>
        </div>

        <!-- Radio Options -->
        <div class="mb-3">
            <label class="form-label d-block">Show Answer Sheet</label>
            <div class="form-check form-check-inline">
                <input type="radio" name="show_answer_sheet" value="1" class="form-check-input" checked> Yes
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="show_answer_sheet" value="0" class="form-check-input"> No
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">Negative Marking</label>
            <div class="form-check form-check-inline">
                <input type="radio" name="negative_marking" value="1" class="form-check-input" checked> Yes
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="negative_marking" value="0" class="form-check-input"> No
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">Browser Tolerance</label>
            <div class="form-check form-check-inline">
                <input type="radio" name="browser_tolerance" value="1" class="form-check-input" checked> Yes
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="browser_tolerance" value="0" class="form-check-input"> No
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">Result After Finish</label>
            <div class="form-check form-check-inline">
                <input type="radio" name="result_after_finish" value="1" class="form-check-input" checked> Yes
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="result_after_finish" value="0" class="form-check-input"> No
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">Instant Result</label>
            <div class="form-check form-check-inline">
                <input type="radio" name="instant_result" value="1" class="form-check-input" checked> Yes
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="instant_result" value="0" class="form-check-input"> No
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">Multi Language</label>
            <div class="form-check form-check-inline">
                <input type="radio" name="multi_language" value="1" class="form-check-input" checked> Yes
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="multi_language" value="0" class="form-check-input"> No
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">Random Question</label>
            <div class="form-check form-check-inline">
                <input type="radio" name="random_question" value="1" class="form-check-input"> Yes
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="random_question" value="0" class="form-check-input" checked> No
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label d-block">Option Shuffle</label>
            <div class="form-check form-check-inline">
                <input type="radio" name="option_shuffle" value="1" class="form-check-input" checked> Yes
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="option_shuffle" value="0" class="form-check-input"> No
            </div>
        </div>

        <!-- Exam Mode -->
        <div class="mb-3">
            <label class="form-label d-block">Mode</label>
            <div class="form-check form-check-inline">
                <input type="radio" name="mode" value="exam" class="form-check-input" checked> Exam
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="mode" value="quiz" class="form-check-input"> Quiz
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="mode" value="live_test" class="form-check-input"> Live Test
            </div>
        </div>

        <!-- Submit Buttons -->
        <div class="mb-3">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-plus"></i> Save
            </button>
            <a href="{{ url('admin/exams') }}" class="btn btn-danger">Close</a>
        </div>
    </form>
</div>

@endsection

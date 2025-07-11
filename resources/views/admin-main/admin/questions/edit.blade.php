@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Questions</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <form action="" method="POST">
        @csrf

        <!-- Passage ID -->
        <div class="mb-3">
            <label for="passage_id" class="form-label">Passage ID</label>
            <input type="text" name="passage_id" id="passage_id" class="form-control" placeholder="Passage ID if any">
        </div>

        <!-- Question Type -->
        <div class="mb-3">
            <label class="form-label">Question Type</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question_type" value="objective" checked>
                <label class="form-check-label">Objective</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question_type" value="true_false">
                <label class="form-check-label">True / False</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question_type" value="fill_in_the_blanks">
                <label class="form-check-label">Fill in the blanks</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question_type" value="subjective">
                <label class="form-check-label">Subjective</label>
            </div>
        </div>

        <!-- Question -->
        <div class="mb-3">
            <label for="question" class="form-label">Question</label>
            <textarea name="question" id="question" class="form-control" rows="3" placeholder="Type your question here"></textarea>
        </div>

        <!-- Options -->
        <div class="mb-3">
            @for ($i = 1; $i <= 6; $i++)
                <label for="option{{ $i }}" class="form-label">Option {{ $i }}</label>
                <input type="text" name="option{{ $i }}" id="option{{ $i }}" class="form-control mb-2">
            @endfor
        </div>

        <!-- Correct Answers -->
        <div class="mb-3">
            <label for="correct_answer" class="form-label">Correct Answer(s)</label>
            <input type="text" name="correct_answer" id="correct_answer" class="form-control" placeholder="Enter correct option numbers, e.g., 1 or 1,3">
        </div>

        <!-- Explanation -->
        <div class="mb-3">
            <label for="explanation" class="form-label">Explanation (Optional)</label>
            <textarea name="explanation" id="explanation" class="form-control" rows="3" placeholder="Provide explanation in support of correct answer"></textarea>
        </div>

        <!-- Subject, Topic, Subtopic -->
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="subject_id" class="form-label">Subject</label>
                <select name="subject_id" id="subject_id" class="form-control">
                    <option value="">Please Select</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="topic_id" class="form-label">Topic</label>
                <select name="topic_id" id="topic_id" class="form-control">
                    <option value="">Please Select</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="sub_topic_id" class="form-label">Sub Topic</label>
                <select name="sub_topic_id" id="sub_topic_id" class="form-control">
                    <option value="">Please Select</option>
                </select>
            </div>
        </div>

        <!-- Hint -->
        <div class="mb-3">
            <label for="hint" class="form-label">Hint (Optional)</label>
            <input type="text" name="hint" id="hint" class="form-control" placeholder="Hint to help answer correctly">
        </div>

        <!-- Marks and Difficulty -->
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="marks" class="form-label">Marks</label>
                <input type="number" name="marks" id="marks" class="form-control" placeholder="Marks">
            </div>
            <div class="col-md-4">
                <label for="negative_marks" class="form-label">Negative Marks</label>
                <input type="number" name="negative_marks" id="negative_marks" class="form-control" placeholder="Without minus sign">
            </div>
            <div class="col-md-4">
                <label for="difficulty_level" class="form-label">Difficulty Level</label>
                <select name="difficulty_level" id="difficulty_level" class="form-control">
                    <option value="">Please Select</option>
                    <option value="easy">Easy</option>
                    <option value="moderate">Moderate</option>
                    <option value="hard">Hard</option>
                </select>
            </div>
        </div>

        <!-- Save/Close Buttons -->
        <div class="mb-3">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-plus"></i> Save
            </button>
            <a href="{{ url('admin/questions') }}" class="btn btn-danger">Close</a>
        </div>
    </form>
</div>

@endsection

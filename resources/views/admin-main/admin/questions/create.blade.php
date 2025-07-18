@extends('admin-main.layouts.default')

@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Add Question</li>
    </ol>
</div>

<div class="container-fluid p-2">
    <form action="" method="POST">
        @csrf

        <!-- Passage ID -->
        <div class="mb-3">
            <label class="form-label">Passage ID</label>
            <input type="text" name="passage_id" class="form-control" placeholder="Passage ID if any">
        </div>

        <!-- Question Type -->
        <div class="mb-3">
            <label class="form-label">Question Type</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question_type" id="type_objective" value="objective" checked>
                <label class="form-check-label" for="type_objective">Objective</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question_type" id="type_true_false" value="true_false" >
                <label class="form-check-label" for="type_true_false">True / False</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question_type" id="type_fill_blanks" value="fill_in_the_blanks">
                <label class="form-check-label" for="type_fill_blanks">Fill in the blanks</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="question_type" id="type_subjective" value="subjective">
                <label class="form-check-label" for="type_subjective">Subjective</label>
            </div>
        </div>

        <!-- Question Input -->
        <div class="mb-3">
            <label class="form-label">Question</label>
            <textarea name="question" class="form-control" rows="3" placeholder="Type your question here"></textarea>
            <button type="button" class="btn btn-outline-secondary btn-sm mt-2">Load Editor</button>
        </div>

        <!-- Objective Fields -->
        <div id="objectiveFields">
            <!-- ... same options as before ... -->
            <div class="mb-3">
                <button type="button" class="btn btn-light btn-sm mb-2">Option1</button>
                <button type="button" class="btn btn-light btn-sm mb-2">Option2</button>
                <button type="button" class="btn btn-light btn-sm mb-2">Option3</button>
                <button type="button" class="btn btn-light btn-sm mb-2">Option4</button>
                <button type="button" class="btn btn-light btn-sm mb-2">Option5</button>
                <button type="button" class="btn btn-light btn-sm mb-2">Option6</button>
                <button type="button" class="btn btn-light btn-sm mb-2">Correct Answers</button>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Option 1</label>
                    <input type="text" name="option1" class="form-control">
                </div>
                <div class="col">
                    <label class="form-label">Option 2</label>
                    <input type="text" name="option2" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Option 3</label>
                    <input type="text" name="option3" class="form-control">
                </div>
                <div class="col">
                    <label class="form-label">Option 4</label>
                    <input type="text" name="option4" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Option 5</label>
                    <input type="text" name="option5" class="form-control">
                </div>
                <div class="col">
                    <label class="form-label">Option 6</label>
                    <input type="text" name="option6" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Correct Answers</label>
                <input type="text" name="correct_answers" class="form-control" placeholder="e.g., 1 or 1,3">
            </div>
        </div>

        <!-- True/False Radios - PLACE ABOVE Explanation -->
        <div id="trueFalseFields" class="mb-3 d-none">
            <label class="form-label">True / False</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="true_false_answer" id="trueOption" value="true">
                <label class="form-check-label" for="trueOption">True</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="true_false_answer" id="falseOption" value="false">
                <label class="form-check-label" for="falseOption">False</label>
            </div>
        </div>

        <!-- Fill in the Blanks Textbox - PLACE ABOVE Explanation -->
        <div id="fillAnswer" class="mb-3 d-none">
            <label class="form-label">Blank Space</label>
            <input type="text" name="fill_answer" class="form-control" placeholder="Blank Space">
        </div>

        <!-- Subjective Answer -->
        <div id="textAnswer" class="mb-3 d-none">
            <label class="form-label">Answer</label>
            <textarea name="text_answer" class="form-control" rows="3" placeholder="Expected answer or explanation"></textarea>
            <button type="button" class="btn btn-outline-secondary btn-sm mt-2">Load Editor</button>
        </div>

        <!-- Explanation Always Visible -->
        <div class="mb-3">
            <label class="form-label">Explanation (Optional)</label>
            <textarea name="explanation" class="form-control" rows="3" placeholder="Provide explanation in support of correct answer"></textarea>
            <button type="button" class="btn btn-outline-secondary btn-sm mt-2">Load Editor</button>
        </div>

        <!-- Other fields (Group, Subject, Topic, Subtopic, Hint, Marks, Difficulty) remain same -->

        <div class="row mb-3">
            <div class="col-md-3">
                <label class="form-label">Groups</label>
                <select name="group_id" class="form-select">
                    <option value="">None selected</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Subject</label>
                <select name="subject_id" class="form-select">
                    <option value="">Please Select</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Topic</label>
                <select name="topic_id" class="form-select">
                    <option value="">Please Select</option>
                </select>
            </div>
            <div class="col-md-3">
                <label class="form-label">Sub Topic</label>
                <select name="sub_topic_id" class="form-select">
                    <option value="">Please Select</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Hint (Optional)</label>
            <input type="text" name="hint" class="form-control" placeholder="Hint to help answer correctly">
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label class="form-label">Marks</label>
                <input type="number" name="marks" class="form-control" placeholder="Marks">
            </div>
            <div class="col-md-4">
                <label class="form-label">Negative Marks</label>
                <input type="number" name="negative_marks" class="form-control" placeholder="without minus sign">
            </div>
            <div class="col-md-4">
                <label class="form-label">Difficulty Level</label>
                <select name="difficulty_level" class="form-select">
                    <option value="">Please Select</option>
                    <option value="easy">Easy</option>
                    <option value="moderate">Moderate</option>
                    <option value="hard">Hard</option>
                </select>
            </div>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-success">
                <i class="fa fa-plus"></i> Save
            </button>
            <a href="{{ url('admin/questions') }}" class="btn btn-danger">
                <i class="fa fa-times"></i> Close
            </a>
        </div>
    </form>
</div>



@endsection

@push('scripts')
<!-- JS libraries ko include karna -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
    function toggleFields() {
        const selectedType = document.querySelector('input[name="question_type"]:checked').value;
    
        const objectiveDiv = document.getElementById('objectiveFields');
        const trueFalseDiv = document.getElementById('trueFalseFields');
        const fillDiv = document.getElementById('fillAnswer');
        const subjectiveDiv = document.getElementById('textAnswer');
    
        // Objective
        if (selectedType === 'objective') {
            objectiveDiv.style.display = 'block';
            objectiveDiv.classList.remove('d-none');
        } else {
            objectiveDiv.style.display = 'none';
            objectiveDiv.classList.add('d-none');
        }
    
        // True/False
        if (selectedType === 'true_false') {
            trueFalseDiv.style.display = 'block';
            trueFalseDiv.classList.remove('d-none');
        } else {
            trueFalseDiv.style.display = 'none';
            trueFalseDiv.classList.add('d-none');
        }
    
        // Fill in the blanks
        if (selectedType === 'fill_in_the_blanks') {
            fillDiv.style.display = 'block';
            fillDiv.classList.remove('d-none');
        } else {
            fillDiv.style.display = 'none';
            fillDiv.classList.add('d-none');
        }
    
        // Subjective
        if (selectedType === 'subjective') {
            subjectiveDiv.style.display = 'block';
            subjectiveDiv.classList.remove('d-none');
        } else {
            subjectiveDiv.style.display = 'none';
            subjectiveDiv.classList.add('d-none');
        }
    }
    
    document.querySelectorAll('input[name="question_type"]').forEach(input => {
        input.addEventListener('change', toggleFields);
    });
    
    document.addEventListener('DOMContentLoaded', toggleFields);
    </script>
    
@endpush

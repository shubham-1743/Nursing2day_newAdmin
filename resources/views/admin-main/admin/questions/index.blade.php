

@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h4 class="mb-3">Questions</h4>

    <!-- Top Action Buttons -->
    <div class="mb-3 d-flex gap-2">
        <a href="{{ url('admin/questions/create') }}" class="btn btn-success btn-sm">+ Add New Question</a>
        <button class="btn btn-danger btn-sm">🗑 Delete</button>
        <button class="btn btn-info btn-sm">🔁 Import/Export Question</button>
    </div>

    <!-- Filters -->
    <form action="{{ url('admin/questions') }}" method="GET" class="row g-2 mb-3">
        <div class="col-md-2">
            <select name="subject" class="form-control">
                <option value="">Quiz</option>
                <!-- Add dynamic options here -->
            </select>
        </div>
        <div class="col-md-2">
            <select name="topic" class="form-control">
                <option value="">Quiz</option>
            </select>
        </div>
        <div class="col-md-2">
            <select name="type" class="form-control">
                <option value="">Objective</option>
            </select>
        </div>
        <div class="col-md-2">
            <select name="difficulty" class="form-control">
                <option value="">Easy</option>
            </select>
        </div>
        <div class="col-md-2 d-flex gap-2">
            <button type="submit" class="btn btn-success">Search</button>
            <a href="{{ url('admin/questions') }}" class="btn btn-warning">Reset</a>
        </div>
    </form>
    <a href="{{ url('admin/exams') }}" id="backBtn" class="btn btn-primary btn-sm mb-3" style="display: none;"><span class="fa fa-arrow-left"></span>
        Back to Exam 
    </a>

    <!-- Questions Table -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th><input type="checkbox" /></th>
                            <th>#</th>
                            <th>Question</th>
                            <th>Subject</th>
                            <th>Topic</th>
                            <th>Sub Topic</th>
                            <th>Group</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td><input type="checkbox" name="question_ids[]" value=""></td>
                            <td>1</td>
                            <td>Scabies is caused by?

                            </td>
                            <td>Quiz</td>
                            <td>Quiz</td>
                            <td>Quiz</td>
                            <td>NURSING EXAM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle"
                                            type="button"
                                            id="dropdownMenuButton"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            
                                        <a class="dropdown-item" href="{{ route('questions.language') }}">
                                            <i class="fa fa-edit"></i> Question Language
                                        </a>
                            
                                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#questionViewModal">
                                            <i class="fa fa-eye"></i> View
                                        </a>
                            
                                        <a class="dropdown-item" href="{{ url('admin/questions/{id}/edit') }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                            
                                        <a class="dropdown-item text-danger" href="javascript:void(0);">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                            
                                    </div>
                                </div>
                            </td>
                            

                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Question View Modal -->
    <div class="modal fade" id="questionViewModal" tabindex="-1" aria-labelledby="questionViewLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="questionViewLabel">Question Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">


                    <!-- Right Column: Question Info -->
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Question Type</th>
                                    <td>Objective</td>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <td>NORCET</td>
                                </tr>
                                <tr>
                                    <th>Topic</th>
                                    <td>NORCET / Nursing Officer Test Series 2025</td>
                                </tr>
                                <tr>
                                    <th>Sub Topic</th>
                                    <td>YODDHA TEST SERIES PAPER - 03</td>
                                </tr>
                                <tr>
                                    <th>Question</th>
                                    <td>
                                        A nurse is caring for a client in labor.<br> The nurse determines that the client is beginning in <br>the 2nd stage of labor when which of the following assessments is noted?
                                    </td>
                                </tr>
                                <tr>
                                    <th>Option 1</th>
                                    <td>The client begins to expel clear vaginal fluid</td>
                                </tr>
                                <tr>
                                    <th>Option 2</th>
                                    <td>The contractions are regular</td>
                                </tr>
                                <tr>
                                    <th>Option 3</th>
                                    <td>The membranes have ruptured</td>
                                </tr>
                                <tr>
                                    <th>Option 4</th>
                                    <td>The cervix is dilated completely</td>
                                </tr>
                                <tr>
                                    <th>Correct Answer</th>
                                    <td>Option 4</td>
                                </tr>
                                <tr>
                                    <th>Explanation</th>
                                    <td>The client begins to expel clear vaginal fluid</td>
                                </tr>
                                <tr>
                                    <th>Marks</th>
                                    <td>1.00</td>
                                </tr>
                                <tr>
                                    <th>Negative Marks</th>
                                    <td>0.33</td>
                                </tr>
                                <tr>
                                    <th>Difficulty Level</th>
                                    <td>Medium</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



</div>
@endsection

@push('scripts')


<script>
  if (sessionStorage.getItem('fromExams') === 'yes') {
      document.getElementById('backBtn').style.display = 'inline-block';
  }
</script>


@endpush

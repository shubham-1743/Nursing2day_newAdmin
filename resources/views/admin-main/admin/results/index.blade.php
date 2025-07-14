
@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <!-- Exam Wise Section -->
    <h4 class="mb-3">Exam Wise</h4>
    <div class="card mb-4">
        <div class="card-body">
            <form action="" method="GET">
                <div class="row align-items-end">
                    <!-- Group -->
                    <div class="col-md-3">
                        <label for="group_id_exam" class="form-label">Group</label>
                        <select name="group_id_exam" id="group_id_exam" class="form-control">
                            <option value="">None selected</option>
                        </select>
                    </div>

                    <!-- Name of Exam -->
                    <div class="col-md-4">
                        <label for="exam_id" class="form-label">Name of Exam</label>
                        <select name="exam_id" id="exam_id" class="form-control">
                            <option value="">Please Select Exam</option>
                        </select>
                    </div>

                    <!-- Status of Result -->
                    <div class="col-md-3">
                        <label for="result_status" class="form-label">Status of Result</label>
                        <select name="result_status" id="result_status" class="form-control">
                            <option value="">Please Select Result Status</option>
                        </select>
                    </div>

                    <!-- Search Button -->
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success mt-3"><i class="fa fa-search"></i> Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Exam Wise Result -->
    {{-- <div class="card mb-5">
        <div class="card-header">
            <strong>Exam Wise Results</strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student Name</th>
                        <th>Enrolment No.</th>
                        <th>Marks</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Static data example -->
                    <tr>
                        <td>1</td>
                        <td>Ravi Kumar</td>
                        <td>NTD2023001</td>
                        <td>85</td>
                        <td><span class="badge badge-success">Pass</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Meena Sharma</td>
                        <td>NTD2023002</td>
                        <td>68</td>
                        <td><span class="badge badge-warning">Waiting</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}

    <!-- Student Wise Section -->
    <h4 class="mb-3">Student Wise</h4>
    <div class="card mb-4">
        <div class="card-body">
            <form action="" method="GET">
                <div class="row align-items-end">
                    <!-- Enrolment or Name -->
                    <div class="col-md-6">
                        <label for="student_query" class="form-label">Name or Enrolment Number</label>
                        <input type="text" name="student_query" id="student_query" class="form-control" placeholder="Name or Enrolment Number">
                    </div>

                    <!-- Group -->
                    <div class="col-md-4">
                        <label for="group_id_student" class="form-label">Group</label>
                        <select name="group_id_student" id="group_id_student" class="form-control">
                            <option value="">None selected</option>
                        </select>
                    </div>

                    <!-- Search Button -->
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success mt-3"><i class="fa fa-search"></i> Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Student Wise Result -->
    {{-- <div class="card">
        <div class="card-header">
            <strong>Student Wise Results</strong>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Exam</th>
                        <th>Marks</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Static data example -->
                    <tr>
                        <td>1</td>
                        <td>OBG Nursing</td>
                        <td>72</td>
                        <td><span class="badge badge-success">Pass</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Child Health</td>
                        <td>49</td>
                        <td><span class="badge badge-danger">Fail</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}
</div>

@endsection
@push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Popper.js (required for Bootstrap 4 dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Bootstrap 4 JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- <script>
        function check_perform_sedit() {
            alert('Edit clicked');
        }

        function check_perform_sdelete(id) {
            alert('Delete clicked with ID: ' + id);
        }
    </script> --}}
@endpush


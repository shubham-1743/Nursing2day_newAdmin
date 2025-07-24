@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>Exams</h3>

    <!-- Top action buttons -->
    <div class="mb-3">
        <a href="{{url('admin/exams/create')}}" class="btn btn-success btn-sm">+ Add New Exam</a>
        <a href="" class="btn btn-warning btn-sm">Edit</a>
        <a href="" onclick="event.preventDefault(); document.getElementById('delete-form').submit();" class="btn btn-danger btn-sm">
            Delete
        </a>

        <form id="delete-form" action="" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    </div>


    <!-- Top search -->
    <div class="mb-2 d-flex">
        <input type="text" class="form-control w-25" placeholder="Search">
        <button class="btn btn-success ms-2"><i class="fa fa-search"></i></button>
    </div>

    <!-- Group table -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>#</th>
                            <th>Exam Name</th>
                            <th>Start & End date</th>
                            <th>Groups</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Result</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>Hindi</td>
                            <td>11/07/2025 & 12/07/2025</td>
                            <td>NURSING EXAM | MAD GURU'S | B. Sc. Nursing 4th Year Students </td>
                            <td>Quiz</td>
                            <td>
                                <aspan class="badge badge-success light border-0">status</span>
                            </td>
                            <td> <a href="javascript:void(0);" class="btn btn-primary btn-sm"><i class="fa fa-file-excel-o"></i>Download Result</a></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item btn-success" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#examViewModal">
                                            <i class="fa fa-arrows-alt"></i>View
                                        </a>
                                        <a class="dropdown-item btn-success" href="javascript:void(0);">
                                            <i class="fa fa-file-excel-o"></i>Export Feedback
                                        </a>
                                        <a class="dropdown-item btn-success" href="javascript:void(0);">
                                            <i class="fa fa-file-excel-o"></i>Export browser Torlrance
                                        </a>
                                        <a class="dropdown-item btn-success" href="{{ url('admin/questions') }}" onclick="setFromExams()">
                                            <i class="fa fa-arrows-alt"></i> +View Question
                                        </a>
                                        <a class="dropdown-item" href="{{ url('admin/exams/{id}/edit') }}">
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
    {{-- exam view model --}}
    <div class="modal fade" id="examViewModal" tabindex="-1" aria-labelledby="examViewLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="examViewLabel">Exam Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <table class="table table-bordered">
                        <tr>
                            <th>Exam Name</th>
                            <td>YODDHA TEST SERIES PAPER - 03</td>
                            <th>Package</th>
                            <td>NORCET / Nursing Officer Test Series</td>
                            <td rowspan="3" class="text-center align-middle">
                                <button class="btn btn-success btn-sm" onclick="window.location.href='{{ route('exams.Attemptpaper') }}'">
                                    Finalize Result
                                </button>
                                <br><br>
                                <button class="btn btn-danger btn-sm">Close Exam</button>
                            </td>
                        </tr>
                        <tr>
                            <th>Eligible Group</th>
                            <td colspan="3">(1) NURSING EXAM (2) MAD GURU'S (3) B. Sc. Nursing 4th Year Students</td>
                        </tr>
                        <tr>
                            <th>Start Date</th>
                            <td>17-07-2025 12:00 AM</td>
                            <th>End Date</th>
                            <td>31-12-2025 12:00 AM</td>
                        </tr>
                        <tr>
                            <th>Show Answer Sheet</th>
                            <td>Yes</td>
                            <th>Browser Tolerance</th>
                            <td>No</td>
                        </tr>
                        <tr>
                            <th>Result After Finish</th>
                            <td>Yes</td>
                            <th>Mode</th>
                            <td>Exam</td>
                        </tr>
                        <tr>
                            <th>Duration</th>
                            <td>1 Hours 30 Mins</td>
                            <th>Multi Language</th>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <th>Instant Result</th>
                            <td>No</td>
                            <th>Option Shuffle</th>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <th>Attempt Count</th>
                            <td>10</td>
                            <th>Total Marks</th>
                            <td>100.00</td>
                        </tr>
                    </table>

                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Subjective</th>
                                <th>Objective</th>
                                <th>True & False</th>
                                <th>Fill in the blanks</th>
                                <th>Difficulty Level</th>
                                <th>Total Questions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>NORCET</td>
                                <td>0</td>
                                <td>100</td>
                                <td>0</td>
                                <td>0</td>
                                <td>Easy (0) Medium (100) Hard (0)</td>
                                <td>100</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th>0</th>
                                <th>100</th>
                                <th>0</th>
                                <th>0</th>
                                <th>Easy (0) Medium (100) Hard (0)</th>
                                <th>100</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection
@push('scripts')

<script>
    function setFromExams() {
        sessionStorage.setItem('fromExams', 'yes');
    }
</script>
<script>
    sessionStorage.removeItem('fromExams');
</script>


@endpush

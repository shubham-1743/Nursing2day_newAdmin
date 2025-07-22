@extends('student-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li>
            <h5 class="bc-title">My Quiz</h5>
        </li>
    </ol>
</div>

<!-- Tabs -->
<ul class="nav nav-tabs" id="examTabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="free-tab" data-toggle="tab" href="#free" role="tab">FREE QUIZ</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="paid-tab" data-toggle="tab" href="#paid" role="tab">PAID QUIZ</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="upcoming-tab" data-toggle="tab" href="#upcoming" role="tab">UPCOMING QUIZ</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="expired-tab" data-toggle="tab" href="#expired" role="tab">EXPIRED QUIZ</a>
    </li>
</ul>

<!-- Tab Content -->
<div class="tab-content mt-3" id="examTabsContent">

    <!-- Free Exam -->
    <div class="tab-pane fade show active" id="free" role="tabpanel">
        <div class="card card-body">
            <h5>Free Quiz</h5>
            <p>These are the free quiz that can be taken right now</p>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Package</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Expiry Date</th>
                        <th>Attempts Remaining</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Jodhpur AIIMS Exam Model Paper</td>
                        <td>Jodhpur AIIMS Exam Paid Model Paper 7</td>
                        <td>Exam</td>
                        <td>05-02-2020</td>
                        <td>24-09-2025</td>
                        <td>01-02-2026</td>
                        <td>999</td>
                        <td><a href="#" data-toggle="modal" data-target="#viewDetailsModal" title="View Details" class="btn btn-info">
                                <span class="fa fa-arrows-alt"></span>
                            </a>
                            <a href="{{ route('student.quiz_start') }}" onclick="window.open(this.href, 'examWindow', 'width=1000,height=700,resizable=yes,scrollbars=yes'); return false;" data-toggle="tooltip" title="Attempt Now" class="btn btn-success">
                                <span class="fa fa-sign-in"></span>
                            </a>

                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Paid Exam -->
    <div class="tab-pane fade" id="paid" role="tabpanel">
        <div class="card card-body">
            <h5>Paid Quiz</h5>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Package</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Expiry Date</th>
                        <th>Attempts Remaining</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Jodhpur AIIMS Exam Model Paper</td>
                        <td>Jodhpur AIIMS Exam Paid Model Paper 7</td>
                        <td>Exam</td>
                        <td>05-02-2020</td>
                        <td>24-09-2025</td>
                        <td>01-02-2026</td>
                        <td>999</td>
                        <td><a href="#" data-toggle="modal" data-target="#viewDetailsModal1" title="View Details" class="btn btn-info">
                                <span class="fa fa-arrows-alt"></span>
                            </a>
                            <a href="{{ route('student.quiz_start') }}" onclick="window.open(this.href, 'examWindow', 'width=1000,height=700,resizable=yes,scrollbars=yes'); return false;" data-toggle="tooltip" title="Attempt Now" class="btn btn-success">
                                <span class="fa fa-sign-in"></span>
                            </a>

                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Upcoming Exam -->
    <div class="tab-pane fade" id="upcoming" role="tabpanel">
        <div class="card card-body">
            <h5>Upcoming Quiz</h5>
            <P>These are the quiz that are planned you in near future</P>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Package</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Expiry Date</th>
                        <th>Attempts Remaining</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ANM 2025 Test Series</td>
                        <td>ANM 2025 Test Paper 9</td>
                        <td>Exam</td>
                        <td>31-07-2025</td>
                        <td>31-12-2026</td>
                        <td>30-11-2025</td>
                        <td>20</td>
                        <td><a href="#" data-toggle="modal" data-target="#viewDetailsModal2" title="View Details" class="btn btn-info">
                                <span class="fa fa-arrows-alt"></span>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Expired Exam -->
    <div class="tab-pane fade" id="expired" role="tabpanel">
        <div class="card card-body">
            <h5>Expired Quiz</h5>
            <P>No Quiz Found</P>

        </div>
    </div>

    <div class="modal fade" id="viewDetailsModal" tabindex="-1" role="dialog" aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Quiz Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Payment Details Table -->
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><strong class="text-primary">Name</strong></td>
                                <td><strong class="text-success">Lie and Mal Presentation -Quiz 1 (General Question)</strong></td>
                                <td><strong class="text-primary">Type</strong></td>
                                <td><strong class="text-success">Quiz</strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-primary">Passing Percentage</strong></td>
                                <td><strong class="text-success">40%</strong></td>
                                <td><strong class="text-primary">Duration</strong></td>
                                <td><strong class="text-success">5 Mins </strong>
                                </td>
                            </tr>
                            <tr>
                                <td><strong class="text-primary">Start Date</strong></td>
                                <td><strong class="text-success">11-01-2020</strong>
                                </td>
                                <td><strong class="text-primary">End Date</strong></td>
                                <td><strong class="text-success">31-12-2025</strong>
                                </td>
                            </tr>
                            <tr>
                                <td><strong class="text-primary">Negative Marking</strong></td>
                                <td><strong class="text-success">No</strong>
                                </td>
                                <td><strong class="text-primary">Total Marks</strong>
                                </td>
                                <td><strong class="text-success">10.00</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th><strong class="text-primary">Subject</strong></th>
                                <th><strong class="text-primary">Total Question</strong></th>
                            </tr>
                            <tr>
                                <td><strong class="text-success">NURSING EXAM</strong></td>
                                <td><strong class="text-success">2</strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-success">Obstetrics &amp; gynaecology</strong></td>
                                <td><strong class="text-success">8</strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-danger">Total</strong></td>
                                <td><strong class="text-danger">10</strong></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <a href="{{ route('student.quiz_start') }}" onclick="window.open(this.href, 'examWindow', 'width=1000,height=700,resizable=yes,scrollbars=yes'); return false;" data-toggle="tooltip" title="Attempt Now" class="btn btn-success">
                                        <span class="fa fa-sign-in"></span>Attempt Now
                                    </a>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="viewDetailsModal1" tabindex="-1" role="dialog" aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Quiz Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Payment Details Table -->
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><strong class="text-primary">Name</strong></td>
                                <td><strong class="text-success">Quiz 1 (General Question)</strong></td>
                                <td><strong class="text-primary">Type</strong></td>
                                <td><strong class="text-success">Quiz</strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-primary">Passing Percentage</strong></td>
                                <td><strong class="text-success">3%</strong></td>
                                <td><strong class="text-primary">Duration</strong></td>
                                <td><strong class="text-success">10 Mins </strong>
                                </td>
                            </tr>
                            <tr>
                                <td><strong class="text-primary">Start Date</strong></td>
                                <td><strong class="text-success">11-04-2020</strong>
                                </td>
                                <td><strong class="text-primary">End Date</strong></td>
                                <td><strong class="text-success">31-12-2025</strong>
                                </td>
                            </tr>
                            <tr>
                                <td><strong class="text-primary">Negative Marking</strong></td>
                                <td><strong class="text-success">Yes</strong>
                                </td>
                                <td><strong class="text-primary">Total Marks</strong>
                                </td>
                                <td><strong class="text-success">10.00</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th><strong class="text-primary">Subject</strong></th>
                                <th><strong class="text-primary">Total Question</strong></th>
                            </tr>
                            <tr>
                                <td><strong class="text-success">Current GK</strong></td>
                                <td><strong class="text-success">2</strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-success">General question</strong></td>
                                <td><strong class="text-success">7</strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-success">Math</strong></td>
                                <td><strong class="text-success">1</strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-danger">Total</strong></td>
                                <td><strong class="text-danger">10</strong></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <a href="{{ route('student.quiz_start') }}" onclick="window.open(this.href, 'examWindow', 'width=1000,height=700,resizable=yes,scrollbars=yes'); return false;" data-toggle="tooltip" title="Attempt Now" class="btn btn-success">
                                        <span class="fa fa-sign-in"></span>Attempt Now
                                    </a>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewDetailsModal2" tabindex="-1" role="dialog" aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Quiz Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Payment Details Table -->
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><strong class="text-primary">Name</strong></td>
                                <td><strong class="text-success">History</strong></td>
                                <td><strong class="text-primary">Type</strong></td>
                                <td><strong class="text-success">Quiz</strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-primary">Passing Percentage</strong></td>
                                <td><strong class="text-success">1%</strong></td>
                                <td><strong class="text-primary">Duration</strong></td>
                                <td><strong class="text-success">1 Hours </strong>
                                </td>
                            </tr>
                            <tr>
                                <td><strong class="text-primary">Start Date</strong></td>
                                <td><strong class="text-success">08-09-2025</strong>
                                </td>
                                <td><strong class="text-primary">End Date</strong></td>
                                <td><strong class="text-success">30-11-2025</strong>
                                </td>
                            </tr>
                            <tr>
                                <td><strong class="text-primary">Negative Marking</strong></td>
                                <td><strong class="text-success">Yes</strong>
                                </td>
                                <td><strong class="text-primary">Total Marks</strong>
                                </td>
                                <td><strong class="text-success">10.00</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th><strong class="text-primary">Subject</strong></th>
                                <th><strong class="text-primary">Total Question</strong></th>
                            </tr>
                            <tr>
                                <td><strong class="text-success">NURSING EXAM</strong></td>
                                <td><strong class="text-success">10</strong></td>
                            </tr>
                            <tr>
                                <td><strong class="text-danger">Total</strong></td>
                                <td><strong class="text-danger">10</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush

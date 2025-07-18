@extends('student-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">My Exams</h5></li>
    </ol>
</div>

<!-- Tabs -->
<ul class="nav nav-tabs" id="examTabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="free-tab" data-toggle="tab" href="#free" role="tab">FREE EXAM</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="paid-tab" data-toggle="tab" href="#paid" role="tab">PAID EXAM</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="upcoming-tab" data-toggle="tab" href="#upcoming" role="tab">UPCOMING EXAM</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="expired-tab" data-toggle="tab" href="#expired" role="tab">EXPIRED EXAM</a>
    </li>
</ul>

<!-- Tab Content -->
<div class="tab-content mt-3" id="examTabsContent">

    <!-- Free Exam -->
    <div class="tab-pane fade show active" id="free" role="tabpanel">
        <div class="card card-body">
            <h5>Free Exam</h5>
            <p>No Exams found</p>
        </div>
    </div>

    <!-- Paid Exam -->
    <div class="tab-pane fade" id="paid" role="tabpanel">
        <div class="card card-body">
            <h5>Paid Exam</h5>
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
                        <td><a href="javascript:void(0);" data-toggle="tooltip" title="View details"  class="btn btn-info" ><span class="fa fa-arrows-alt"></span></a> 
                            <a href="javascript:void(0);" data-toggle="tooltip" title="Attempt Now"  class="btn btn-info" ><span class="fa fa-sign-in"></span></a> 

                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>

    <!-- Upcoming Exam -->
    <div class="tab-pane fade" id="upcoming" role="tabpanel">
        <div class="card card-body">
            <h5>Upcoming Exam</h5>
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
                        <td><a href="javascript:void(0);" data-toggle="tooltip" title="View details"  class="btn btn-info" ><span class="fa fa-arrows-alt"></span></a> 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Expired Exam -->
    <div class="tab-pane fade" id="expired" role="tabpanel">
        <div class="card card-body">
            <h5>Expired Exam</h5>
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>NORCET - 2021 Test Series</td>
                        <td>NORCET 2021 MODEL PAPER 1</td>
                        <td>Exam</td>
                        <td>01-01-2021</td>
                        <td>31-12-2025</td>
                        <td>02-05-2025</td>
                        <td><a href="javascript:void(0);" data-toggle="tooltip" title="View details"  class="btn btn-info" ><span class="fa fa-arrows-alt"></span></a> 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush

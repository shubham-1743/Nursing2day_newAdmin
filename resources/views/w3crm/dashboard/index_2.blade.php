@extends('admin-main.layouts.default')
@section('content')


<!-- row -->
<div class="page-titles">
    <ol class="breadcrumb">
        <li>
            <h5 class="bc-title">Dashboard</h5>
        </li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                Home </a>
        </li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
    </ol>
    <!--<a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>-->
</div>

{{-- Display success message --}}
@if (session('success'))
<div class="alert alert-success mt-2">
    {{ session('success') }}
</div>
@endif
<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-9 wid-100">
            <div class="row">
                <div class="col-xl-3 mb-0 col-sm-6 mb-0">
                    <div class="card box-hover">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-box icon-box-lg bg-success-light rounded-circle">
                                    <i class="fa fa-ellipsis-h"></i>
                                </div>
                                <div class="total-projects ms-3">
                                    <h3 class="text-success count">245</h3>
                                    <span> IN PROGRESS EXAM
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 mb-0 col-sm-6 mb-0">
                    <div class="card box-hover ">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-box icon-box-lg bg-primary-light rounded-circle">
                                    <i class="fa fa-cloud"></i>

                                </div>
                                <div class="total-projects ms-3">
                                    <h3 class="text-primary count">5</h3>
                                    <span>

                                        UPCOMING EXAM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-0 col-sm-6 mb-0">
                    <div class="card box-hover ">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-box icon-box-lg bg-purple-light rounded-circle">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="total-projects ms-3">
                                    <h3 class="text-purple count">0</h3>
                                    <span>COMPLETED EXAM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 m-0 col-sm-6 m-0">
                    <div class="card box-hover">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-box icon-box-lg bg-danger-light rounded-circle">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <div class="total-projects ms-3">
                                    <h3 class="text-danger count">24,264</h3>
                                    <span>

                                        STUDENTS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 m-0 col-sm-6 m-0">
                    <div class="card box-hover">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="icon-box icon-box-lg bg-purple-light rounded-circle">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="total-projects ms-3">
                                    <h3 class="text-purple count">183,984.00</h3>
                                    <span>

                                        TODAY SALE</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-12">
                    <div class="card overflow-hidden">
                        <div class="card-header border-0 pb-0 flex-wrap">
                            <h4 class="heading mb-0">Recent Earnings</h4>
                            <ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab" aria-selected="true">Week</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-selected="false">Month</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab" aria-selected="false">Year</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body  p-0">
                            <div id="overiewChart"></div>
                            <div class="ttl-project">
                                <div class="pr-data">
                                    <h5>12,721</h5>
                                    <span>Number of Projects</span>
                                </div>
                                <div class="pr-data">
                                    <h5 class="text-primary">721</h5>
                                    <span>Active Projects</span>
                                </div>
                                <div class="pr-data">
                                    <h5>$2,50,523</h5>
                                    <span>Revenue</span>
                                </div>
                                <div class="pr-data">
                                    <h5 class="text-success">12,275h</h5>
                                    <span>Working Hours</span>
                                </div>
                            </div>
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
    jQuery(document).ready(function() {
        setTimeout(function() {
            dzSettingsOptions.version = 'light';
            new dzSettings(dzSettingsOptions);
        }, 1500)
    });

</script>
@endpush
@push('modals')

@endpush

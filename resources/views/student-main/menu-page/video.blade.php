@extends('student-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">My Video</h5></li>
    </ol>
</div>

<!-- Tabs -->
<ul class="nav nav-tabs" id="examTabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="free-tab" data-toggle="tab" href="#free" role="tab">FREE VIDEO </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="paid-tab" data-toggle="tab" href="#paid" role="tab">PAID VIDEO</a>
    </li>
  
</ul>

<!-- Tab Content -->
<div class="tab-content mt-3" id="examTabsContent">

    <!-- Free Exam -->
    <div class="tab-pane fade show active" id="free" role="tabpanel">
        <div class="card card-body">
            <h5>Free Video</h5>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No Study Material found and For Access your video classes Please download our Nursing2dayApp from Play store.</th>
                       
                    </tr>
                </thead>
                <tbody>
                   
                   
                </tbody>
            </table>
        </div>
    </div>

    <!-- Paid Exam -->
    <div class="tab-pane fade" id="paid" role="tabpanel">
        <div class="card card-body">
            <h5>Paid Video</h5>
            <p>For Access your video classes Please download our Nursing2dayApp from Play store. </p>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No Video found and For Access your video classes Please download our Nursing2dayApp from Play store.</th>
                        
                    </tr>
                </thead>
                <tbody>
                   
                   
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

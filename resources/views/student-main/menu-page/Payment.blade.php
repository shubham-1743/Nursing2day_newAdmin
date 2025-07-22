@extends('student-main.layouts.default')
@section('content')
<div class="container-fluid">
    <h3>Payments
    </h3>

   
    <!-- Group table -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>S.NO.</th>
                            <th>Transaction ID</th>
                            <th>Payment Gateway<br>Transaction ID</th>
                            <th>Amount</th>
                            <th>Coupon Discount</th>
                            <th>Net Amount</th>
                            <th>Date & Time</th>
                            <th>Payment Mode</th>
                            <th>Remarks</th>
                            <th>Details</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>175205195</td>
                            <td>1752051</td>
                            <td><i class="fa-solid fa-indian-rupee-sign"></i>1,998.00</td>
                            <td>0</td>
                            <td><i class="fa-solid fa-indian-rupee-sign"></i>1,998.00</td>
                            <td>09-07-2025 02:35:57 PM</td>
                            <td>Administrator</td>
                            <td><span class="label label-success">Success</span></td>
                            <td><a href="#" data-toggle="modal" data-target="#viewDetailsModal" title="View Details" class="btn btn-info">
                                <span class="fa fa-arrows-alt"></span>
                            </a>
                            
                                <a href="{{route('student.exam')}}" class="btn btn-success">&nbsp;Take Exam</a>
    
                            </td>
                         
                           
                            
                        </tr>
                        
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   
</div>
<!-- View Details Modal -->
<div class="modal fade" id="viewDetailsModal" tabindex="-1" role="dialog" aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Payment Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Payment Details Table -->
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>S.No.</th>
                <th>Package Name</th>
                <th>Exams</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Expiry Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><strong>ANM Live Online Course 2025</strong></td>
                <td>Exams</td>
                <td>₹ 1998.00</td>
                <td>1</td>
                <td>₹ 1998.00</td>
                <td>09-07-2025</td>
                <td>05-01-2026</td>
              </tr>
              <tr>
                <td colspan="4" class="text-right"><strong>Total :</strong></td>
                <td>1</td>
                <td>₹ 1998</td>
                <td colspan="2"></td>
              </tr>
            </tbody>
          </table>
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
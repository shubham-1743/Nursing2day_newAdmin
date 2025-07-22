@extends('student-main.layouts.default')
@section('content')
<div class="container-fluid">
    <h3>My Results
    </h3>

   
    <!-- Group table -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>S.NO.</th>
                            <th>Exam Name</th>
                            <th>Attempt Date</th>
                            <th>Marks Scored/Max.Marks</th>
                            <th>Parcentage</th>
                            <th>Result</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>NORCET 2021 MODEL PAPER 1</td>
                            <td>14-07-2025 03:02:19 PM</td>
                            <td>1.67/100.00</td>
                            <td>1.67%</td>
                            <td><span class="label label-danger">FAILED</span></td>
                            <td><a href="{{route('student.view')}}" data-toggle="tooltip" title="View Details"  class="btn btn-info" ><span class="fa fa-arrows-alt"></span></a> 
                                <a href="javascript:void(0);" data-toggle="tooltip" title=""  class="btn btn-info" ><span class="fa-solid fa-print"></span></a> 
    
                            </td>
                         
                           
                            
                        </tr>
                        
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   
</div>

@endsection
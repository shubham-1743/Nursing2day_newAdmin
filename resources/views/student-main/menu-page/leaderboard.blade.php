@extends('student-main.layouts.default')
@section('content')
<div class="container-fluid">
    <h3>Leader Board
    </h3>

   
    <!-- Group table -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>Photo</th>
                            <th>Rank</th>
                            <th>Name</th>
                            <th>Average Parcentage(%)</th>
                            <th>Exam Given</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="" alt="image"></td>
                            <td>1</td>
                            <td>Rohit</td>
                            <td>100.00%</td>
                            <td>6</td>
                         
                           
                            
                        </tr>
                        
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   
</div>

@endsection
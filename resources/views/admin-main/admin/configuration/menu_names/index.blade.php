
@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>Menu Names
    </h3>

    <!-- Top action buttons -->
    <div class="mb-3">
       
        <a href="javascript:void(0);" type="button"   class="btn btn-warning"><span class="fa fa-edit"></span>&nbsp;Edit</a>
        
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
                            <th>Model Name</th>
                            <th>Page Name</th>
                            <th>Icon</th>
                            <th>Ordering</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>Dashboard</td>
                            <td>Dashboard	</td>
                            <td>fa fa-dashboard fa-fw	</td>
                            <td>1</td>
                            <td>
                                <a href="{{ url('admin/Menunames/{id}/edit') }}" type="button"   class="btn btn-warning"><span class="fa fa-edit"></span>&nbsp;Edit</a>
                               
                            </td>
                            
                        </tr>
                        
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bottom search -->
    <div class="mt-3 d-flex">
        <input type="text" class="form-control w-25" placeholder="Search">
        <button class="btn btn-success ms-2"><i class="fa fa-search"></i></button>
    </div>
</div>
@endsection
@push('scripts')
    
@endpush


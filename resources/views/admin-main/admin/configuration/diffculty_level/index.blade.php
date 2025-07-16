
@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>Difficulty Level
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
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td>Easy</td>
                            <td>
                                <a href="{{ url('admin/diffcultys/{id}/edit') }}" type="button"   class="btn btn-warning"><span class="fa fa-edit"></span>&nbsp;Edit</a>
                               
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


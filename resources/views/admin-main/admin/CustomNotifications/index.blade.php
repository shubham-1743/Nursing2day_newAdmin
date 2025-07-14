
@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h3>CustomNotifications
    </h3>

    <!-- Top action buttons -->
    <div class="mb-3">
        <a href="{{url('admin/CustomNotifications/create')}}" class="btn btn-success btn-sm">+Add New CustomNotifications
        </a>
        <a href=""
           onclick="event.preventDefault(); document.getElementById('delete-form').submit();"
           class="btn btn-danger btn-sm">
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
                            <th>Photo</th>
                            <th>CustomNotification url Title</th>
                            <th>Url</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>1</td>
                            <td><img src="" alt="">	</td>
                            <td>#Rajasthan_CHO 2023 || CHO 2023 || OBG Special Session by Mahendra Sir On Youtube Date - 09 Nov. 22 at 07:30 pm</td>
                            <td>https://play.google.com/store/apps/details?id=com.pnp.nursingtwoday.activity&hl=en_IN&gl=US</td>
                            <td>  <aspan class="badge badge-success light border-0">status</span></td>
                            
                           
                           
                            
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


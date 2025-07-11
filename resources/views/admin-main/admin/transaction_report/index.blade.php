@extends('admin-main.layouts.default')
@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">MANAGE Board of Education</h5></li>
    </ol>
    <a class="text-primary fs-13" href="{{url('admin/Boards/create')}}">+ Add Boards</a>
</div>
<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header py-3 d-sm-flex d-block">
                    <h4 class="card-title mb-2">Board of Education</h4>
                </div>
                <div class="card-header d-block pb-2">
                    <form class="row align-items-end" method="GET" action="">
                        <div class="col-xl-2 col-sm-6 col-lg-4 mb-3">
                            <label class="form-label">Board</label>
                            <select id="locationFilter" class="form-control default-select">
                                <option value="">Select</option>
                                <option value="RBSE">RBSE</option>
                                <option value="CBSE">CBSE</option>
                               
                            </select>
                        </div>
                        

                        <div class="col-xl-2 col-sm-6 col-lg-4 mb-3">
                            <button id="applyFilter" class="btn btn-primary" type="submit">Apply</button>
                            <a href="" class="btn btn-danger light ms-2" type="button">Reset</a>
                        </div>
                    </form>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive active-projects style-1">
                        <table id="empoloyees-tblwrapper" class="table">
                            <thead>
                                <tr>
                                    <th>Board Name </th>
                                    <th>Remark</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($board as $boards)

                                <tr>
                                    <td>{{$boards->board_name}}</td>
                                    <td>{{$boards->remark}}</td>
                                    <td>
                                        <aspan class="badge badge-success light border-0">{{$boards->status}}</span>
                                    </td> 
                                    <td>
                                        <a class="badge badge-info light border-0" href="{{url('admin/Boards/edit',$boards->id)}}">Edit</a>
                                        <form action="{{ url('admin/Boards/delete', $boards->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="badge badge-danger light border-0" onclick="return confirm('Are you sure you want to delete this Boards?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                                    
                                @endforeach
                               
                               
                                
                            </tbody>
                        </table>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@push('scripts')
    <script>
        $(document).on('click', '.delete-port', function(e) {
            e.preventDefault();
            if (!confirm('Are you sure you want to delete this port record?')) return;

            const portId = $(this).data('id');

            $.ajax({
                url: '/admin/ports/' + portId,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    alert('Port Record deleted successfully.');
                    location.reload();
                },
                error: function(xhr) {
                    alert('Failed to delete port record.');
                    console.log(xhr.responseText);
                }
            });
        });
    </script>

@endpush


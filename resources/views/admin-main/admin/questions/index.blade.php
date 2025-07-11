@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid">
    <h4 class="mb-3">Questions</h4>

    <!-- Top Action Buttons -->
    <div class="mb-3 d-flex gap-2">
        <a href="{{ url('admin/questions/create') }}" class="btn btn-success btn-sm">+ Add New Question</a>
        <button class="btn btn-danger btn-sm">🗑 Delete</button>
        <button class="btn btn-info btn-sm">🔁 Import/Export Question</button>
    </div>

    <!-- Filters -->
    <form action="{{ url('admin/questions') }}" method="GET" class="row g-2 mb-3">
        <div class="col-md-2">
            <select name="subject" class="form-control">
                <option value="">Quiz</option>
                <!-- Add dynamic options here -->
            </select>
        </div>
        <div class="col-md-2">
            <select name="topic" class="form-control">
                <option value="">Quiz</option>
            </select>
        </div>
        <div class="col-md-2">
            <select name="type" class="form-control">
                <option value="">Objective</option>
            </select>
        </div>
        <div class="col-md-2">
            <select name="difficulty" class="form-control">
                <option value="">Easy</option>
            </select>
        </div>
        <div class="col-md-2 d-flex gap-2">
            <button type="submit" class="btn btn-success">Search</button>
            <a href="{{ url('admin/questions') }}" class="btn btn-warning">Reset</a>
        </div>
    </form>

    <!-- Questions Table -->
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th><input type="checkbox" /></th>
                            <th>#</th>
                            <th>Question</th>
                            <th>Subject</th>
                            <th>Topic</th>
                            <th>Sub Topic</th>
                            <th>Group</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
                        <tr>
                            <td><input type="checkbox" name="question_ids[]" value=""></td>
                            <td>1</td>
                            <td>Scabies is caused by?

                            </td>
                            <td>Quiz</td>
                            <td>Quiz</td>
                            <td>Quiz</td>
                            <td>NURSING EXAM</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle"
                                            type="button"
                                            id="dropdownMenuButton"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-edit"></i> Question Language</a>
                                        <a class="dropdown-item" href="javascript:void(0);"><i class="fa fa-eye"></i> View</a>
                                        
                                        <a class="dropdown-item" href="{{ url('admin/questions/{id}/edit') }}" onclick="check_perform_sedit()">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a class="dropdown-item text-danger" href="javascript:void(0);" onclick="check_perform_sdelete('15')">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                           
                        </tr>
                       
                        
                    </tbody>
                </table>
            </div>
        </div>
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

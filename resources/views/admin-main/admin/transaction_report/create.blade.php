@extends('admin-main.layouts.default')
@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add New Boards </a></li>
    </ol>
    <a class="text-primary fs-13" href="{{url('admin/Boards')}}">+ Back Boards</a>
</div>
<div class="container-fluid p-2">
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{url('admin/Boards/store')}}" method="post">
                        @csrf
                        <div id="smartwizard" class="form-wizard order-create">
                            <div class="row form-material">
                    
                                <!-- Board Name -->
                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-4 col-form-label">Board Name:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('board_name') is-invalid @enderror" name="board_name">
                                            <option value="">-- Select Board --</option>
                                            <option value="CBSE" {{ old('board_name') == 'CBSE' ? 'selected' : '' }}>CBSE</option>
                                            <option value="RBSE" {{ old('board_name') == 'RBSE' ? 'selected' : '' }}>RBSE</option>
                                        </select>
                                        @error('board_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                    
                                <!-- Remark -->
                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-4 col-form-label">Remark:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control @error('remark') is-invalid
                                            
                                        @enderror" name="remark" value="{{old('remark')}}">
                                        @error('remark')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                    
                                <!-- Status -->
                                <div class="mb-3 col-xl-3 col-xxl-12 col-md-6 row">
                                    <label class="col-sm-4 col-form-label">Status:</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('status') is-invalid @enderror" name="status">
                                            <option value="">-- Select Status --</option>
                                            <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                                            <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                        @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                    
                            </div>
                    
                            <div class="col-4">
                                <button class="btn btn-info" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush
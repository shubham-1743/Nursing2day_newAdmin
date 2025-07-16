@extends('admin-main.layouts.default')
@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Certificate Signature</h5></li>
    </ol>
    <div class="container-fluid p-2">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                           
                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Upload Image(* height less than 75px)</label>
                                <input type="file" name="signature" id="image" class="form-control">
                            </div>
    
                           
    
                            <!-- Buttons -->
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-plus"></i> Save
                            </button>
                            <a href="javascript:void(0);" class="btn btn-danger"><span class="fa fa-trash"></span>&nbsp; Delete Signature</a>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>


@endsection

@push('scripts')
    

@endpush


@extends('admin-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit SMS Template</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf

                      
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nmae</label>
                                <input type="text" name="name" class="form-control" placeholder="name" value="{{ old('name') }}">
                            </div><br>
                            <div class="mb-3">
                                <label for="news_description" class="form-label">Template:</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Template">{{ old('description') }}</textarea>
                            </div>
                        </div>


                       

                    

                        <!-- Action Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-plus"></i> Save
                            </button>
                            <a href="{{ url('admin/Smstemplates') }}" class="btn btn-danger">Close</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

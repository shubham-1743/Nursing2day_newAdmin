@extends('admin-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Email Template</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf

                      

                       

                       


                        <!-- Page Name & URL -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Nmae</label>
                                <input type="text" name="name" class="form-control" placeholder="name" value="{{ old('name') }}">
                            </div>
                            <div class="mb-3">
                                <label for="news_description" class="form-label">Email Template:</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Email Templat">{{ old('description') }}</textarea>
                            </div>
                        </div>


                        <!-- Load Editor -->
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary">Load Editor</button>
                        </div>

                    

                        <!-- Action Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-refresh"></i> Update
                            </button>
                            <a href="{{ url('admin/Emailtemplates') }}" class="btn btn-danger">Close</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

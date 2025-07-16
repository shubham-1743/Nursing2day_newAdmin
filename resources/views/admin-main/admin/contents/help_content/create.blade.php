@extends('admin-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Pages</a></li>
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
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="title" value="{{ old('title') }}">
                            </div>
                            <div class="mb-3">
                                <label for="news_description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" rows="4" placeholder="Description">{{ old('description') }}</textarea>
                            </div>
                        </div>


                        <!-- Load Editor -->
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary">Load Editor</button>
                        </div>

                    

                        <!-- Action Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-plus"></i> Save
                            </button>
                            <a href="{{ url('admin/Helpcontents') }}" class="btn btn-danger">Close</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('admin-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit SEO</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Meta Title</label>
                                    <textarea name="meta_title" class="form-control" rows="3" placeholder="Meta Title"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Meta Content</label>
                                    <textarea name="meta_content" class="form-control" rows="3" placeholder="Meta Content"></textarea>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Page Name</label>
                                    <input type="text" name="page_name" class="form-control" placeholder="Page Name">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Meta Keyword</label>
                                    <textarea name="meta_keyword" class="form-control" rows="3" placeholder="Meta Keyword"></textarea>
                                </div>

                                
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-refresh"></i> Update
                            </button>
                            <a href="{{ url('admin/seos') }}" class="btn btn-danger">
                                <i class="fa fa-times"></i> Close
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('admin-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Add News</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf

                        <!-- News Title and Page URL -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="news_title" class="form-label">News Title</label>
                                <input type="text" class="form-control" name="news_title" placeholder="News Title" value="{{ old('news_title') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="page_url" class="form-label">Page URL</label>
                                <input type="text" class="form-control" name="page_url" placeholder="Page URL" value="{{ old('page_url') }}">
                            </div>
                        </div>

                        <!-- News Description -->
                        <div class="mb-3">
                            <label for="news_description" class="form-label">News Description</label>
                            <textarea class="form-control" name="news_description" rows="4" placeholder="News Description">{{ old('news_description') }}</textarea>
                        </div>

                        <!-- Load Editor Button -->
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary">Load Editor</button>
                        </div>

                        <!-- Meta Fields -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <textarea class="form-control" name="meta_title" rows="3" placeholder="Meta Title">{{ old('meta_title') }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="meta_keyword" class="form-label">Meta Keyword</label>
                                <textarea class="form-control" name="meta_keyword" rows="3" placeholder="Meta Keyword">{{ old('meta_keyword') }}</textarea>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="meta_content" class="form-label">Meta Content</label>
                            <textarea class="form-control" name="meta_content" rows="3" placeholder="Meta Content">{{ old('meta_content') }}</textarea>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-save"></i> Save
                            </button>
                            <a href="{{ url('admin/news') }}" class="btn btn-danger">
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

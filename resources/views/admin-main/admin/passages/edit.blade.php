@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Passage</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf

                        <!-- English Passage -->
                        <div class="mb-3">
                            <label for="english_passage" class="form-label">English</label>
                            <textarea name="english_passage" id="english_passage" class="form-control" rows="6" placeholder="Passage in English">{{ old('english_passage') }}</textarea>
                            <button type="button" class="btn btn-secondary mt-2">Load Editor</button>
                        </div>

                        <!-- Hindi Passage -->
                        <div class="mb-3">
                            <label for="hindi_passage" class="form-label">Hindi</label>
                            <textarea name="hindi_passage" id="hindi_passage" class="form-control" rows="6" placeholder="Passage in Hindi">{{ old('hindi_passage') }}</textarea>
                            <button type="button" class="btn btn-secondary mt-2">Load Editor</button>
                        </div>

                        <!-- Buttons -->
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-plus"></i> Save
                        </button>
                        <a href="{{ url('admin/passages') }}" class="btn btn-danger">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

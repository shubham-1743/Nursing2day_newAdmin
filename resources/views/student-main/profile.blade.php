@extends('student-main.layouts.default')
@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li>
            <h5 class="bc-title">Edit Profile</h5>
        </li>
    </ol>
</div>

<div class="container py-5">
    
    <div class="row">
        <div class="col-lg-10">
            <div class="card mb-4">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-3">
                            
                            <label for="image-upload">
                                <img src="{{asset('images/avatar/2.jpg')}}" alt="Profile Image" class="rounded-circle" style="width: 100px; cursor: pointer;">
                            </label>
                            <input type="file" id="image-upload" class="form-control @error('image') is-invalid @enderror" name="image" accept="image/*" style="display: none;">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <input type="text" class="form-control @error('enroll') is-invalid  @enderror" name="enroll"  value="">
                            @error('enroll')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <input type="number" class="form-control @error('phone') is-invalid  @enderror" name="phone"  value="">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <input type="number" class="form-control @error('guardian_phone') is-invalid  @enderror" name="guardian_phone"  value="">
                            @error('guardian_phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <input type="text" class="form-control @error('address') is-invalid  @enderror" name="address"  value="">
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div><br>
                        

                        

                       
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-refresh"></i> Update
                        </button>
                    </form>

                </div>
            </div>
        </div>
     
    </div>
</div>

@endsection
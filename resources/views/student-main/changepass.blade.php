@extends('student-main.layouts.default')
@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li>
            <h5 class="bc-title">Edit Password</h5>
        </li>
    </ol>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
		    <form action="" method="post">
                @csrf
                <div class="mb-3" style="position: relative">
                    <label for="password" class="form-label"> Old Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="" value="" >
                   
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3" style="position: relative">
                    <label for="new_password" class="form-label"> New Password</label>
                    <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="" value="">
                   
                    @error('new_password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3" style="position: relative">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password" value="">
                    
                    @error('confirm_password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-refresh"></i> Update
                </button>
           </form>
         
		</div>  
	</div>
</div>
@endsection
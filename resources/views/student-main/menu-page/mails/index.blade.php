@extends('student-main.layouts.default')

@section('content')
<div class="container-fluid mt-3">
    <div class="row">
        <h3>Mailbox
        </h3>
        <!-- Sidebar -->
        <div class="col-md-3">
           
            <a href="{{route('student.compose')}}" class="btn btn-block btn-danger btn-icon btn-icon-standalone btn-icon-standalone-right"><i class="fa fa-envelope"></i><span>&nbsp;Compose</span></a> <br>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center ">
                    <a href="" class="btn-group dropup btn-block">  <b>Inbox(0)</b></a>
                  
                    
                </li>
                <li class="list-group-item"><a href="" class="btn-group dropup btn-block">Sent Mail</a></li>
                <li class="list-group-item"><a href="" class="btn-group dropup btn-block">Trash</a></li>
            </ul>
        </div>

        <!-- Mail List -->
        <div class="col-md-9">
            <!-- Action Buttons -->
            <div class="d-flex mb-2">
                <div class="btn-group me-2">
                    <input type="checkbox" class="form-check-input">
                </div>
                <div class="btn-group me-2">
                    <button class="btn btn-light"><i class="fa fa-trash"></i></button>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown">
                        More
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Mark as Read</a></li>
                        <li><a class="dropdown-item" href="#">Mark as Unread</a></li>
                    </ul>
                </div>
            </div>

          
        </div>
    </div>
</div>
@endsection

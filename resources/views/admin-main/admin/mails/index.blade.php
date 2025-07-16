@extends('admin-main.layouts.default')

@section('content')
<div class="container-fluid mt-3">
    <div class="row">
        <h3>Mailbox
        </h3>
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="mb-2 d-flex">
                <input type="text" class="form-control w-25" placeholder="Search">
                <button class="btn btn-success ms-2"><i class="fa fa-search"></i></button>
            </div>
            <a href="{{url('admin/mails/create')}}" class="btn btn-block btn-danger btn-icon btn-icon-standalone btn-icon-standalone-right"><i class="fa fa-envelope"></i><span>&nbsp;Compose</span></a> <br>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center ">
                    <a href="" class="btn-group dropup btn-block">  <b>Inbox</b></a>
                  
                    <span class="">5</span>
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

            <!-- Emails -->
            <div class="list-group">
                <!-- Repeat this item for each mail -->
                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">ashoksaini9191@gmail.com</div>
                        <small>Unable to access purches test series for Rajasthan NHM</small>
                    </div>
                    <div class="text-end small">
                        <div>28-12-2023</div>
                        <div>03:20:48 PM</div>
                    </div>
                </a>

                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">majidjargela828@gmail.com</div>
                        <small>reisonal</small>
                    </div>
                    <div class="text-end small">
                        <div>14-05-2023</div>
                        <div>11:24:13 PM</div>
                    </div>
                </a>

                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                    <div class="form-check me-2">
                        <input class="form-check-input" type="checkbox">
                    </div>
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">tansuhkkamaniya50@gmail.com</div>
                        <small>Paid video nahi chal rha hai</small>
                    </div>
                    <div class="text-end small">
                        <div>20-11-2022</div>
                        <div>03:06:53 PM</div>
                    </div>
                </a>

                <!-- Add more email rows as needed -->
            </div>
        </div>
    </div>
</div>
@endsection

@extends('admin-main.layouts.default')
@section('content')

<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Packages</a></li>
    </ol>
</div>

<div class="container-fluid p-2">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Book Status -->
                        <div class="form-check mb-3">
                            <input type="checkbox" name="book_status" class="form-check-input" id="book_status">
                            <label class="form-check-label" for="book_status">Book Status</label>
                        </div>

                        <!-- Select Courses -->
                        <div class="mb-3">
                            <label for="course_id" class="form-label">Select Courses</label>
                            <select name="course_id" class="form-control" id="course_id">
                                <option value="">None selected</option>
                            </select>
                        </div>

                        <!-- Select Group -->
                        <div class="mb-3">
                            <label for="group_id" class="form-label">Select Group</label>
                            <select name="group_id" class="form-control" id="group_id">
                                <option value="">None selected</option>
                            </select>
                        </div>

                        <!-- Select Subject -->
                        <div class="mb-3">
                            <label for="subject_id" class="form-label">Select Subject</label>
                            <select name="subject_id" class="form-control" id="subject_id">
                                <option value="">None selected</option>
                            </select>
                        </div>

                        <!-- Category -->
                        <div class="mb-3">
                            <label for="category" class="form-label">Choose Category</label>
                            <select name="category" class="form-control" id="category">
                                <option value="">Category</option>
                            </select>
                        </div>

                        <!-- Type -->
                        <div class="mb-3">
                            <label class="form-label">Type</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="type_paid" value="PAID">
                                <label class="form-check-label" for="type_paid">PAID</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="type_free" value="FREE">
                                <label class="form-check-label" for="type_free">FREE</label>
                            </div>
                        </div>

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>

                        <!-- Meta Title -->
                        <div class="mb-3">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" id="meta_title">
                        </div>

                        <!-- Meta Keyword -->
                        <div class="mb-3">
                            <label for="meta_keyword" class="form-label">Meta Keyword</label>
                            <input type="text" name="meta_keyword" class="form-control" id="meta_keyword">
                        </div>

                        <!-- Meta Description -->
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <input type="text" name="meta_description" class="form-control" id="meta_description">
                        </div>

                        <!-- Sort Order -->
                        <div class="mb-3">
                            <label for="sort_order" class="form-label">Sort Order</label>
                            <input type="number" name="sort_order" class="form-control" id="sort_order">
                        </div>

                        <!-- Amount -->
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input type="text" name="amount" class="form-control" id="amount">
                        </div>

                        <!-- Discounted Amount -->
                        <div class="mb-3">
                            <label for="discounted_amount" class="form-label">Discounted Amount</label>
                            <input type="text" name="discounted_amount" class="form-control" id="discounted_amount">
                        </div>

                        <!-- Expired Days -->
                        <div class="mb-3">
                            <label for="expired_days" class="form-label">Expired (Days)</label>
                            <input type="number" name="expired_days" class="form-control" id="expired_days" value="0">
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control" id="status">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>

                        <!-- Lock Status -->
                        <div class="mb-3">
                            <label for="lock_status" class="form-label">Lock Status</label>
                            <select name="lock_status" class="form-control" id="lock_status">
                                <option value="Locked">Locked</option>
                                <option value="Unlocked">Unlocked</option>
                            </select>
                        </div>

                        <!-- Lock Status Membership -->
                        <div class="mb-3">
                            <label for="lock_membership" class="form-label">Lock Status Membership</label>
                            <select name="lock_membership" class="form-control" id="lock_membership">
                                <option value="Locked">Locked</option>
                                <option value="Unlocked">Unlocked</option>
                            </select>
                        </div>

                        <!-- Upload Photo -->
                        <div class="mb-3">
                            <label for="photo" class="form-label">Upload Photo</label>
                            <input type="file" name="photo" class="form-control" id="photo">
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                            <br>
                            <button onclick="javascript:setup();" type="button" class="tinybtn">Load Editor</button>
                        </div>

                        <!-- Show Status -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="show_status" id="show_status">
                            <label class="form-check-label" for="show_status">Show Status</label>
                           
                        </div>

                        <!-- Buttons -->
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Save</button>
                        <a href="{{ url('admin/packages') }}" class="btn btn-danger">Close</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

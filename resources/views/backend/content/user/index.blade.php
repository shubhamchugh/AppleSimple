@extends('backend.layouts.contentLayoutMaster')

@section('title', 'User List')

@section('vendor-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap4.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap4.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap4.min.css')) }}">
@endsection

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-user.css')) }}">
@endsection

@section('content')

<!-- users list start -->
<section class="app-user-list">
    <!-- list section start -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">All User List</h4>
        </div>
        @include('backend.partials.message')

        @if (! $users->count())
        <section id="alerts-closable">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="demo-spacing-0">
                                <div class="alert alert-primary" role="alert">
                                    <div class="alert-body">
                                        No Record Found
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @else
        <section id="basic-datatable">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        @include('backend.content.user.table')
                    </div>
                </div>
            </div>
    </div>
</section>
<div class="d-flex">
    <div class="mx-auto">
        {{ $users->links() }}
    </div>
</div>
@endif
<!-- Modal to add new user starts-->
<div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
    <div class="modal-dialog">
        <form class="add-new-user modal-content pt-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">New User</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <div class="form-group">
                    <label class="form-label" for="basic-icon-default-fullname">Full
                        Name</label>
                    <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname"
                        placeholder="John Doe" name="user-fullname" aria-label="John Doe"
                        aria-describedby="basic-icon-default-fullname2" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="basic-icon-default-uname">Username</label>
                    <input type="text" id="basic-icon-default-uname" class="form-control dt-uname"
                        placeholder="Web Developer" aria-label="jdoe1" aria-describedby="basic-icon-default-uname2"
                        name="user-name" />
                </div>
                <div class="form-group">
                    <label class="form-label" for="basic-icon-default-email">Email</label>
                    <input type="text" id="basic-icon-default-email" class="form-control dt-email"
                        placeholder="john.doe@example.com" aria-label="john.doe@example.com"
                        aria-describedby="basic-icon-default-email2" name="user-email" />
                    <small class="form-text text-muted"> You can use letters, numbers &
                        periods </small>
                </div>
                <div class="form-group">
                    <label class="form-label" for="user-role">User Role</label>
                    <select id="user-role" class="form-control">
                        <option value="subscriber">Subscriber</option>
                        <option value="editor">Editor</option>
                        <option value="maintainer">Maintainer</option>
                        <option value="author">Author</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label class="form-label" for="user-plan">Select Plan</label>
                    <select id="user-plan" class="form-control">
                        <option value="basic">Basic</option>
                        <option value="enterprise">Enterprise</option>
                        <option value="company">Company</option>
                        <option value="team">Team</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mr-1 data-submit">Submit</button>
                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </form>
    </div>
</div>
<!-- Modal to add new user Ends-->
</div>
<!-- list section end -->
</section>
<!-- users list ends -->
@endsection

@section('vendor-script')
{{-- Vendor js files --}}
<script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap4.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/tables/datatable/buttons.bootstrap4.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection

@section('page-script')
{{-- Page js files --}}
{{-- <script src="{{ asset(mix('js/scripts/pages/app-user-list.js')) }}"></script> --}}
@endsection
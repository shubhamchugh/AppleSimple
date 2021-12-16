@extends('backend.layouts.main')

@section('title', 'MyBlog | Add new user')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Users
            <small>Add new user</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li><a href="{{ route('user.index') }}">Users</a></li>
            <li class="active">Add new</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <form action="{{ route('user.store')}}" method="POST" id="post-form" enctype="multipart/form-data">
                @csrf

                @include('backend.users.form')

            </form>
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>

@endsection
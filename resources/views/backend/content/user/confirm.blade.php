@extends('backend.layouts.main')

@section('title', 'MyBlog | Delete Confirmation')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Users
            <small>Delete Confirmation</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li><a href="{{ route('user.index') }}">Users</a></li>
            <li class="active">Delete Confirmation</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="col-xs-9">
                    <div class="box">
                        <div class="box-body ">
                            <p>
                                You have specified this user for deletion:
                            </p>
                            <p>
                                ID #{{ $user->id }}: {{ $user->name }}
                            </p>
                            <p>
                                What should be done with content own by this user?
                            </p>
                            <p>
                                <input type="radio" name="delete_option" value="delete" checked>Delete All Content
                            </p>

                            <p>
                                <input type="radio" name="delete_option" value="attribute"> Attribute content to:
                                {{-- {!! Form::select('selected_user', $users, null) !!} --}}

                                <select name="selected_user">
                                    <option value="" disabled selected>Choose User</option>
                                    @foreach ($users as $key => $singleuser)
                                    <option value="{{ $key }}">{{ $singleuser }}</option>
                                    @endforeach
                                </select>

                            </p>

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-danger">Confirm Deletion</button>
                            <a href="{{ route('user.index') }}" class="btn btn-default">Cancel</a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>

@endsection
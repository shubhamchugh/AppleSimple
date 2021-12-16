@extends('backend.layouts/contentLayoutMaster')

@section('title', 'Edit Page')

@section('page-style')
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('content')
<form method="POST" action="{{ route('logins.update', $post->id)}}" id="post-form" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<!-- Basic Vertical form layout section start -->
@include('backend.content.post.form')
<!-- Basic Vertical form layout section end -->
</form>

<div class="card-body">
    <div class="col-12">
        <div class="col-12 ">
         
            @if ($post->exists)
            <a href="{{ route('postcontent.add',$post->id) }}" class="btn btn-block btn-primary mr-1">Add Content</a>
            @endif
      
        </div>
    </div>
</div>


<div class="table-responsive">
    <table class="table  table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>fake_user_id</th>
                <th>content_title</th>
                <th>content_url</th>
                <th>content_dec</th>
                <th>content_image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($postContent as $postmeta)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <span class="font-weight-bold">{{ $postmeta->fake_user_id }}</span>
                </td>
                <td>{{ $postmeta->content_title }}</td>
                <td>
                    {{ $postmeta->content_url }}
                </td>
                <td>
                   {{ $postmeta->content_dec }}
                </td>
                <td>{!! $postmeta->content_image !!}</td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                            <i data-feather="more-vertical"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('postcontent.edit', $postmeta->id) }}">
                                <i data-feather="edit-2" class="mr-50"></i>
                                <span>Edit</span>
                            </a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                            document.getElementById('postContent-delete-form-{{ $postmeta->id }}').submit();">
                                <i data-feather="trash" class="mr-50"></i>
                                <span>Delete</span>
                            </a>
                            <form id="postContent-delete-form-{{ $postmeta->id }}" style="display: none;"
                                action="{{ route('postcontent.destroy', $postmeta->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                            </form>

                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>




@endsection



@section('vendor-script')
<!-- vendor files -->
<script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.time.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/pickadate/legacy.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset(mix('js/scripts/forms/pickers/form-pickers.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/forms/form-validation.js')) }}"></script>
@endsection
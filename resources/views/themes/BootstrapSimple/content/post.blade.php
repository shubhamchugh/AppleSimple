@extends('themes.BootstrapSimple.layouts.master')

@section('content')
<div class="container">

    <!--============ Page Title =========================================================================-->
    <div class="page-title">
        <div class="container">
            <h1 class="page-title text-capitalize my-3">{{ $post->post_title }}</h1>
        </div>
        <!--end container-->
    </div>
    <!--end background-->

    <nav aria-label="breadcrumb" class="theme-breadcrumb mb-2">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $post->post_title }}</li>
        </ol>
    </nav>

    <div class="main_question">
        <div class="body exInfo" style="margin-top:10px;">
            <div class="login-helper" style="font-size:18px;">
                {!! $post->post_dec !!}
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <!-- Left Sidebar -->
        <div class="col-xl-8 col-lg-8 col-md-8 col-md-8 col-12 mb-2">

            @foreach ($post->content as $content)
            <div class="post-box mt-2">

                <div class="d-lg-flex align-items-center justify-content-between">
                    <div style="font-size:22px;">
                        <strong>Answer #{{ $loop->iteration }}</strong>
                        <strong>Added by</strong>: <a href="#" class="text-dec-non" title="Phone Number">{{
                            $content->contentFakeAuthor->name }}</a>
                    </div>
                    <span class="badge bg-success">{{rand(1,36)}} hours ago</span>
                </div>
                {!! $content->content_dec !!}
            </div>
            @endforeach
        </div>



        <!-- Right Sidebar -->
        @include('themes.BootstrapSimple.panels.sidebar')
    </div>

</div>
@endsection





@section('head')
<title>{{ucwords($post->post_title ?? "Default Message")}}</title>
@endsection
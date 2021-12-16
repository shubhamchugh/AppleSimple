@extends('themes.loginVP.layouts.post')


@section('pagetitle')

@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <div class="main_question">
                <div class="header" style="width:100%;">
                    <div class="user">
                        <div style="display:inline-block;">
                            <img src="{{ asset("themes/loginVP/images/ico1.jpg") }}" class="user_img">
                            <h5 class="name">Asked by: {{ $post->fakeAuthor->name }}</h5>
                            <span class="badge badge-danger">Questioner</span>
                            <span class="badge badge-primary">General</span>
                        </div>
                        <div style="display:inline-block;">
                            <h1 class="main-heading" style="margin-top:0px;">{{ $post->post_title }} </h1>
                            <p style="margin:0px;">Link of {{ $post->post_title }} page is given below. Pages related to
                                {{ $post->post_title }} are also listed.</p>
                            <p class="last-updated" style="font-size:11px;margin:0px;"><i></i>Last Updated: 18th
                                February, 2020
                        </div>
                    </div>

                    <div class="votes">
                        <div class="vote-inner">
                            <div class="upvote"><a href="#"> <i class="fa fa-caret-up"></i></a></div>
                            <div class="votecount"><?php echo(rand(10,99)) ?></div>
                            <div class="downvote"><a href="#"> <i class="fa fa-caret-down"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="body exInfo" style="margin-top:10px;">
                    <div class="login-helper" style="font-size:12px;">
                        <h2 style="font-size:14px;">Follow these easy steps:</h2>
                        <ul style="margin-bottom:0px;">
                            <li><strong>Step 1. </strong>Go to <span style="color:blue;">{{ $post->post_title }} </span>
                                page via
                                official link below.</li>
                            <li><strong>Step 2. </strong>Login using your username and password. Login screen appears
                                upon successful login.</li>
                            <li><strong>Step 3. </strong>If you still can't access {{ $post->post_title }} then see <a
                                    style="color:blue;">Troublshooting options here</a>.</li>
                        </ul>
                    </div>
                </div>
            </div>

            @foreach ($post->content as $content)
            <div class="card" style="margin-top:5px;border:none;">
                <span style="font-weight:700;font-size:20px;margin-bottom:5px;">
                    <strong> {{  $loop->iteration }}. {{ $content->content_title }}</strong>
                </span>
                <div class="card-body" style="background-color: #E8CEBF;margin-bottom:15px;border:none;">
                    <div class="col-xs-12 col-sm-12 col-md-12 overallPadd answer_inner">
                        <div class="col-xs-12 col-sm-12 row col-md-12 content_inner"
                            style="padding:0px !important;margin:0px !important;">
                            <div class="col-xs-12 col-sm-5 col-md-5 imgPadd">
                                @if ($content->content_image)
                                <a href="{{ $content->content_url }}" rel="nofollow" target="_blank"
                                    style="word-wrap:break-word;">
                                    <img class="img-zoom file-img img-fluid"
                                        src="https://s3.us-west-1.wasabisys.com/{{ config('app.WASABI_BUCKET_NAME') }}/{{ $content->content_image }}"
                                        style="width:100%;" alt="{{ $content->content_title }}"
                                        title="{{ $content->content_title }}">
                                </a>
                                @endif
                            </div>
                            <div class="col-md-7 col-sm-7 col-xs-12 contentPadd">
                                <div class="col-xs-12 col-sm-12 row col-md-12 user" style="padding-left:0px;"><img
                                        src="{{ asset("themes/loginVP/images/ico1.jpg") }}" class="user_img">
                                    <h4 class="name">Added by: {{ $content->contentFakeAuthor->name }}</h4>
                                    <span class="badge badge-success">Explainer</span>
                                </div>
                                <h3 class="results">
                                    <a href="{{ $content->content_url }}" rel='nofollow' target='_blank'
                                        style="background-color:#f6d53b;">
                                        {{ $content->content_title }} </a>
                                </h3>
                                <div style="font-size: 13px;color:#00000085;">
                                    {{ $content->content_dec }}</div>
                                <div style="color:#006621;word-wrap:break-word;font-size:14px;color:#0089ab;">
                                    Url: {{ $content->content_url }} </div>
                            </div>

                            <div class="row flex" style="margin:10px 0 0 0!important;padding:2px !important;">
                                <div class="Third sectional">
                                    @if (!empty($content->postMeta->host_ip))
                                    <p class="small data">
                                        {{-- <i class="fa fa-location-arrow exInfo pull-left"></i><span
                                            class="delta rank up pull-right"
                                            style="background-color:#f0ad4e;">
                                            </span> --}}

                                        {{ $content->postMeta->host_ip }}
                                    </p>
                                    <p class="title"> Host Ip</p>
                                    @endif
                                </div>


                                <div class="Third sectional">
                                    @if (!empty($content->postMeta->host_isp))
                                    <p class="small data">
                                        {{-- <i class="fa fa-eye exInfo pull-left"></i><span class="delta rank up pull-right"
                                            style="background-color:#495b79;">71,062</span> --}}

                                        {{ $content->postMeta->host_isp }}

                                    </p>
                                    <p class="title">Host Isp</p>
                                    @endif
                                </div>
                                <div class="Third sectional">
                                    @if (!empty($content->postMeta->host_country))
                                    <p class="small data">
                                        {{-- <span class="delta rank up pull-right"
                                            style="font-size:13px;color:#000;padding-left:0px!important;"><img
                                                class="flag" src="https://login-vp.com/flag/us.png"
                                                style="width:22px;margin-right:5px;padding-bottom:3px;">
                                        </span> --}}

                                        {{ $content->postMeta->host_country }}

                                    </p>
                                    <p class="title">Host Country</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="comment_box">
                </div>
            </div>
            @endforeach
        </div>

        @include('themes.loginVP.panels.sidebar')
        @endsection


        @section('head')
        <title>{{ $post->post_title ?? "Default Message"}}</title>
        @endsection
@extends('themes.loginVP-Blue.layouts.post')


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
                            <img src="{{ asset('themes/loginVP-Blue/images/ico1.jpg') }}" class="user_img">
                            <h5 class="name">Asked by: {{ $post->fakeAuthor->name }}</h5>
                            <span class="badge badge-danger">Questioner</span>
                            <span class="badge badge-primary">General</span>
                        </div>
                        <div style="display:inline-block;">
                            <h1 class="main-heading" style="margin-top:0px;">{{ $post->post_title }} </h1>

                        </div>
                    </div>

                    <div class="votes">
                        <div class="vote-inner">
                            <div class="upvote"><a href="#"> <i class="fa fa-caret-up"></i></a></div>
                            <div class="votecount">
                                <?php echo(rand(10,99)) ?>
                            </div>
                            <div class="downvote"><a href="#"> <i class="fa fa-caret-down"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="body exInfo" style="margin-top:10px;">
                    <div class="login-helper" style="font-size:12px;">
                        {!! $post->post_dec !!}
                    </div>
                </div>
            </div>

            @foreach ($post->content as $content)
            <div class="card" style="margin-top:5px;border:none;">
                <div class="card-body" style="background-color: #E8CEBF;margin-bottom:15px;border:none;">
                    <div class="col-xs-12 col-sm-12 col-md-12 overallPadd answer_inner">
                        <div class="col-xs-12 col-sm-12 row col-md-12 content_inner"
                            style="padding:0px !important;margin:0px !important;">
                            <span style="font-weight:700;font-size:20px;margin-bottom:5px;color:#e9ecef;">
                                <strong>Answer #{{ $loop->iteration }}</strong>
                            </span>
                            <div class="col-md-12 col-sm-12 col-xs-12 contentPadd">
                                <div class="col-xs-12 col-sm-12 row col-md-12 user" style="padding-left:0px;"><img
                                        src="{{ asset('themes/loginVP-Blue/images/ico1.jpg') }}" class="user_img">
                                    <h4 class="name">Added by: {{ $content->contentFakeAuthor->name }}</h4>
                                    <span class="badge badge-success">Explainer</span>
                                </div>
                                <br>
                                <div style="font-size: 22px!important; color:#e9ecef;">
                                    {!! $content->content_dec !!}</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="comment_box">
                </div>
            </div>
            @endforeach
        </div>

        @include('themes.loginVP-Blue.panels.sidebar')
        @endsection


        @section('head')
        <title>{{ $post->post_title ?? "Default Message"}}</title>
        @endsection
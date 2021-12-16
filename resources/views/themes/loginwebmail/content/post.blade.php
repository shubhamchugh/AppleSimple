@extends('themes.loginwebmail.layouts.master')








@section('content')


<div class="container">
    <div class="columns" style="height: auto !important;">
        <div class="column is-two-thirds" style="height: auto !important;">
            <div class="box">
                <nav class="breadcrumb has-arrow-separator is-hidden-mobile" aria-label="breadcrumbs">
                    <ul>
                        <li><a href="/">Home</a></li>

                        <li class="is-active"><a href="#" aria-current="page">
                                {{ $post->post_title }}
                            </a></li>
                    </ul>
                </nav>

                <div class="columns">
                    <div class="column ">

                        <h1 class="title is-4 is-capitalized">
                            {{ $post->post_title }}
                        </h1>
                        <div class="user">
                            <h5 class="name">
                                Created at: {{ $post->published_at }}
                            </h5>
                            <span class="badge badge-danger">Questioner</span>
                            <span class="badge badge-primary">General</span>
                        </div>

                        <div align="center">
                            <!-- ads -->
                        </div>


                        </br>
                        <p>{!! $post->post_dec !!}
                        </p>

                    </div>
                </div>
                <div align="center">

                    <!-- ads -->



                </div>

            </div>

            @foreach ($post->content as $content)
            <div class="box box-inner">
                <h3 class="is-size-4">
                    <a target="_blank" rel="noreferrer nofollow">
                        Answer #{{ $loop->iteration }}:
                    </a>
                </h3>
                <span class="badge badge-warning"><b>By:</b>
                    {{ $content->contentFakeAuthor->name }}
                </span>
                <div class="columns">
                    <div class="column">
                        <div class="has-text-dark"> <br>{!! $content->content_dec !!}</div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <!-- Right Sidebar -->
        @include('themes.loginwebmail.panels.sidebar')

    </div>
</div>
</div>

@endsection





@section('head')
<title>{{ucwords($post->post_title ?? "Default Message")}}</title>
@endsection
@extends('themes.craigs.layouts.master')


@section('pagetitle')
<!--============ Page Title =========================================================================-->
<div class="page-title">
    <div class="container">
        <h1>{{ $post->post_title }}</h1>
        <h4 style="color:black" ;>
            Suggested by: {{ $post->fakeAuthor->name }}
        </h4>
        <p>{{ $ConstantPostContent->value ?? "Null" }}</p>
    </div>
    <!--end container-->
</div>
<!--============ End Page Title =====================================================================-->
<div class="background"></div>
<!--end background-->
@endsection


@section('content')
<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<section class="content">
    <section class="block">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-9">
                    <div class="items list compact grid-xl-3-items grid-lg-3-items grid-md-2-items">

                        @foreach ($post->content as $content)
                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="single-listing-1.html" class="title">{{ $content->content_title }}</a>
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        @if ($content->content_image)
                                        <img src="{{ Storage::url("app/public/{$content->content_image}") }}"
                                            alt="{{ $content->content_title }}">
                                        @endif
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 style="color:black" ;>
                                    Suggested by: <a href="#">{{ $content->contentFakeAuthor->name }}</a>
                                </h4>
                                <div class="additional-info">
                                    <ul>
                                        <li>
                                            <figure>Host Ip</figure>
                                            <aside>@if (!empty($content->postMeta->host_ip))
                                                {{ $content->postMeta->host_ip }}
                                                @endif</aside>
                                        </li>
                                        <li>
                                            <figure>Host Country</figure>
                                            <aside>@if (!empty($content->postMeta->host_country))
                                                {{ $content->postMeta->host_country }}
                                                @endif</aside>
                                        </li>
                                        <li>
                                            <figure>Host Isp</figure>
                                            <aside>@if (!empty($content->postMeta->host_isp))
                                                {{ $content->postMeta->host_isp }}
                                                @endif</aside>
                                        </li>
                                    </ul>
                                </div>
                                <!--end addition-info-->
                                <div class="description">
                                    <p>{{ $content->content_dec }}</p>
                                </div>
                                <!--end description-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->





                        @endforeach
                    </div>
                </div>
                @include('themes.craigs.panels.sidebar')
            </div>
        </div>
    </section>

</section>
<!--end content-->
@endsection


@section('head')
<title>{{ $PrePostPageTitle->value ?? ""}} {{ $post->post_title ?? "Default Message"}}
    {{ $AfterPostPageTitle->value ?? ""}}</title>
@endsection
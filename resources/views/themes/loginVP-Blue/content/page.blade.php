@extends('themes.loginVP-Blue.layouts.master')


@section('pagetitle')
<!--============ Page Title =========================================================================-->
<div class="page-title">
    <div class="container">
        <h1>{{ $page->page_title }}</h1>
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
            <div class="row">
                <div class="col-md-8">

                    <article class="blog-post clearfix">
                        <a href="blog-post.html">
                            <img src="assets/img/blog-image-01.jpg" alt="">
                        </a>
                        <div class="article-title">
                            <h2><a href="blog-post.html">10 tips for renovation</a></h2>
                        </div>
                        <div class="meta">
                            <figure>
                                <a href="#" class="icon">
                                    <i class="fa fa-user"></i>
                                    John Doe
                                </a>
                            </figure>
                            <figure>
                                <i class="fa fa-calendar-o"></i>
                                {{ $page->date }}
                            </figure>
                        </div>
                        <div class="blog-post-content">
                            <p>
                                {{ $page->page_content }}
                            </p>
                            <hr>
                        </div>
                        <!--end blog-post-content-->
                    </article>

                    <!--end Article-->

                    <hr>
                </div>
                <!--end col-md-8-->

                <div class="col-md-4">
                    {{-- sidebar --}}
                </div>
                <!--end col-md-3-->
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end block-->
</section>
<!--end content-->
@endsection


@section('head')
<title>{{ $page->page_title ?? "Default Message"}}</title>
@endsection
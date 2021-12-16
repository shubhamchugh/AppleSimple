@extends('themes.loginVP.layouts.master')


@section('content')
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto">
                <h1>Start Your First Time Login Form Here!!</h1>
                <p></p>
                <form action="{{ route('search.show') }}" class="form-inline">
                    <div class="input-group">
                        <?php if (isset($_GET['q'])) { ?>
                        <div class="dropdown-trigger">
                            <input id="txtGoogleSearch" name="q" class="form-control" type="text"
                                placeholder="Search Millions of Login Pages at Single Click" aria-haspopup="true"
                                aria-controls="prova-menu" value="<?php echo $_GET['q']  ?>">
                        </div>
                        <div class="dropdown-menu" id="prova-menu" role="menu"></div>
                    </div>
            </div>

            <?php } else {?>
            <div class="dropdown-trigger">
                <input id="txtGoogleSearch" name="q" class="form-control" type="text"
                    placeholder="Search Millions of Login Pages at Single Click" aria-haspopup="true"
                    aria-controls="prova-menu">
            </div>
            <?php } ?>
            <div class="input-group-append">
                <button class="btn btn-info" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
        </form>
        <p>If you want to login at any login pages you need to first find the desired login page from the
            millions of pages listed on google, This site Stafflogin.com has a list of secured and finest
            results for your every login page search.
        </p>
    </div>
    <div class="col-md-6 mr-auto">
        <img src="{{ asset("themes/loginVP/images/img-1.png") }}">

    </div>
</div>
</div>
</div>
<!-- Page Content -->
<div class="container" style="margin-top:15px;">
    <div class="col-md-12">
        <div class="row">

            <div class="col-md-6">
                <div class="sidebar bl-green">
                    <div class="header">
                        <i class="fa fa-flash"></i>
                        Similar Asks
                    </div>
                    <div class="body">
                        <ul>
                            @foreach ($posts as $post)
                            <li><a href="{{ route('post.show',$post->slug) }}">
                                    <div class="sidebar-question">{{ $post->post_title }}</div>
                                </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                {{ $posts->links() }}
            </div>

            <div class="col-md-6">
                <div class="sidebar trending">
                    <div class="header">
                        <i class="fa fa-line-chart"></i> Trending
                    </div>
                    <div class="body">
                        <ul>
                            @foreach ($sidebar as $item)
                            <li>
                                <a href="{{ route('post.show',$item->slug) }}">
                                    <div class="sidebar-question">{{ $item->post_title }}</div>
                                    <span class="badge badge-light c_badge"><?php echo(rand(10,1000)) ?> Views</span>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>
<!-- End  Page Content -->

@endsection


@section('search')

@endsection



@section('pagetitle')

@endsection


@section('head')
<title>Staff Login Guide - StaffsLogin.com</title>
@endsection
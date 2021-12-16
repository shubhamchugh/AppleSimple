@extends('themes.BootstrapSimple.layouts.master')


@section('content')
<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<br>
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ml-auto">
                <h1>Start Your First Time Login Form Here!!</h1>
                <form action="{{ route('search.show') }}" class="form-inline">
                    <div class="input-group">
                        <?php if (isset($_GET['q'])) { ?>
                        <div class="dropdown-trigger">
                            <input id="txtGoogleSearch" name="q" class="form-control" type="text"
                                placeholder="Search Millions of Login Pages at Single Click" aria-haspopup="true"
                                aria-controls="prova-menu" value="<?php echo $_GET['q']  ?>">
                        </div>
                        <div class="dropdown-menu" id="prova-menu" role="menu">

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

                </form>
                <p><br>If you want to login at any login pages you need to first find the desired login page from the
                    millions of pages listed on google, This site Stafflogin.com has a list of secured and finest
                    results for your every login page search.
                </p>
            </div>


        </div>
    </div>
</div>

<section class="top-categories">
    <div class="container">
        <h2 class="page-title text-capitalize mt-3"> Popular Post </h2>
        <div class="row gx-3 gx-sm-5">
            @foreach ($posts as $post)
            <div class="col-sm-3">
                <div>
                    <div>
                        <a href="{{ route('post.show',$post->slug) }}" title="{{ $post->post_title }}">{{
                            $post->post_title }}</a>
                    </div>
                </div>
            </div>
            @endforeach
            <br>
            <br>
            {{ $posts->links() }}
        </div>
    </div>
</section>

@endsection


@section('head')
<title>{{ $HomePageTitle->value ?? "Default Message"}}</title>
@endsection
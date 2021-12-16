@extends('themes.loginVP.layouts.master')


@section('title', 'Home Page')
@section('content')
<div class="container margin_60_35">
    <div class="detail_title_1">
        <h1>About Us</h1>
    </div>
    <p>You have done with your browser, you have search a lot there for many login pages but you won't get the perfect
        solution, but here you can log in at any website and portal from StaffsLogin.com.</p>
    <p>Just search your page or website name in the search bar and you will get the official page links opens in a
        minute.</p>
    <p>Staffslogin.com is a multipurpose website for online uses who are searching for any login website on their
        browser.</p>
    <p>You can easily log in to your desired website with this website and you just need to fill in your credentials to
        access any official portal online.</p>
</div>
<!-- /container -->

<div class="sidebar bl-green">
    <div class="header">
        <i class="fa fa-flash"></i>
        Similar Asks
    </div>
    <div class="body">
        <ul>
            @foreach ($sidebar as $item)
            <li><a href="{{ route('post.show',$item->slug) }}"><span
                        class="badge badge-success"><?php echo(rand(10,1000)) ?></span>
                    <div class="sidebar-question">{{ $item->post_title }}</div>
                </a></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection



@section('head')
<meta name="description" content="Abouts Us">
<title>Abouts Us</title>
@endsection
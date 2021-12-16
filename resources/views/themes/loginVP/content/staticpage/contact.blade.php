@extends('themes.loginVP.layouts.master')


@section('title', 'Home Page')
@section('content')
<div class="container margin_60_35">
    <div class="detail_title_1">
        <h1>Contact Us</h1>
    </div>
    <p>For any help/query/problem send us : <a href="https://forms.gle/S4jAchP9FYzoFCe96" target="_blank">Link</a></p>
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
<meta name="description" content="Contact Us">
<title>Contact Us</title>
@endsection
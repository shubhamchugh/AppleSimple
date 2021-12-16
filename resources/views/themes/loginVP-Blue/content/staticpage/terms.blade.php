@extends('themes.loginVP-Blue.layouts.master')


@section('title', 'Home Page')
@section('content')
<div class="container margin_60_35">
    <div class="detail_title_1">
        <h1>Terms</h1>
    </div>
    <p> this is the Terms page</p>
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
            <li><a href="{{ route('post.show',$item->slug) }}"><span class="badge badge-success">
                        <?php echo(rand(10,1000)) ?>
                    </span>
                    <div class="sidebar-question">{{ $item->post_title }}</div>
                </a></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection



@section('head')
<meta name="description" content="Terms">
<title>Terms</title>
@endsection
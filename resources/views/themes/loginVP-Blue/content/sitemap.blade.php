@extends('themes.loginVP-Blue.layouts.master')

@section('content')
<div class="box">
    <div class="block">
        <div class="row">
            <div class="col">
                <h3>Top List</h3>
                <ul class="features-checkboxes">
                    @foreach ($sitemap as $sitemaplist)
                    <li><a href="{{ route('post.show',$sitemaplist->slug) }}">{{ $sitemaplist->post_title }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{ $sitemap->links() }}
    </div>
</div>
@endsection
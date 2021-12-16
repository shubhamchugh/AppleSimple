@extends('themes.BootstrapSimple.layouts.master')


@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 col-md-8 col-12 mb-2">
            <section class="py-5 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light">{{ $title }}</h1>
                        <p class="lead text-muted">{{ $dec }}.
                        </p>
                        <p>
                            <a href="{{ $slug }}" class="btn btn-primary my-2">Back to list</a>
                            <a href="{{ $url }}" class="btn btn-secondary my-2" rel="nofollow" target="_blank">Go To The
                                Website</a>
                        </p>
                    </div>
                </div>
            </section>


        </div>
        <!-- Right Sidebar -->
        @include('themes.BootstrapSimple.panels.sidebar')
    </div>
</div>
@endsection

@section('head')
<title>{{ $title }}</title>
<meta name="robots" content="noindex, nofollow" />
@endsection
@extends('themes.loginwebmail.layouts.master')


@section('content')
<div class="container">
    <br>
    <div class="columns" style="height: auto !important;">
        <div class="column is-two-thirds" style="height: auto !important;">
            <div class="row">
                <div class="box">

                    <section class="hero">
                        <div class="hero-body">
                            <div class="has-text-centered">
                                <h2 class="title">
                                    {{ $title }}
                                </h2>

                                <p><strong>{{ $dec }}.
                                    </strong></p>
                                <p>
                                <div class="buttons buttons has-addons is-centered">
                                    <a href="{{ $slug }}" class="button is-primary">
                                        < Back to list</a>
                                            <a href="{{ $url }}" class="button is-link">Go To
                                                The
                                                Website ></a>


                                            </p>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- Right Sidebar -->
        @include('themes.BootstrapSimple.panels.sidebar')
    </div>
    <div class=box>
        <div class="row my-3">
            <div class="header">
                <h2 class="title is-5"><strong>FAQ</strong></h2>
            </div>
            <div class="col-md-6">
                {{ faq(3,$title) }}
            </div>

            <div class="col-md-6">
                {{ faq(3,$title) }}
            </div>
        </div>
    </div>
</div>

@endsection

@section('head')
<title>{{ $title }}</title>
<meta name="robots" content="noindex, nofollow" />
@endsection
@extends('themes.craigs.layouts.master')


@section('content')
<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<section class="content">
    <!--============ Features Steps =========================================================================-->
    <section class="block has-dark-background">
        <div class="container">
            <div class="block">
                <h2>{{$homeStepTitle->value ?? "Default Message" }}</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="feature-box">
                            <figure>
                                <img src="assets/icons/feature-user.png" alt="">
                                <span>1</span>
                            </figure gure>
                            <h3>{{$StepH1->value ?? "Default Message" }}</h3>
                            <p>{{ $stepC1->value ?? "Default Message"}}</p>
                        </div>
                        <!--end feature-box-->
                    </div>
                    <!--end col-->
                    <div class="col-md-3">
                        <div class="feature-box">
                            <figure>
                                <img src="assets/icons/feature-upload.png" alt="">
                                <span>2</span>
                            </figure>
                            <h3>{{$StepH2->value ?? "Default Message"}}</h3>
                            <p>{{ $stepC2->value ?? "Default Message"}}</p>
                        </div>
                        <!--end feature-box-->
                    </div>
                    <!--end col-->
                    <div class="col-md-3">
                        <div class="feature-box">
                            <figure>
                                <img src="assets/icons/feature-like.png" alt="">
                                <span>3</span>
                            </figure>
                            <h3>{{$StepH3->value ?? "Default Message"}}</h3>
                            <p>{{$StepC3->value ?? "Default Message"}}</p>
                        </div>
                        <!--end feature-box-->
                    </div>
                    <!--end col-->
                    <div class="col-md-3">
                        <div class="feature-box">
                            <figure>
                                <img src="assets/icons/feature-wallet.png" alt="">
                                <span>4</span>
                            </figure>
                            <h3>{{ $StepH4->value ?? "Default Message"}}</h3>
                            <p>{{ $StepC4->value ?? "Default Message"}}</p>
                        </div>
                        <!--end feature-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end block-->
        </div>
        <!--end container-->
        <div class="background" data-background-color="#2b2b2b"></div>
        <!--end background-->
    </section>
    <!--end block-->
    <!--============ End Features Steps =====================================================================-->

    <div class="box">
        <div class="block">
            <div class="row">
                <div class="col">
                    <h3>Top List</h3>
                    <ul class="features-checkboxes">
                        @foreach ($posts as $post)
                        <li><a href="{{ route('post.show',$post->slug) }}">{{ $post->post_title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{ $posts->links('pagination::craigs') }}
        </div>
    </div>
</section>
<!--end content-->
@endsection


@section('search')
<!--============ Hero Form ==========================================================================-->
<form action="{{ route('search.show') }}" class="hero-form form">
    <div class="container">
        <!--Main Form-->
        <div class="main-search-form">
            <div class="form-row">
                <div class="col-md-9 col-sm-9">
                    <div class="form-group">
                        <label for="what" class="col-form-label">{{$homeSearchTitle->value ?? "Default Message" }}</label>
                        <?php if (isset($_GET['q'])) { ?>
                            <div class="dropdown-trigger">
                                <input id="txtGoogleSearch" name="q" class="form-control" type="text" placeholder="Search Millions of Login Pages at Single Click" aria-haspopup="true" aria-controls="prova-menu" value="<?php echo $_GET['q']  ?>" >
                            </div>
                            <div class="dropdown-menu" id="prova-menu" role="menu"></div>
                        </div>
                    </div>
                    <?php } else {?>
                      <div class="dropdown-trigger">
                          <input id="txtGoogleSearch" name="q" class="form-control" type="text" placeholder="Search Millions of Login Pages at Single Click" aria-haspopup="true" aria-controls="prova-menu">
                      </div>
                      <?php } ?>
                    </div>
                    <!--end form-group-->
                </div>
                <!--end col-md-3-->
                <div class="col-md-3 col-sm-3">
                    <button type="submit" class="btn btn-primary width-100">Search</button>
                </div>
                <!--end col-md-3-->
            </div>
            <!--end form-row-->
        </div>
        <!--end main-search-form-->
        {{-- <!--Alternative Form-->
        <div class="alternative-search-form">
            <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse" aria-expanded="false"
                aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
            <div class="collapse" id="collapseAlternativeSearchForm">
                <div class="wrapper">
                    <div class="form-row">
                        <div
                            class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-xs-grid d-flex align-items-center justify-content-between">
                            <label>
                                <input type="checkbox" name="new">
                                New
                            </label>
                            <label>
                                <input type="checkbox" name="used">
                                Used
                            </label>
                            <label>
                                <input type="checkbox" name="with_photo">
                                With Photo
                            </label>
                            <label>
                                <input type="checkbox" name="featured">
                                Featured
                            </label>
                        </div>
                        <!--end col-xl-6-->
                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="form-row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <input name="min_price" type="text" class="form-control small" id="min-price"
                                            placeholder="Minimal Price">
                                        <span class="input-group-addon small">$</span>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <input name="max_price" type="text" class="form-control small" id="max-price"
                                            placeholder="Maximal Price">
                                        <span class="input-group-addon small">$</span>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <select name="distance" id="distance" class="small" data-placeholder="Distance">
                                            <option value="">Distance</option>
                                            <option value="1">1km</option>
                                            <option value="2">5km</option>
                                            <option value="3">10km</option>
                                            <option value="4">50km</option>
                                            <option value="5">100km</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-3-->
                            </div>
                            <!--end form-row-->
                        </div>
                        <!--end col-xl-6-->
                    </div>
                    <!--end row-->
                </div>
                <!--end wrapper-->
            </div>
            <!--end collapse-->
        </div>
        <!--end alternative-search-form--> --}}
    </div>
    <!--end container-->
</form>
<!--============ End Hero Form ======================================================================-->
<div class="background">
    <div class="background-image">
        <img src="assets/img/hero-background-image-02.jpg" alt="">
    </div>
    <!--end background-image-->
</div>
<!--end background-->
@endsection



@section('pagetitle')
<!--============ Page Title =========================================================================-->
<div class="page-title">
    <div class="container">
        <h1 class="opacity-60 center">
            {{$homeSliderTitle->value ?? "Default Message" }}
        </h1>
    </div>
    <!--end container-->
</div>
<!--============ End Page Title =====================================================================-->
@endsection


@section('head')
    <title>{{ $HomePageTitle->value ?? "Default Message"}}</title>
@endsection
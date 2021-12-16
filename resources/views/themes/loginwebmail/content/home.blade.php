@extends('themes.loginwebmail.layouts.master')


@section('content')
<!--*********************************************************************************************************-->
<!--************ CONTENT ************************************************************************************-->
<!--*********************************************************************************************************-->
<br>
<section class="hero">
    <div class="hero-body">
        <div class="container">
            <div class="has-text-centered">
                <h2 class="title">
                    Search for any Webmail or Email Login
                </h2>
                <form action="{{ route('search.show') }}" method="get" class="has-text-centered">
                    <div class="field has-addons has-addons-centered">
                        <div class="control">
                            <div class="dropdown">
                                <div class="dropdown-trigger">
                                    <input id="q" name="q" class="input is-fullwidth is-medium" type="text"
                                        placeholder="{{  config('app.SEARCH_INPUT_TEXT') }}" aria-haspopup="true"
                                        aria-controls="prova-menu">
                                </div>
                                <div class="dropdown-menu" id="prova-menu2" role="menu"></div>
                            </div>
                        </div>
                        <div class="control">
                            <input type="submit" class="button is-black is-medium" value="Search" />

                        </div>
                    </div>
                </form></br>
                <strong>
                    <p> Everyday we create a new login account on different sites for some purpose. There are millions
                        of sites and daily lakhs of new sites and services launch and to use these services we need to
                        create or register on them.</p>
                </strong> </br>


                <!-- Home page bellow search baar   start -->

                <!-- Home page bellow search baar  end-->


            </div>
        </div>
    </div>
</section>


<div class="container">
    <div class="columns">
        <div class="column">
            <div class="box">
                <h1 class="title is-4">
                    Popular Post
                </h1>
                <ul class="top-list">
                    @foreach ($posts as $post)
                    <li>
                        <a href="{{ route('post.show',$post->slug) }}" class="is-capitalized"
                            title="{{ $post->post_title }}">
                            {{ $post->post_title }}
                        </a>
                    </li>
                    @endforeach
                </ul>
                {{ $posts->links() }}
                <p>Even in our companies we have webmail/ email to communicate with our clients and colleagues. And no
                    doubt they are very handy and useful but different companies have different portal and services for
                    webmail. And they have specific url to login. </br></br>

                    Even colleges/ universities provide webmail to students, with a specific url to login. And I know
                    it’s really irritating when you do not recall the url. </br></br>

                    TO solve this issue, we created Loginwebmail.com, with it’s help you can easily search your webmail/
                    email provider or any other login services in the world. </br></br>
                </p>


            </div>
        </div>
    </div>
</div>


@endsection


@section('head')
<title>{{ $HomePageTitle->value ?? "Default Message"}}</title>
@endsection
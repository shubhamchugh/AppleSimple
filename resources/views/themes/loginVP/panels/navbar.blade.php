<!-- Navigation -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="img-responsive" style="width:250px;" src="{{ asset("/themes/loginVP/images/logo.png") }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" style="color: #266150;"></i>
        </button>
        <div class="collapse navbar-collapse navbar-right " id="navbarResponsive">
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a class="nav-link" href="/"><i class="fa fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('docs',['about']) }}"><i class="fa fa-info"></i> About Us</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('docs',['dmca']) }}"><i class="fa fa-comment"></i> Disclaimer
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('docs',['privacy']) }}"><i class="fa fa-tag"></i> Privacy-Policy
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
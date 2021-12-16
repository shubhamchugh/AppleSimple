<!-- Navigation -->
<nav class="navbar navbar-expand-lg"
    style="border-bottom-color: #050038;border-bottom-width: 2px;background-color:#FDF8F5;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="img-responsive" style="width:190px;" src="{{ asset('themes/loginVP-Blue/images/logo.png') }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse " id="navbarResponsive">
            <ul class="navbar-nav text-center ml-auto mr-auto">
                <li class="nav-item">
                    <form class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control"
                                placeholder="Search Millions of login pages at Single Click!">
                            <div class="input-group-append">
                                <button class="btn btn-info" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('docs',['contact']) }}">Contact-Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('docs',['about']) }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('docs',['dmca']) }}">Disclaimer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('docs',['privacy']) }}">Privacy-Policy</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
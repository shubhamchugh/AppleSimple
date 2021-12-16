<!--============ Secondary Navigation ===============================================================-->
<div class="secondary-navigation">
    <div class="container">
        {{-- <ul class="left">
            <li>
                <span>
                    <i class="fa fa-phone"></i> +1 123 456 789
                </span>
            </li>
        </ul>
        <!--end left--> --}}
        <ul class="right">
            @guest
            @if (Route::has('register'))
            <li>
                <a href="{{ route('register') }}">
                    <i class="fa fa-pencil-square-o"></i>Register
                </a>
            </li>
            @endif
            <li>
                <a href="{{ route('login') }}">
                    <i class="fa fa-sign-in"></i>Sign In
                </a>
            </li>
            @else
            <li>
            <a  href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout
                ({{ Auth::user()->name }})
            </a>
             </li>
            <form id="logout-form" action={{ route('logout') }} method="POST" style="display: none;">
                @csrf
            </form>
            @endguest




        </ul>
        <!--end right-->
    </div>
    <!--end container-->
</div>
<!--============ End Secondary Navigation ===========================================================-->
<!--============ Main Navigation ====================================================================-->
<div  class="main-navigation">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
            <a class="navbar-brand" href="/">
                <img src="assets/img/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <!--Main navigation list-->
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/disclaimer">Disclaimer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/privacy">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ $reportIssue->value ?? "#" }}" class="btn btn-primary text-caps btn-rounded">Report issues</a>
                    </li>
                </ul>
                <!--Main navigation list-->
            </div>
            <!--end navbar-collapse-->
        </nav>
        <!--end navbar-->
    </div>
    <!--end container-->
</div>
<!--============ End Main Navigation ================================================================-->
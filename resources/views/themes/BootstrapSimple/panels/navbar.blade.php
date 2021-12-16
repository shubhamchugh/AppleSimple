<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('docs',['about']) }}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('docs',['privacy']) }}">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('docs',['dmca']) }}">Disclaimer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('docs',['contact']) }}">Contact Us</a>
                </li>
            </ul>
            <form action="{{ route('search.show') }}" class="d-flex">
                <div class="input-group">
                    <?php if (isset($_GET['q'])) { ?>
                    <div class="dropdown-trigger">
                        <input id="txtGoogleSearch" name="q" class="form-control me-2" type="text"
                            placeholder="{{  config('app.SEARCH_INPUT_TEXT') }}" aria-haspopup="true"
                            aria-controls="prova-menu" value="<?php echo $_GET['q']  ?>">
                    </div>
                    <div class="dropdown-menu" id="prova-menu" role="menu">

                    </div>
                </div>

                <?php } else {?>

                <div class="dropdown-trigger">
                    <input id="txtGoogleSearch" name="q" class="form-control me-2" type="text"
                        placeholder="{{  config('app.SEARCH_INPUT_TEXT') }}" aria-haspopup="true"
                        aria-controls="prova-menu">
                </div>

                <?php } ?>

                <div class="input-group-append">
                    <button class="btn btn-theme" type="submit">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>

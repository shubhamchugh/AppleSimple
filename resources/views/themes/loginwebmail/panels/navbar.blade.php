<nav class="navbar is-warning has-shadow hidden-print">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">

                <span class="is-size-4">Login<b>Webmail</b></span>
            </a>
        </div>

        <div class="navbar-item is-hidden-touch">
            <form action="{{ route('search.show') }}" id="cse-search-box" method="get" autocomplete="on">
                <div class="field has-addons">
                    <div class="control is-expanded">
                        <div class="dropdown">
                            <?php if (isset($_GET['q'])) { ?>
                            <div class="dropdown-trigger">
                                <input id="txtGoogleSearch" name="q" class="input is-fullwidth" style="width: 620px;"
                                    type="text" placeholder="{{  config('app.SEARCH_INPUT_TEXT') }}"
                                    aria-haspopup="true" aria-controls="prova-menu" value="<?php echo $_GET['q']  ?>">
                            </div>
                            <div class="dropdown-menu" id="prova-menu" role="menu"></div>
                        </div>
                    </div>
                    <?php } else { ?>
                    <div class="dropdown-trigger">
                        <input id="txtGoogleSearch" name="q" class="input is-fullwidth" style="width: 620px;"
                            type="text" placeholder="{{  config('app.SEARCH_INPUT_TEXT') }}" aria-haspopup="true"
                            aria-controls="prova-menu">
                    </div>
                    <?php } ?>
                    <div class="control">
                        <button class="button is-black" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div id="navMenuColordark-example" class="navbar-menu">
            <div class="navbar-end">

                <a class="navbar-item" href="{{ route('docs',['contact']) }}">
                    Contact Us
                </a>
                <a class="navbar-item" href="https://forms.gle/r4x5kpwad2TKLxJj9">
                    Remove Your Site
                </a>
            </div>
        </div>

</nav>
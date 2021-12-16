<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
<footer class="footer hidden-print">
    <div class="content has-text-centered">
        <div class="buttons is-centered">

            <a class="button is-text" href="{{ route('docs',['about']) }}">About Us</a>
            <a class="button is-text" href="{{ route('docs',['contact']) }}">Contact Us</a>
            <a class="button is-text" href="{{ route('docs',['privacy']) }}">Privacy Policy</a>
            <a class="button is-text" href="{{ route('docs',['dmca']) }}">DMCA Disclaimer</a>

        </div>
    </div>

    <div class="content has-text-centered">
        <p>
          <strong> &copy; 2021 {{ config('app.name') }}</strong>
        </p>
    </div>
</footer>

<a href="#" id="scroll" style="display: none;"><span></span></a>

<!-- jquery -->
<script src="{{ asset('themes/loginwebmail/bootstrap.js') }}"></script>
<script src="{{ asset(" themes/loginwebmail/all.js") }}"></script>

<!--end footer-->

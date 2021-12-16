<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->


<section class="top-categories">
    <div class="container">
        <h2 class="page-title text-capitalize mt-3"> Popular Search </h2>
        <div class="row gx-3 gx-sm-5">
            @foreach ($sidebar as $item)
            <div class="col-sm-3">
                <div>
                    <div>
                        <a href="{{ route('post.show',$item->slug) }}" title="{{ $item->post_title }}"> {{
                            $item->post_title }}</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="a2z">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-xs-12 text-center">
                @foreach (array_merge(range('A', 'Z'),range(1,9)) as $char)
                <a href='{{ route("sitemap.show", ["sitemap" => $char]) }}' class="btn btn-outline-primary
                    btn-sm"><strong>{{ $char }}</strong></a>

                @endforeach

            </div>
        </div>
    </div>
</section>


<footer>
    <div class="container">
        <h4 class="text-primary text-left">About US</h4>
        <p class="mb-1">The display of third-party trademarks and trade names on this site does not necessarily indicate
            any affiliation or endorsement of test.com.</p>
        <p>If you click a merchant link and buy a product or service on their website, we may be paid a fee by the
            merchant.</p>
        <p class="text-center"><strong>© 2019 <a href="#">test.com</a>. All rights reserved | Email:
                info@test.com</strong></p>
    </div>
</footer>

<a href="#" id="scroll" style="display: none;"><span></span></a>

<!-- jquery -->
<script src="{{ asset('themes/BootstrapSimple/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('themes/BootstrapSimple/js/popper.min.js') }}"></script>
<script src="{{ asset('themes/BootstrapSimple/js/bootstrap.min.js') }}"></script>

<script>
    $(document).ready(function () {
      $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          $('#scroll').fadeIn();
        } else {
          $('#scroll').fadeOut();
        }
      });
      $('#scroll').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
      });
    });
</script>
<!--end footer-->
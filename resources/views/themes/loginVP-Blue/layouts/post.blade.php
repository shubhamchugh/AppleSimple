<!doctype html>
<html lang="en">

@include('themes.loginVP-Blue.panels.headpost')

<body>
    <div class="page home-page">
        @include('themes.loginVP-Blue.panels.headerpost')

        @section('content')

        @show


        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        @include('themes.loginVP-Blue.panels.footer')
    </div>
    <!--end page-->

    @include('themes.loginVP-Blue.panels.scripts')
</body>

</html>
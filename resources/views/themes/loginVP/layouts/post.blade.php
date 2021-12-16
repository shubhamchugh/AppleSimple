<!doctype html>
<html lang="en">

@include('themes.loginVP.panels.headpost')

<body>
    <div class="page home-page">
        @include('themes.loginVP.panels.headerpost')

        @section('content')

        @show


        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        @include('themes.loginVP.panels.footer')
    </div>
    <!--end page-->

    @include('themes.loginVP.panels.scripts')
</body>

</html>
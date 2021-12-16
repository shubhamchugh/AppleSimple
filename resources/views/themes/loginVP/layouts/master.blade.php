<!doctype html>
<html lang="en">

@include('themes.loginVP.panels.head')

<body>
    <div class="page home-page">
        @include('themes.loginVP.panels.header')

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
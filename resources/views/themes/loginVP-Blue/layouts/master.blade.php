<!doctype html>
<html lang="en">

@include('themes.loginVP-Blue.panels.head')

<body>
    <div class="page home-page">
        @include('themes.loginVP-Blue.panels.header')

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
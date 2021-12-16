<!doctype html>
<html lang="en">

@include('themes.craigs.panels.head')

<body>
    <div class="page home-page">
        @include('themes.craigs.panels.header')

        @section('content')

        @show

       
        <!--*********************************************************************************************************-->
        <!--************ FOOTER *************************************************************************************-->
        <!--*********************************************************************************************************-->
        @include('themes.craigs.panels.footer')
    </div>
    <!--end page-->

    @include('themes.craigs.panels.scripts')
</body>

</html>
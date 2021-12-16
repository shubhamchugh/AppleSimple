<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
<footer class="footer">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <a href="#" class="brand">
                        <img src="assets/img/logo.png" alt="">
                    </a>
                    <p>
                        {{$FooterContent->value ?? "Default Message" }}
                    </p>
                </div>
                <!--end col-md-5-->
                <div class="col-md-3">
                    <h2>Navigation</h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <nav>
                                <ul class="list-unstyled">
                                    {!!  $footerLinks1->value ?? "Default Message footer 1" !!}
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <nav>
                                <ul class="list-unstyled">
                                    {!!  $footerLinks2->value ?? "Default Message footer 1" !!}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end col-md-3-->
                <div class="col-md-4">
                    <h2>Contact</h2>
                     {!!  $ContactUs->value ?? "Default Message footer 1" !!}
                </div>
                <!--end col-md-4-->
            </div>
            <!--end row-->
        </div>
        <div class="background">
            <div class="background-image original-size">
                <img src="assets/img/footer-background-icons.jpg" alt="">
            </div>
            <!--end background-image-->
        </div>
        <!--end background-->
    </div>
</footer>
<!--end footer-->
@extends('themes.loginVP.layouts.master')


@section('title', 'Home Page')
@section('content')
<div class="container margin_60_35">
        <div class="detail_title_1">
                <h1>DMCA Disclaimer</h1>
        </div>
        <h3><strong>DMCA Copyright Infringement Notification</strong></h3>
        <p><span style="font-weight: 400;">All trademarks, registered trademarks, product names and company names or
                        logos
                        appearing on the site are the property of their respective owners. staffslogin.com abides by the
                        federal
                        Digital Millennium Copyright Act (DMCA) by responding to notices of alleged infringement that
                        complies with
                        the DMCA and other applicable laws. As part of our response, we may remove or disable access to
                        material
                        residing on site that is controlled or operated by staffslogin.com that is claimed to be
                        infringing, in
                        which case we will make a good-faith attempting to contact the developer who submitted the
                        affected material
                        so that they may make a counter notification, also in accordance with the DMCA.</span></p>
        <p>&nbsp;</p>
        <p><span style="font-weight: 400;">Before serving either a Notice of Infringing Material or
                        Counter-Notification,
                        you may wish to contact a lawyer to better understand your rights and obligations under the DMCA
                        and other
                        applicable laws. The following notice requirements are intended to comply with staffslogin.coms
                        rights and
                        obligations under the DMCA, in particular, section 512(c), and do not constitute legal
                        advice.</span></p>
        <p>&nbsp;</p>
        <h3><strong>Notice of Copyright Infringing</strong></h3>
        <p><span style="font-weight: 400;">To file a notice of infringing material on staffslogin.com please provide a
                        notification containing the following details</span></p>
        <p>&nbsp;</p>
</div>
<!-- /container -->

<div class="sidebar bl-green">
        <div class="header">
                <i class="fa fa-flash"></i>
                Similar Asks
        </div>
        <div class="body">
                <ul>
                        @foreach ($sidebar as $item)
                        <li><a href="{{ route('post.show',$item->slug) }}"><span
                                                class="badge badge-success"><?php echo(rand(10,1000)) ?></span>
                                        <div class="sidebar-question">{{ $item->post_title }}</div>
                                </a></li>
                        @endforeach
                </ul>
        </div>
</div>
@endsection



@section('head')
<meta name="description" content="DMCA Disclaimer">
<title>DMCA Disclaimer</title>
@endsection
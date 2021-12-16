<div class="column">
    <div class="box">

        <div class="box" style="height: auto !important;">
            <div class="sidebar bl-green">
                <div class="header">
                    <h2 class="title is-5"><strong>Related Post</strong></h2>
                </div>
                <div class="body">

                    <ul>
                        @foreach ($sidebar as $item)
                        <li>
                            {{ $loop->iteration }}. <a href="{{ route('post.show',$item->slug) }}"
                                title="{{ $item->post_title }}"> {{
                                $item->post_title }}
                                <sup><i class="fa fa-external-link" aria-hidden="true"></i></sup></a>
                        </li>
                        @endforeach
                    </ul>
                </div>




                <div class="header">
                    <h2 id="drop" class="title is-5"><strong>Troubleshoot:</strong></h2>
                </div>
                <div class="body">



                    <ul>
                        <li>Make sure the Caps Lock is off.</li>
                        <li>Make sure that you have an active and reliable internet connection. Sometimes Internet
                            connections cause
                            unexpected errors such as timeouts or packet loss.</li>
                        <li>Ensure that you typed your details correctly means if some of the letters are in the capital
                            or symbol then
                            please enter all that very carefully. If there is an option for viewing your password, use
                            it. Providing
                            there is no one that can not see your password around.</li>
                        <li>Make sure your CAPS LOCK is off.</li>
                        <li>If you still cannot access the site, you can clear your cache and cookies of your browser or
                            use the
                            Incognito mode of the browser. If you don&rsquo;t know how to do that, then take the help of
                            Google.</li>
                        <li>If you are using any VPN then turn off any Virtual Private Network (VPN). Some sites will
                            block specific
                            countries or place IP addresses.</li>
                        <li>If you are not using VPN and you have a good connection, you may have forgotten your
                            password. Follow the
                            recover your password instructions here.</li>
                        <li>If you are still having issues, and cannot access your account, please feel free to contact
                            us and we will
                            be happy to help you as soon as we can</li>
                    </ul>
                </div>




            </div>
        </div>
    </div>
</div>
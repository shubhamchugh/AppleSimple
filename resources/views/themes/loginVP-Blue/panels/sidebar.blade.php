<div class="col-md-4 col-sm-12">
    <div class="troubleShoot">
        <div class="login-helper" style="font-size:15px;text-align:left;">
            <h2 style="font-size:20px;">Troubleshoot:</h2>
            <ul>
                <li>Make sure the CAPS Lock is off.</li>
                <li>Clear your browser cache and cookies.</li>
                <li>Make sure the internet connection is avaiable and you’re definitely online before trying again.</li>
                <li>Avoid using VPN.</li>
                <li>In case you have forgot your password then <a href="#" style="color:blue;">follow these
                        instructions.</a></li>
                <li>If you still can’t get into your account, <a href="#" style="color:blue;">contact us</a> and we’ll
                    be in touch to help you as soon as we can.</li>
            </ul>
        </div>
    </div>
    <div class="blocks">
        <div class="row">
            <div class="col-md-3">
                <h5 class="text-grey">{{ rand(1,10) }}</h5>
                <p>Active</p>
            </div>
            <div class="col-md-3">
                <h5 class="text-grey">{{ rand(1,10) }}</h5>
                <p>Answers</p>
            </div>
            <div class="col-md-3">
                <h5 class="text-grey">{{ rand(1,10) }}</h5>
                <p>Images</p>
            </div>
            <div class="col-md-3">
                <h5 class="text-grey">{{ rand(1,10) }}</h5>
                <p>Users</p>
            </div>
        </div>
    </div>
    <div class="sidebar bl-green">
        <div class="header">
            <i class="fa fa-flash"></i>
            Similar Asks
        </div>
        <div class="body">
            <ul>
                @foreach ($sidebar as $item)
                <li><a href="{{ route('post.show',$item->slug) }}"><span class="badge badge-success">
                            <?php echo(rand(10,1000)) ?>
                        </span>
                        <div class="sidebar-question">{{ $item->post_title }}</div>
                    </a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <h2>All Post</h2>

    @foreach (array_merge(range('A', 'Z'),range(1,9)) as $char)
    <a href='{{ route("sitemap.show" , ["sitemap"=> $char]) }}' class='is-capitalized'>{{ $char }}</a>
    @endforeach

</div>
</div>
</div>
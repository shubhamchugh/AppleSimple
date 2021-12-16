<div class="col-md-3">
    <!--============ Side Bar ===============================================================-->
    <aside class="sidebar">            
        <section>
            <h2>Random Post</h2>
            <ul class="sidebar-list list-unstyled">
                @foreach ($sidebar as $item)
                <li>
                    <a href="{{ route('post.show',$item->slug) }}"> {{ $item->post_title }}</a>
                </li>
                @endforeach
            </ul>
        </section>
        <h2>All Post</h2>
        @foreach (array_merge(range('A', 'Z'),range(1,9)) as $char)
            <a href='{{ route('sitemap.show', ['sitemap' => $char]) }}' class='is-capitalized'>{{ $char }}</a>
       
        @endforeach
    </aside>
    <!--============ End Side Bar ===========================================================-->
</div>
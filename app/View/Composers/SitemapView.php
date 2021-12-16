<?php

namespace App\View\Composers;

use App\Models\Post;
use Illuminate\View\View;

class SitemapView
{
    public function compose(View $view)
    {
        $this->composeSitemap($view);
    }

    public function composeSitemap(View $View)
    {
        $sitemap = Post::inRandomOrder()->limit(100)->get();

        $View->with([
           'sidebar' => $sitemap,
       ]);
    }
}

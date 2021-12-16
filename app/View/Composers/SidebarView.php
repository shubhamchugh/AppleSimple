<?php

namespace App\View\Composers;

use App\Models\Post;
use Illuminate\View\View;

class SidebarView
{
    public function compose(View $view)
    {
        $this->composeSidebar($view);
    }

    public function composeSidebar(View $View)
    {

        $sidebar = Post::published()->where('post_ref', config('app.REKEY'))->wherein('id', (getRandomNumberArray(config('app.RANDOM_POST_START_COUNT'), config('app.RANDOM_POST_END_COUNT'), config('app.SIDEBAR_POST_COUNT'))))->get();

        $View->with([
            'sidebar' => $sidebar,
        ]);
    }
}

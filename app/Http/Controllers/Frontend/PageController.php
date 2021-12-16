<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Page;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function show(Page $page)
    {
        $theme_path_page = 'themes.' . config('app.THEME_NAME') . '.content.page';
        return view($theme_path_page,
            [
                'page' => $page,
            ]);
    }
}

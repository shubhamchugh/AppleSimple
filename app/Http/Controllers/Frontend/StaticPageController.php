<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticPageController extends Controller
{
    public function __invoke()
    {
        $theme_path_staticpage = 'themes.' . config('app.THEME_NAME') . '.content.staticpage.';
        return view($theme_path_staticpage . request()->segment(2));
    }
}

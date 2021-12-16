<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $theme_path_post = 'themes.' . config('app.THEME_NAME') . '.content.post';
        return view($theme_path_post,
            [
                'post' => $post,
            ]);
    }

    public function cid(Request $request)
    {
        $url            = $request->url;
        $title          = $request->title;
        $dec            = $request->dec;
        $slug           = $request->slug;
        $theme_path_cid = 'themes.' . config('app.THEME_NAME') . '.content.cid';

        return view($theme_path_cid,
            [
                'url'   => $url,
                'title' => $title,
                'dec'   => $dec,
                'slug'  => $slug,
            ]);
    }
}

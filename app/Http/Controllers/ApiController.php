<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostContent;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::published()->where('id', $id)->first();
        if (!empty($post)) {

            $postContent = PostContent::where('post_id', $post->id)->get()->toArray();

            if (!empty($postContent)) {

                $postValue['title']       = $post->post_title;
                $postValue['source_url']  = $post->source_url;
                $postValue['status']      = true;
                $postValue['postContent'] = $postContent;

                return $postValue;

            } else {
                $postValue['status'] = false;
                return $postValue;
            }

        } else {
            $postValue['status'] = false;
            return $postValue;
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

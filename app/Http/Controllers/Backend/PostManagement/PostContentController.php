<?php

namespace App\Http\Controllers\Backend\Postmanagement;

use App\Models\PostContent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostContentController extends Controller
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
    public function create(PostContent $postContent)
    {
        return view('backend.content.postcontent.create',['postContent'=>$postContent]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
            PostContent::create($request->all());
            return redirect()->route('postcontent.add',$request->post_id)->with('message', 'Your Post Meta was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postContent = PostContent::findOrFail($id);
        $post_id =$postContent->post_id;
        return view("backend.content.postcontent.edit",[
            'postContent' => $postContent,
            'post_id'=>$post_id
        ]);
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
        $postContent = PostContent::findOrFail($id);
        $postContent->update($request->all());
        return redirect()->back()->with('message', 'Your post Content was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PostContent:: findOrFail($id)->delete();
        return redirect()->back()->with('trash-message', ['Your Post Content deleted', $id]);
    }

    public function AddPostContent(PostContent $postContent,$post_id=null)
    {
        return view('backend.content.postcontent.create',[ 'post_id' => $post_id,'postContent'=>$postContent ]);
    }
}

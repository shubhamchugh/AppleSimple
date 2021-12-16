<?php

namespace App\Http\Controllers\Backend\PostManagement;


use App\Models\Post;
use App\Http\Requests;
use App\Models\PostContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;

class PostController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $onlyTrashed = false;

        if (($status = $request->get('status')) && $status == 'trash') {
            $posts       = Post::onlyTrashed()->OnlyPost()->latest()->paginate($this->limit);
            $postCount   = Post::onlyTrashed()->OnlyPost()->count();
            $onlyTrashed = true;
        } elseif ($status == 'published') {
            $posts     = Post::published()->OnlyPost()->latest()->paginate($this->limit);
            $postCount = Post::published()->OnlyPost()->count();
        } elseif ($status == 'scheduled') {
            $posts     = Post::scheduled()->OnlyPost()->latest()->paginate($this->limit);
            $postCount = Post::scheduled()->OnlyPost()->count();
        } elseif ($status == 'draft') {
            $posts     = Post::draft()->OnlyPost()->latest()->paginate($this->limit);
            $postCount = Post::draft()->OnlyPost()->count();
        } else {
            $posts     = Post::latest()->OnlyPost()->paginate($this->limit);
            $postCount = Post::OnlyPost()->count();
        }

        $statusList = $this->statusList();
        
        return view(
            "backend.content.post.index",
            [
        'posts'       => $posts,
        'postCount'   => $postCount,
        'onlyTrashed' => $onlyTrashed,
        'statusList'  => $statusList,
            ]
        );
    }


    private function statusList()
    {
        return [
            'all'       => Post::count(),
            'published' => Post::published()->count(),
            'scheduled' => Post::scheduled()->count(),
            'draft'     => Post::draft()->count(),
            'trash'     => Post::onlyTrashed()->count(),
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        return view('backend.content.post.create', ['post'=>$post]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(['post_type' => 'post','status'=>'1','fake_user_id'=>'1']);
                Post::create($request->all());
        return redirect('/post')->with('message', 'Your Post was created successfully!');
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
        $post = Post::findOrFail($id);

        $postContent = PostContent::where('post_id','=', $id)->get();
        return view("backend.content.post.edit",[
            'post'=>$post,
            'postContent' => $postContent
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
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->back()->with('message', 'Your post was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post:: findOrFail($id)->delete();
        return redirect('/post')->with('trash-message', ['Your Page moved to Trash', $id]);
    }


    public function forceDestroy($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->forceDelete();

        return redirect('content?status=trash')->with('message', 'Your page has been deleted successfully');
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->restore();
        return redirect()->back()->with('message', 'You page has been moved from the Trash');
    }
}

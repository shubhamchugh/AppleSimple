<?php

namespace App\Http\Controllers\Backend\PageManagement;

use App\Models\Page;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\BackendController;

class PageController extends BackendController
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
            $pages       = Page::onlyTrashed()->OnlyPage()->latest()->paginate($this->limit);
            $pageCount   = Page::onlyTrashed()->OnlyPage()->count();
            $onlyTrashed = true;
        } elseif ($status == 'published') {
            $pages     = Page::published()->OnlyPage()->latest()->paginate($this->limit);
            $pageCount = Page::published()->OnlyPage()->count();
        } elseif ($status == 'scheduled') {
            $pages     = Page::scheduled()->OnlyPage()->latest()->paginate($this->limit);
            $pageCount = Page::scheduled()->OnlyPage()->count();
        } elseif ($status == 'draft') {
            $pages     = Page::draft()->OnlyPage()->latest()->paginate($this->limit);
            $pageCount = Page::draft()->OnlyPage()->count();
        } else {
            $pages     = Page::latest()->OnlyPage()->paginate($this->limit);
            $pageCount = Page::OnlyPage()->count();
        }

        $statusList = $this->statusList();
        
        return view(
            "backend.content.pages.index",
            [
        'pages'       => $pages,
        'pageCount'   => $pageCount,
        'onlyTrashed' => $onlyTrashed,
        'statusList'  => $statusList,
    ]
        );
    }

    private function statusList()
    {
        return [
            'all'       => Page::count(),
            'published' => Page::published()->count(),
            'scheduled' => Page::scheduled()->count(),
            'draft'     => Page::draft()->count(),
            'trash'     => Page::onlyTrashed()->count(),
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Page $page)
    {
        return view('backend.content.pages.create', ['page'=>$page]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PageStoreRequest $request)
    {
        $request->request->add(['page_type' => 'page','status'=>'1']);
        $request->user()->page()->create($request->all());
        return redirect('/content')->with('message', 'Your Page was created successfully!');
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
        $page = Page::findOrFail($id);
        return view("backend.content.pages.edit",[
            'page'=>$page,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PageUpdateRequest $request, $id)
    {
        
        $page = Page::findOrFail($id);
        $page->update($request->all());
        return redirect()->back()->with('message', 'Your Page was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::findOrFail($id)->delete();

        return redirect('/content')->with('trash-message', ['Your Page moved to Trash', $id]);
    }

    public function forceDestroy($id)
    {
        $page = Page::withTrashed()->findOrFail($id);
        $page->forceDelete();

        return redirect('content?status=trash')->with('message', 'Your page has been deleted successfully');
    }

    public function restore($id)
    {
        $page = Page::withTrashed()->findOrFail($id);
        $page->restore();

        return redirect()->back()->with('message', 'You page has been moved from the Trash');
    }
}

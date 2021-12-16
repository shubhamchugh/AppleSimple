<?php

namespace App\Http\Controllers\Backend\Settings;

use Illuminate\Http\Request;
use App\Models\ScrapingChunk;
use App\Http\Controllers\Controller;

class ScrapingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scrapingImage   = ScrapingChunk::Where('type','is_image')->get();
        $scrapingContent = ScrapingChunk::Where('type','is_content')->get();
        $scrapingMetadata = ScrapingChunk::Where('type','is_metadata')->get();

       return view('backend.content.settings.scraping.index',[
           'scrapingImage' => $scrapingImage,
           'scrapingContent'=>$scrapingContent,
           'scrapingMetadata' => $scrapingMetadata,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ScrapingChunk $scrapingChunk)
    {
        return view('backend.content.settings.scraping.create',['scrapingChunk'=>$scrapingChunk]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ScrapingChunk::create($request->all());
        return redirect()->back()->with('message','Url Created');
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
       $scrapingChunk = ScrapingChunk::findorfail($id);
       return view("backend.content.settings.scraping.edit",['scrapingChunk'=>$scrapingChunk]);
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
        $scrapingChunk = ScrapingChunk::findorfail($id);
        $scrapingChunk->update($request->all());
        return redirect()->back()->with('message','Url updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ScrapingChunk::findorfail($id)->delete();
        return redirect()->back()->with('message','Your Scraping URL was deleted');
    }
}

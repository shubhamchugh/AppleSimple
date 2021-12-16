<?php

namespace App\Http\Controllers\Backend\Settings;

use App\Models\CmsSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BackendController;

class BasicConfiguration extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allSetting = CmsSetting::get();
        
        return view('backend.content.settings.basic.index',['allSetting'=> $allSetting,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CmsSetting $cmsSetting)
    {
        return view('backend.content.settings.basic.create',['cmsSetting'=>$cmsSetting]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CmsSetting::create($request->all());
        return redirect()->back()->with('message', 'CMS Settings Saved');
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
        $cmsSetting = CmsSetting::findorfail($id);
        return view('backend.content.settings.basic.edit',['cmsSetting'=>$cmsSetting]);
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
        $cmsSetting = CmsSetting::findorfail($id);
        $cmsSetting->update($request->all());
        return redirect()->back()->with('message','Settings updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CmsSetting::findOrFail($id)->delete();
        return redirect()->back()->with('message','Setting deleted successfully');
    }
}

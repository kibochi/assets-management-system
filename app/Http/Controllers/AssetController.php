<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Http\Requests\StoreAssetRequest;
use App\Http\Requests\UpdateAssetRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Staff;


class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Asset $asset)
    {
        $user = auth()->user()->id;
        $admin = User::where('id', $user)->first();
        $sets = Asset::with('user')->where('admin_id',$user)->get();
        $tag_id = $this->tagId();
       
        return view('assets.index',compact('admin','sets','asset','tag_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
        $user = auth()->user()->id;
        $admin = User::where('id', $user)->first();
        return view('assets.create',compact('asset','admin'));
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssetRequest $request)
    {
        $assets = Asset::create($request->validated());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        $user = auth()->user()->id;
        $admin = User::where('id', $user)->first();
        $code = Asset::get(['tag_id']);
       
        return view('assets.show',compact('asset','admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        $user = auth()->user()->id;
        $admin = User::where('id', $user)->first();
        
        
        return view('assets.edit',compact('asset','admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssetRequest $request, Asset $asset)
    {
        $asset->update($request->validated());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        $asset->delete();
        return redirect('/asset');
    }

    private function tagId(){
        $user = auth()->user()->id;
        $assets = Asset::where('admin_id', $user)->get();
        $assetno = $assets->count() + 1;
        $tag_id = "Asset" . "/" . $assetno . "/". date('Y'); 
       return $tag_id;
    }
}

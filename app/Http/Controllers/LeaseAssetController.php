<?php

namespace App\Http\Controllers;

use App\Models\LeaseAsset;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLeaseRequest;
class LeaseAssetController extends Controller
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
    public function store(StoreLeaseRequest $request)
    {
        $lease=LeaseAsset::create($request->validated());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LeaseAsset  $leaseAsset
     * @return \Illuminate\Http\Response
     */
    public function show(LeaseAsset $leaseAsset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LeaseAsset  $leaseAsset
     * @return \Illuminate\Http\Response
     */
    public function edit(LeaseAsset $leaseAsset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LeaseAsset  $leaseAsset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeaseAsset $leaseAsset)
    {
        $leaseAsset->update($request->validated());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LeaseAsset  $leaseAsset
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaseAsset $leaseAsset)
    {
       
    }
}

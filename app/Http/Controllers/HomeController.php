<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Asset;
use App\Models\Staff;
use App\Models\LeaseAsset;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user()->id;
        $admin = User::where('id', $user)->first();
        $assets = Asset::with('user')->where('admin_id', $user)->get();
        $staffs = Staff::with('user')->where('admin_id', $user)->get();
        $leased = LeaseAsset::with(['staff','asset'])->where('admin_id', $user)->get();
        
        return view('admin.index',compact('admin','assets','staffs','leased'));
    }
}

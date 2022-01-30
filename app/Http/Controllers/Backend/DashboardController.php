<?php

namespace App\Http\Controllers\Backend;
use App\Models\Member;
use App\Models\Equipment;
use App\Models\Addtrainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $equipment = Equipment::count();
        $member = Member::count();
        $addtrainers = Addtrainer::count();
        // dd($equipment);
        return view('admin.dashboard',compact('equipment','member','addtrainers'));
    }
    
}

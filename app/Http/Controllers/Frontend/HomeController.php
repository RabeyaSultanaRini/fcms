<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Addtrainer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $trainer=Addtrainer::all();
        return view('website.master',compact('trainer'));
    }
}

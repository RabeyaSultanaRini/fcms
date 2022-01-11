<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Diet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DietController extends Controller
{
public function dietList(){
    $diet=Diet::all();
    return view('website.partial.dietlist',compact('diet'));

}
}

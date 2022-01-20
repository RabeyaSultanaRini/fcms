<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Package;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function PackageList(){
        $Packages=Package::all();
        return view('website.partial.packageList',compact('Packages'));
    }
}

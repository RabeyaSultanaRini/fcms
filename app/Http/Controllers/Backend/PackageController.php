<?php

namespace App\Http\Controllers\Backend;
use App\Models\Package;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function PackageAdd(){
        return view('admin.partial.package.AddPackage');
        
    }
    public function PackageStore(Request $request){
        Package::create([
         'package_name'=>$request->package_name,
            'package_info'=>$request->package_info,
            'package_duration'=>$request->package_duration,
           
           

        ] );
        return redirect()->back();
    }
    public function PackageList(){
        $Packages=Package::all();
        return view('admin.partial.Package.PackageList',compact('Packages'));
    }
}

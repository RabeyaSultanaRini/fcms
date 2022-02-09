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
            'package_details'=>$request->package_details,
           
           

        ] );
        return redirect()->back();
    }
    public function PackageList(){
        $Packages=Package::all();
        return view('admin.partial.Package.PackageList',compact('Packages'));
    }
    public function trainerEdit($id)
    {

        $Package=Package::find($id);
//        $product=Product::where('user_id',$id)->first();

//        dd($product);
        // $all_categories=Category::all();
//        dd($all_categories);
        return view('admin.partial.Package.PackageList',compact('Packages'));

    }
    public function PackageUpdate(Request $request,$id)
    {

        $Package=Package::find($id);
        $Package->update([
            // field name from db || field name from form
            'package_name'=>$request->package_name,
            'package_info'=>$request->package_info,
            'package_duration'=>$request->package_duration,
            'package_details'=>$request->package_details,
           

        ]);
        return redirect()->route('admin.Package.List')->with('success','Package Updated Successfully.');

    }
    public function PackageDelete($Package_id)
    {
        Package::find($Package_id)->delete();
       return redirect()->back()->with('success','Package Deleted.');
    }
    
    public function packageEdit($Package_id)
    {
        $package=Package::find($Package_id);
       return view('admin.partial.Package.packageedit',compact('package'));
    }

    
}

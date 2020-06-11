<?php

namespace App\Http\Controllers;

use App\Packages;
use DB;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function createPackage(Request $request) {
        $name = $request['name'];
        $price = $request['price'];

        $package = new Packages();
        $package->name = $name;
        $package->price = $price;

        $package->save();
        return ['status' => 'OK'];
        //return redirect()->back();
    }

    public function viewPackages() {
        $package = Packages::all();
        /*$package = DB::table('packages')
                     ->where('name', '=', 'Premium')
                     ->get();*/

        return view('packages', ['package'=>$package]);
    }

    public function createPackageAjax(Request $request) {
        $name = $request['name'];
        $price = $request['price'];
        
        $package = new Packages();
        $package->name = $name;
        $package->price = $price;

        $package->save();
        return $package;
    }


}

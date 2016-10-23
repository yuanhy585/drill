<?php

namespace App\Http\Controllers;

use App\Citi;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AreaController extends Controller
{
    public function index()
    {
        $provinces = DB::table('pros')->pluck('name','id');
        $cities = DB::table('citis')->pluck('name','id');

        return view('province.index',compact('provinces', 'cities'));

    }

    public function province(Request $request)
    {
        $inputs = $request->all();
        $cities = Citi::where('province_id', $inputs['province_id'])->get();

        return $cities;
    }
}

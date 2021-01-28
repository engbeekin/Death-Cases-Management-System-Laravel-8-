<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\User;
use App\Models\Death;
use App\Models\Disease;
use App\Models\Hospitals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ChartsController extends Controller
{
     public function index(){

            $deaths = Death::select(DB::raw("COUNT(*) as count"))
                        ->whereYear('dateofdeath', date('Y'))
                        ->groupBy(DB::raw("Month(dateofdeath)"))
                        ->pluck('count');
                        $user=User::count();
    $hospital=Hospitals::count();
        $death=Death::count();
$city=City::count();
$dis=Disease::count();

            return view('admin.dashboard',compact('deaths','city','dis','death','user','hospital'));



}



}

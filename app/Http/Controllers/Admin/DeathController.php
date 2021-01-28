<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Death;
use App\Models\Disease;
use App\Models\Hospitals;
use Illuminate\Http\Request;

class DeathController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $death=Death::all();
        return view('admin.deaths.index',compact('death'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $city=City::all();
        $hos=Hospitals::all();
        $dis=Disease::all();
        return view('admin.deaths.create',compact('city','hos','dis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Death::create($request->all());
        return redirect()->route('death');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $death=Death::findOrFail($id);
        $city=City::get();
        $hos=Hospitals::get();
        $dis=Disease::get();
        return view('admin.deaths.edit',compact('death','hos','dis','city')) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $death=Death::findOrFail($id);
        $death->update($request->all());
        return redirect()->route('death');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $death=Death::findOrFail($id);
        $death->delete();
        return redirect()->route('death');
    }
}

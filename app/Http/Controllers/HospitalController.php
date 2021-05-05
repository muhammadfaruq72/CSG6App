<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

use App\Hospital;
class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospital = Hospital::all();
        return view('pages.Hospital.index',compact('hospital'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Hospital.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hospital = new Hospital();
        $hospital->title = Crypt::encryptString(request('title'));
        $hospital->email = Crypt::encryptString(request('email'));
        $hospital->password = Crypt::encryptString(request('password'));
        $hospital->phone = Crypt::encryptString(request('phone'));
        $hospital->address = Crypt::encryptString(request('address'));
        $hospital->save();
        return redirect('/Hospital');
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
     $hospital = Hospital::find($id);
     return view('pages.Hospital.edit',compact('hospital'));
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
        $hospital = Hospital::find($id);
        $hospital->title = Crypt::encryptString(request('title'));
        $hospital->email = Crypt::encryptString(request('email'));
        $hospital->password = Crypt::encryptString(request('password'));
        $hospital->phone = Crypt::encryptString(request('phone'));
        $hospital->address = Crypt::encryptString(request('address'));
        $hospital->save();
        return redirect('/Hospital');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $hospital = Hospital::find($id);
        $hospital->delete();
        return redirect('/Hospital');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Laboratory;
class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lab = Laboratory::all();
        return view('pages.Lab.index',compact('lab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.Lab.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lab = new Laboratory();
        $lab->title = Crypt::encryptString(request('title'));
        $lab->email = Crypt::encryptString(request('email'));
        $lab->password = Crypt::encryptString(request('password'));
        $lab->phone = Crypt::encryptString(request('phone'));
        $lab->address = Crypt::encryptString(request('address'));
        $lab->save();
        return redirect('/Laboratory');
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
     $lab = Laboratory::find($id);
     return view('pages.Lab.edit',compact('lab'));
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
        $lab = Laboratory::find($id);
        $lab->title = Crypt::encryptString(request('title'));
        $lab->email = Crypt::encryptString(request('email'));
        $lab->password = Crypt::encryptString(request('password'));
        $lab->phone = Crypt::encryptString(request('phone'));
        $lab->address = Crypt::encryptString(request('address'));
        $lab->save();
        return redirect('/Laboratory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $lab = Laboratory::find($id);
        $lab->delete();
        return redirect('/Laboratory');
    }
}

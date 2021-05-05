<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Labtest;
use App\Patient;
use App\Doctor;
use App\Laboratory;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
class LabtestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labtest = Labtest::all();
        return view('pages.Labtest.index',compact('labtest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patient = Patient::all();
        $doctor = Doctor::all();
        $lab =    Laboratory::all();
        return view('pages.Labtest.create',compact('patient','doctor','lab'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $labtest = new Labtest();
        $labtest->lab_name = Crypt::encryptString(request('lab_name'));
        $labtest->patient_name = Crypt::encryptString(request('patient_name'));
        $labtest->doctor = Crypt::encryptString(request('doctor'));
        $labtest->status = Crypt::encryptString(request('status'));
        $labtest->cause = Crypt::encryptString(request('cause'));
        $labtest->other_cause = Crypt::encryptString(request('other_cause'));
        $labtest->description = Crypt::encryptString(request('description'));
        $labtest->save();
        return redirect('/Labtest');
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
        $labtest = Labtest::find($id);
        return view('pages.Labtest.edit',compact('labtest'));
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
        $labtest = Labtest::find($id);
        $labtest->lab_name = Crypt::encryptString(request('lab_name'));
        $labtest->patient_name = Crypt::encryptString(request('patient_name'));
        $labtest->doctor = Crypt::encryptString(request('doctor'));
        $labtest->status = Crypt::encryptString(request('status'));
        $labtest->cause = Crypt::encryptString(request('cause'));
        $labtest->other_cause = Crypt::encryptString(request('other_cause'));
        $labtest->description = Crypt::encryptString(request('description'));
        $labtest->save();
        return redirect('/Labtest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $labtest = Labtest::find($id);
        $labtest->delete();
        return redirect('/Labtest');
    }
}

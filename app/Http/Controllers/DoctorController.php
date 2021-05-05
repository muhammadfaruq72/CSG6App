<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Hospital;
use Illuminate\Support\Facades\Crypt;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctor::all();
       
        return view('pages.Doctor.index',compact('doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospital = Hospital::all();
        return view('pages.Doctor.create',compact('hospital'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor = new Doctor();
        $doctor->name = Crypt::encryptString(request('name'));
        $doctor->email = Crypt::encryptString(request('email'));
        $doctor->password = Crypt::encryptString(request('password'));
        $doctor->designation = Crypt::encryptString(request('designation'));
        $doctor->degrees = Crypt::encryptString(request('degrees'));
        $doctor->department = Crypt::encryptString(request('department'));
        $doctor->hospital = Crypt::encryptString(request('hospital'));
        $doctor->special = Crypt::encryptString(request('special'));
        $doctor->experience = Crypt::encryptString(request('experience'));
        $doctor->service = Crypt::encryptString(request('service'));
        $doctor->birth = Crypt::encryptString(request('birth'));
        $doctor->phone = Crypt::encryptString(request('phone'));
        $doctor->gender = Crypt::encryptString(request('gender'));
        $doctor->blood = Crypt::encryptString(request('blood'));
        $doctor->address = Crypt::encryptString(request('address'));
        $doctor->about = Crypt::encryptString(request('about'));
        $DoctorImage = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('image/Doctor'), $DoctorImage);
        $doctor->image = $DoctorImage;
        $doctor->save();
        return redirect('/Doctor');
        
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
       $doctor  = Doctor::find($id);
       $hospital = Hospital::all();
       return view('pages.Doctor.edit',compact('doctor','hospital'));
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
        $doctor = Doctor::find($id);
        $doctor->name = Crypt::encryptString(request('name'));
        $doctor->email = Crypt::encryptString(request('email'));
        $doctor->password = Crypt::encryptString(request('password'));
        $doctor->designation = Crypt::encryptString(request('designation'));
        $doctor->degrees = Crypt::encryptString(request('degrees'));
        $doctor->department = Crypt::encryptString(request('department'));
        $doctor->hospital = Crypt::encryptString(request('hospital'));
        $doctor->special = Crypt::encryptString(request('special'));
        $doctor->experience = Crypt::encryptString(request('experience'));
        $doctor->service = Crypt::encryptString(request('service'));
        $doctor->birth = Crypt::encryptString(request('birth'));
        $doctor->phone = Crypt::encryptString(request('phone'));
        $doctor->gender = Crypt::encryptString(request('gender'));
        $doctor->blood = Crypt::encryptString(request('blood'));
        $doctor->address = Crypt::encryptString(request('address'));
        $doctor->about = Crypt::encryptString(request('about'));
        $DoctorImage = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('image/Doctor'), $DoctorImage);
        $doctor->image = $DoctorImage;
        $doctor->save();
        return redirect('/Doctor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect('/Doctor');
    }
}

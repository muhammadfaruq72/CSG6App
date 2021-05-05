<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Appointment;
use App\Doctor;
use App\Patient;
use DB;
class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appoint = Appointment::all();
        return view('pages.Appointment.index',compact('appoint'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor = Doctor::all();
        $patient = Patient::all();
        return view('pages.Appointment.create',compact('doctor','patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appoint = new Appointment();
        $appoint->phone = Crypt::encryptString(request('phone'));
        $appoint->date = Crypt::encryptString(request('date'));
        $appoint->doctor = request('doctor');
        $appoint->note = Crypt::encryptString(request('note'));
        $appoint->depart = Crypt::encryptString(request('depart'));
        $id = request('patient');
        $patient = Patient::where('id',$id)->first();
        $appoint->patient =  $patient->title;
        $appoint->patient_id =  $patient->patient_id;

        $appointIdCheckingModel = Appointment::orderby('created_at','DESC')->first();
       if($appointIdCheckingModel)
      {
       $appoint_idOld = $appointIdCheckingModel->id;
        $DatID = $appoint_idOld + 1;
        $appoint->appoint_id = "A2100".$DatID;

         }
         else{

        $appoint->appoint_id = "A21001";

        };
        $appoint->save();
        return redirect('Appointment');
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
        $appoint = Appointment::find($id);
        $doctor = Doctor::all();
        $patient = Patient::all();
        return view('pages.Appointment.edit',compact('appoint','doctor','patient'));
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
        $appoint = Appointment::find($id);
        $appoint->patient = Crypt::encryptString(request('patient'));
        $appoint->phone = Crypt::encryptString(request('phone'));
        $appoint->date = Crypt::encryptString(request('date'));
        $appoint->doctor = request('doctor');
        $appoint->note = Crypt::encryptString(request('note'));
        $appoint->depart = Crypt::encryptString(request('depart'));
        // $appointIdCheckingModel = Appointment::orderby('created_at','DESC')->first();

        $appoint->save();
        return redirect('Appointment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appoint = Appointment::find($id);
        $appoint->delete();
        return redirect('Appointment');
    }

    public function information($id)
    {
        $appoint = Appointment::find($id);
        return view('pages.Appointment.information',compact('appoint'));
    }

      
    public function history($id){
        $appoint = Patient::find($id);
        return view('pages.Appointment.history',compact('appoint'));
    }

}

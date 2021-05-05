<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Patient;
use App\Doctor;
use App\Hospital;
use App\User;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =  User::all()->where('role','patient');
        return view('pages.Patient.index',compact('user'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor = Doctor::all();
        $hospital = Hospital::all();
        return view('pages.Patient.create',compact('doctor','hospital'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

$title = request('title');
$gender = request('gender');
$birth = request('birth');
$doctor = request('doctor');
$hospital = request('hospital');
$age = request('age');
$laboratory = request('laboratory');
$phone = request('phone');
$address = request('address');
$blood = request('blood');
// User data to send using HTTP POST method in curl
$data = array('title'=>$title,'gender'=>$gender, 'birth' => $birth, 'doctor'=>$doctor,'hospital'=>$hospital, 'age' => $age, 'laboratory'=>$laboratory,'phone'=>$phone, 'address' => $address, 'blood'=>$blood);

// Data should be passed as json format
$data_json = json_encode($data);

// API URL to send data
$url = 'http://18.190.167.136:3001/transaction/broadcast';

// curl initiate
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// SET Method as a POST
curl_setopt($ch, CURLOPT_POST, 1);

// Pass user data in POST command
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute curl and assign returned data
$response  = curl_exec($ch);

// Close curl
curl_close($ch);

// See response if data is posted successfully or any error
print_r ($response);



        return redirect('/Patient');

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
        $patient = Patient::find($id);
        $doctor = Doctor::all();
        $hospital = Hospital::all();
        return view('pages.Patient.edit',compact('patient','doctor','hospital'));
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
        $patient = Patient::find($id);
        $patient->title = Crypt::encryptString(request('title'));
        $patient->gender = Crypt::encryptString(request('gender'));
        $patient->birth = Crypt::encryptString(request('birth'));
        $patient->doctor = Crypt::encryptString(request('doctor'));
        $patient->hospital = Crypt::encryptString(request('hospital'));
        $patient->age = Crypt::encryptString(request('age'));
        $patient->laboratory = Crypt::encryptString(request('laboratory'));
        $patient->phone = Crypt::encryptString(request('phone'));
        $patient->address = Crypt::encryptString(request('address'));
        $patient->blood = Crypt::encryptString(request('blood'));
        // $PatientImage = time().'.'.request()->image->getClientOriginalExtension();
        // request()->image->move(public_path('image/Patient'), $PatientImage);
        // $patient->image = $PatientImage;
        // $PatientFile = time().'.'.request()->file->getClientOriginalExtension();
        // request()->file->move(public_path('File/Patient'), $PatientFile);
        // $patient->file = $PatientFile;
        $patient->save();
        return redirect('/Patient');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect('/Patient');
    }

   
    public function history($id){
        $patient = Patient::find($id);
        return view('pages.Patient.history',compact('patient'));
    }

    public function information($id){
        $patient = Patient::find($id);
        return view('pages.Patient.information',compact('patient'));
    }
}

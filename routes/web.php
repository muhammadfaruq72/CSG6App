<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::group( ['middleware' => 'auth' ], function()
{
// Route::get('/', function () {
//     return view('pages.dashboard');
// });
Route::get('/', 'ChartController@index');
Route::get('dashboard', function () {
    return view('pages.pdashboard');
});


Route::resource('Doctor', 'DoctorController');
Route::resource('Patient', 'PatientController');
Route::get('patient-history/{id}', 'PatientController@history');
Route::get('patient-information/{id}', 'PatientController@information');
Route::resource('Appointment', 'AppointmentController');
Route::get('/appointment-information/{id}', 'AppointmentController@information');
Route::get('/appointment-history/{id}', 'AppointmentController@history');
Route::resource('Prescription', 'PrescriptionController');
Route::resource('Hospital', 'HospitalController');
Route::resource('Laboratory', 'LaboratoryController');
Route::resource('Labtest', 'LabtestController');
Route::resource('User', 'UserController');

  });
 
 
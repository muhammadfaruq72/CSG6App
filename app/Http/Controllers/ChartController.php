<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\SampleChart;
use App\Patient;
class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // doughnut
        $patient = Patient::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Month(created_at)"))
        ->pluck('count');

        $doughnut = new SampleChart;
        $doughnut->labels(['Jan', 'Feb']);

        $doughnut->dataset('New User Register Chart', 'doughnut', $patient)->options([
       'fill' => 'false',
       'borderColor' => ['#6672fb','#ff3d55'],
       'backgroundColor' => ['#6672fb','#ff3d55'],
       
         ]);



        //line

         $patient = Patient::select(\DB::raw("COUNT(*) as count"))
         ->whereYear('created_at', date('Y'))
         ->groupBy(\DB::raw("Month(created_at)"))
         ->pluck('count');
 
         $line = new SampleChart;
         $line->labels(['Jan', 'Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']);
 
         $line->dataset('Prediction For Covid-19', 'line', $patient)->options([
        'fill' => 'false',
        'borderColor' => '#0d5ae5',
        'backgroundColor' => '#0d5ae5',
          ]);


         //Bar__1
          $patient = Patient::select(\DB::raw("COUNT(*) as count"))
          ->whereYear('created_at', date('Y'))
          ->groupBy(\DB::raw("Month(created_at)"))
          ->pluck('count');
  
          $bar1 = new SampleChart;
          $bar1->labels(['Jan', 'Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']);
  
          $bar1->dataset('Positive Case', 'bar', $patient)->options([
         'fill' => 'false',
         'borderColor' => '#76ddfb',
         'backgroundColor' => '#76ddfb',
           ]);


            //Bar__2

           $patient = Patient::select(\DB::raw("COUNT(*) as count"))
           ->whereYear('created_at', date('Y'))
           ->groupBy(\DB::raw("Month(created_at)"))
           ->pluck('count');
   
           $bar2 = new SampleChart;
           $bar2->labels(['Jan', 'Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']);
   
           $bar2->dataset('Negative Case', 'bar', $patient)->options([
          'fill' => 'false',
          'borderColor' => '#8fbbeb',
          'backgroundColor' => '#8fbbeb',
          
            ]);
         return view('pages.dashboard', compact('doughnut','line','bar1','bar2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}

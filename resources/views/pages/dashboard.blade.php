@extends('layouts.app')
@section('content')
<div class="content-wrapper">

  <section class="content-header">
    <div class="header-icon">
    <i class="pe-7s-world"></i>
    </div>
    <div class="header-title">
    <h1>Clinic Dashboard</h1>
    <small>Clinic Dashboard</small>
    <ol class="breadcrumb">
    <li class="active"><a href="/">Dashboard</a></li>
    </ol>
    </div>
    </section>
    <section class="content">
    
      <div class="row">
      
      <div class="col-sm-4 col-md-4">
        <div class="doughnut">
          <h2>Total Covid 19 Cases</h2>
   <div class="dchart">
     {!! $doughnut->container() !!}
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $doughnut->script() !!}
      </div>




<div class="col-sm-8 col-md-8">
  <div class="line row">
  
    <div class="col-sm-8">
    {!! $line->container() !!}
     
    </div>
    <div class="col-sm-4">
    <h2>Prediction on the basis of current data</h2>
    <p>covid-19</p>
    </div>
  </div> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    {!! $line->script() !!}
   
  </div>
</div>




<div class="row">
      <div class="col-sm-6 col-md-6">
        <div class="bar">
          <h2>For Covid-19 +ve</h2>
          <div>
          {!! $bar1->container() !!}
        </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
        {!! $bar1->script() !!}
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="bar">
          <h2>For Covid-19 -ve</h2>
          <div>
          {!! $bar2->container() !!}
        </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
        {!! $bar2->script() !!}
      </div>


      </div>
      </section>     
  </div> 
@endsection
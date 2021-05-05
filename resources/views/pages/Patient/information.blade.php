@extends('layouts.app')
@section('content')
    
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
    <div class="header-icon">
    <i class="pe-7s-world"></i>
    </div>
    <div class="header-title">
    <h1>Patient Information</h1>
    <small>Patient Information</small>
    </div>
    </section>
    
    <section class="content">
    <div class="row">
    <div class="col-sm-12 col-md-12">
    <div class="review-block">
    <div class="row">
    <div class="col-sm-3" style="text-align: center;">
    <div style="border: 1px solid #ddd;padding: 2px;">
    <img src="../../../image/Patient/{{$patient->image}}" class="img-responsive"> </div>
    <div class="review-block-name"><a href="#"><?php echo \Crypt::decryptString($patient->title)?></a></div>
    <div class="review-block-date"><?php echo \Crypt::decryptString($patient->title)?></div>
    </div>
    <div class="col-sm-9">
    <div class="review-block-title"><?php echo \Crypt::decryptString($patient->title)?></div>
    <p><strong>Patient Id : </strong>{{$patient->patient_id}}</p>
    <strong>Patient Name : </strong><?php echo \Crypt::decryptString($patient->title)?><p></p>
    <p><strong>Phone Number : </strong><?php echo \Crypt::decryptString($patient->phone)?></p>
    <p><strong>Blood Group : </strong><?php echo \Crypt::decryptString($patient->blood)?></p>
    <p><strong>Birth date : </strong>
        <?php echo \Crypt::decryptString($patient->birth)?>,
    </p>
    <p><strong>Address : </strong> <?php echo \Crypt::decryptString($patient->address)?></p>

    <div><a href="/patient-history/{{$patient->id}}" class="btn btn-success" target="_blank"><i class="ti-alert m-r-5"></i>Click to see prescription info</a></div>
    </div>
    
</div>
    <hr>
    <div class="row">
    
    <div class="col-sm-12">
    <div class="panel panel-default">
    <div class="panel-body">
    <table width="100%" class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
    <th>Date</th>
    <th>Diagnositic</th>
    <th>Treatment</th>
    </tr>
    </thead>
    <tbody>
    <tr class="odd gradeX">
    <td>{{$patient->created_at}}</td>
    <td>awdawd</td>
    <td>adwawd</td>
    </tr>
   
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>
@endsection
@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
    <div class="header-icon">
    <i class="pe-7s-world"></i>
    </div>
    <div class="header-title">
    <h1>Create Labtest</h1>
    <small>Create Labtest</small>
    </div>
    </section>
    
    <section class="content">
    <div class="row">
    
    <div class="col-sm-12">
    <div class="panel panel-bd panel-form">
    <div class="panel-heading">
    
    <div class="panel-title">
    <h4>Create Labtest</h4>
    </div>
    </div>
    <div class="panel-body">
    <div class="portlet-body form">
    <form action="{{URL::to('Labtest')}}" class="form-horizontal" target="_blank" name="p_info" method="post" accept-charset="utf-8">
        @csrf
    <input type="hidden" name="csrf_test_name" value="d72b3d8092bc2e18e33a4e84ca112381">
    <div class="form-body">
    <div class="form-group">
    <label class="col-md-3 control-label"> Laboratory </label>
    <div class="col-md-5">
    <select name="lab_name" id="" class="form-control" required>
<option value="">Select Laboratory</option>
@foreach ($lab as $item)
    <option value="<?php echo \Crypt::decryptString($item->title)?>"><?php echo \Crypt::decryptString($item->title)?></option>
@endforeach
    </select>
    <span class="error-msg patient_name"> </span>
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label">Patient</label>
    <div class="col-md-5">
        <select name="lab_name" id="" class="form-control" required>
            <option value="">Select Patient</option>
            @foreach ($patient as $item)
                <option value="<?php echo \Crypt::decryptString($item->title)?>"><?php echo \Crypt::decryptString($item->title)?></option>
            @endforeach
                </select>
    <span class="error-msg"> </span>
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label "> Doctor </label>
    <div class="col-md-5">
        <select name="lab_name" id="" class="form-control" required>
            <option value="">Select Doctor</option>
            @foreach ($doctor as $item)
                <option value="<?php echo \Crypt::decryptString($item->name)?>"><?php echo \Crypt::decryptString($item->name)?></option>
            @endforeach
                </select>
    <span class="error-msg"> </span>
    </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label "> Status </label>
        <div class="col-md-5">
            <select name="lab_name" id="" class="form-control" required>
                <option value="">Select Status</option>
                <option value="In Process">In Process</option>
                <option value="Active">Active</option>
                <option value="Pending">Pending</option>
                    </select>
        <span class="error-msg"> </span>
        </div>
        </div>
  
  
    <div class="form-group">
        <label class="col-md-3 control-label "> Cause </label>
        <div class="col-md-5">
            {{-- <input type="button" onclick="f()"> --}}
          
            <select name="cause" id="cause" class="form-control" onchange="f()" required>
                <option value="" >Select Cause</option>
                <option value="Covid-19">Covid-19</option>
                <option value="Other">Other</option>
                
                    </select>
                    <input type="text"  class="form-control" id="other_cause" name="other_cause" style="display: none">
                    
        <span class="error-msg"> </span>
        </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label "> Description </label>
            <div class="col-md-5">
               <textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
            <span class="error-msg"> </span>
            </div>
            </div>
        
    <div class="form-group row">
    <div class="col-sm-offset-3 col-sm-6">
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-success">Submit</button>
    </div>
    </div>
    </div>
    </form> </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>

    <script>
        function f() {
            var other = document.getElementById("other_cause");
            var cause = document.getElementById("cause").value;
           if(cause == "Other"){
               other.style.display = "block";

           }else{
            other.style.display = "none";
           }
        }
        
    </script>
   
@endsection
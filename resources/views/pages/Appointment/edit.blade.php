@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
    <div class="header-icon">
    <i class="pe-7s-world"></i>
    </div>
    <div class="header-title">
    <h1>Edit Appointment</h1>
    <small>Edit Appointment</small>
    </div>
    </section>
    
    <section class="content">
    <div class="row">
    
    <div class="col-sm-12">
    <div class="panel panel-bd panel-form">
    <div class="panel-heading">

    <div class="panel-title">
    <h4>Edit Appointment </h4>
    </div>
    </div>
    <div class="panel-body">
    <div class="portlet-body form">
    <form action="{{URL::to('Appointment',$appoint)}}" class="form-horizontal" target="_blank" name="p_info" method="post" accept-charset="utf-8">
        @csrf
        @method('PUT')
    <div class="form-body">
        <div class="form-group">
            <label class="col-md-3 control-label "> Patient </label>
            <div class="col-md-5">
            <select class="form-control doctor_id" id="doctor_id"  name="patient" required="">
            <option value="">--Select Patient--</option>
            @foreach ($patient as $item)
            <option value="{{$item->id}}"><?php echo \Crypt::decryptString($item->title)?></option>
            @endforeach
        
        </select>
            <span class="error-msg"> </span>
            </div>
            </div>
            
    <div class="form-group">
    <label class="col-md-3 control-label"> Phone </label>
    <div class="col-md-5">
    <input type="text" onkeyup="if (!window.__cfRLUnblockHandlers) return false; loadName()" value="<?php echo Crypt::decryptString($appoint->phone)?>" name="phone" id="phone" class="form-control" required="">
    <span class="error-msg patient_name"> </span>
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label">Date :</label>
    <div class="col-md-5">
    <input type="text" id="date" value="<?php echo Crypt::decryptString($appoint->date)?>" name="date" class="form-control datepicker3 hasDatepicker" placeholder="yyyy-mm-dd" required="">
    <span class="error-msg"> </span>
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label "> Doctor </label>
    <div class="col-md-5">
    <select class="form-control doctor_id" id="doctor_id" onchange="if (!window.__cfRLUnblockHandlers) return false; loadSchedul(this.value);" name="doctor" required="">
    <option value="">--Select doctor--</option>
    @foreach ($doctor as $item)
        

    <option value="<?php echo \Crypt::decryptString($item->name)?>"><?php echo \Crypt::decryptString($item->name)?></option>
    @endforeach

</select>
    <span class="error-msg"> </span>
    </div>
    </div>

    <div class="form-group">
        <label class="col-md-3 control-label">Department</label>
        <div class="col-md-5">
        <input type="text" id="date" value="<?php echo Crypt::decryptString($appoint->depart)?>" name="depart" class="form-control datepicker3 hasDatepicker" placeholder="" required="">
        <span class="error-msg"> </span>
        </div>
        </div>
   
    <div class="form-group">
    <label class="col-md-3 control-label">Note:</label>
    <div class="col-md-5">
    <textarea name="note" class="form-control" rows="3">                                     </textarea>
    <span class="error-msg"> </span>
    </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-offset-3 col-sm-6">
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-success">Appointment</button>
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
@endsection
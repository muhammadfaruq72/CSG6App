@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
    <div class="header-icon">
    <i class="pe-7s-world"></i>
    </div>
    <div class="header-title">
    <h1>Edit Hospital</h1>
    <small>Edit Hospital</small>
    </div>
    </section>
    
    <section class="content">
    <div class="row">
    
    <div class="col-sm-12">
    <div class="panel panel-bd panel-form">
    <div class="panel-heading">
    
    <div class="panel-title">
    <h4>Edit Hospital</h4>
    </div>
    </div>
    <div class="panel-body">
    <div class="portlet-body form">
    <form action="{{URL::to('Hospital',$hospital->id)}}" class="form-horizontal" target="_blank" name="p_info" method="post" accept-charset="utf-8">
        @csrf
        @method('PUT')
    
    <div class="form-body">
    <div class="form-group">
    <label class="col-md-3 control-label"> Title </label>
    <div class="col-md-5">
    <input type="text" onkeyup="if (!window.__cfRLUnblockHandlers) return false; loadName()" name="title" value="<?php echo Crypt::decryptString($hospital->title) ?>" id="phone" class="form-control" required="">
    <span class="error-msg patient_name"> </span>
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label">Email :</label>
    <div class="col-md-5">
    <input type="text" id="date" value="" name="email" class="form-control datepicker3 hasDatepicker" value="<?php echo Crypt::decryptString($hospital->email) ?>"  required="">
    <span class="error-msg"> </span>
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label "> Password </label>
    <div class="col-md-5">
        <input type="password" id="date" value="" name="password" class="form-control datepicker3 hasDatepicker"  required="">
    <span class="error-msg"> </span>
    </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label "> Phone </label>
        <div class="col-md-5">
            <input type="text" id="date" value="" name="phone" value="<?php echo Crypt::decryptString($hospital->phone) ?>" class="form-control datepicker3 hasDatepicker"  required="">
        <span class="error-msg"> </span>
        </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label "> Address</label>
            <div class="col-md-5">
             
                <textarea name="address" id=""  class="form-control" cols="30" rows="6" required=""></textarea>
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
@endsection
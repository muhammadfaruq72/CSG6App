@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
    <div class="header-icon">
    <i class="pe-7s-world"></i>
    </div>
    <div class="header-title">
    <h1>Add New Patient</h1>
    <small>Add New Patient</small>
    </div>
    </section>
    
    <section class="content">
    <div class="row">
    
    <div class="col-sm-12">
    <div class="panel panel-bd">
    <div class="panel-heading ">
    <div class="panel-title" style="max-width: calc(100% - 180px);">
    <h4>Add New Patient</h4>
    </div>
    </div>
    <div class="panel-body">
    <div class="portlet-body form">
    <form action="{{URL::to('Patient',$patient)}}" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        @csrf
        @method('PUT')
    <div class="form-body">
    <div class="row">
    <div class="form-group col-md-4">
    <label class=" control-label"> Title </label>
    <div class="">
    <input type="text" name="title" class="form-control" value="<?php echo Crypt::decryptString($patient->title)?>" placeholder="title">
    </div>
    </div>

    <div class="form-group col-md-4">
        <label class=" control-label"> Laboratory </label>
        <div class="">
        <input type="text" name="laboratory" class="form-control" value="" placeholder="Laboratory">
        </div>
        </div>
   
    </div>
    <div class="row">
    
    <div class="form-group col-md-4">
    <label class=" control-label"> Gender</label>
    <div class="">
    <input type="radio" id="checkbox2_5" name="gender" required="" value="Male">
    <label for="checkbox2_5"> Male</label>
    <input type="radio" id="checkbox2_10" name="gender" required="" value="Female">
    <label for="checkbox2_10"> Female</label>
    <input type="radio" id="checkbox2_0" name="gender" required="" value="other">
    <label for="checkbox2_0"> Others</label>
    </div>
    </div>
    <div class="form-group col-md-4">
    <label class=" control-label">Birth date</label>
    <div class=" ">
    <input type="text" name="birth" value="<?php echo Crypt::decryptString($patient->birth)?>" class="form-control datepicker1 birth_date hasDatepicker" placeholder="yyyy-mm-dd" id="dp1610797985489">
    </div>
    <div class="">
    <input type="text" name="age" id="old" value="<?php echo Crypt::decryptString($patient->age)?>" class="form-control" placeholder="Age">
    </div>
    </div>
    </div>
    <div class="row">
    
    <div class="form-group col-md-4">
    <label class=" control-label"> Phone Number</label>
    <div class="">
    <input type="text" name="phone" value="<?php echo Crypt::decryptString($patient->phone)?>" class="form-control" required="" placeholder="Phone Number">
    <span class="text-danger"></span>
    </div>
    </div>
   
    <div class="form-group col-md-4">
        <label class=" control-label">Doctor</label>
        <div class="">
            <select class="form-control doctor_id" id="doctor_id" onchange="if (!window.__cfRLUnblockHandlers) return false; loadSchedul(this.value);" name="doctor" required="">
                <option value="">--Select doctor--</option>
                @foreach ($doctor as $item)
                <option value="<?php echo \Crypt::decryptString($item->name)?>"><?php echo \Crypt::decryptString($item->name)?></option>
                @endforeach
            
            </select>
        </div>
        </div>
        <div class="form-group col-md-4">
        <label class=" control-label">Hospital</label>
        <div>
            <select class="form-control doctor_id" id="doctor_id" onchange="if (!window.__cfRLUnblockHandlers) return false; loadSchedul(this.value);" name="hospital" required="">
                <option value="">--Select Hospital--</option>
                @foreach ($hospital as $item)
                <option value="<?php echo \Crypt::decryptString($item->title)?>"><?php echo \Crypt::decryptString($item->title)?></option>
                @endforeach
            
            </select>
        </div>
        </div>
    </div>
    <div class="row">
    <div class="form-group col-md-8">
    <label class="control-label"> Address</label>
    <div class="">
    <textarea name="address" id="editor1" class="form-control" rows="3"></textarea>
    </div>
    </div>
    <div class="form-group col-md-4">
     <label class=" control-label">File</label>
    <div class="">
    <input type="file" value="" name="file" class="form-control" >
    </div>
    </div>
    </div>
    <div class="row">
    {{-- <div class="form-group col-md-4">
    <label class="" control-label"="">Post Code</label>
    <div class="">
    <input type="text" value="" class="form-control" name="p_code">
    </div>
    </div> --}}
    <div class="form-group col-md-4">
    <label class="control-label">Blood Group </label>
    <div class="">
    <select class="form-control" name="blood">
    <option value="">--Select Blood Group--</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="Unknown">Unknown</option>
    </select>
    </div>
    </div>
    <div class="form-group col-md-4">
    <label class="" control-label"="">Picture</label>
    <div class="">
    <input type="file" name="image">
    </div>
    </div>
    </div>
    </div>


    <div class="form-group row">
    <div class="col-offes-3 col-md-4" style="margin-right:15px;">
    <button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-success">Submit</button>
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
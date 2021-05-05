@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
    <div class="header-icon">
    <i class="pe-7s-world"></i>
    </div>
    <div class="header-title">
    <h1>Create Doctor</h1>
    <small>Create Doctor</small>
    </div>
    </section>
    
    <section class="content">
    <div class="row">
    
    <div class="col-sm-12">
    <div class="panel panel-bd">
    <div class="panel-heading ">
    <div class="panel-title">
    <h4>Create Doctor</h4>
    </div>
    </div>
    <div class="panel-body">
    <div class="portlet-body form">

    <form action="{{URL::to('Doctor')}}" class="form-horizontal" name="d_info" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        @csrf
    <input type="hidden" name="csrf_test_name" value="d72b3d8092bc2e18e33a4e84ca112381">
    <div class="form-body">
    <div class="form-group">
    <label class="col-md-3 control-label"><span class="text-danger">*</span>Name</label>
    <div class="col-md-7">
    <input type="text" name="name" class="form-control" placeholder="Doctor Name" required="">
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label"><span class="text-danger">*</span>Email Address </label>
    <div class="col-md-7">
    <input type="email" name="email" class="form-control" placeholder="Email Address" required="">
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label"><span class="text-danger">*</span>password </label>
    <div class="col-md-7">
    <input type="password" name="password" class="form-control" placeholder="password" required="">
    </div>
    </div>
    <div class="form-group">
        <label class="col-md-3 control-label"><span class="text-danger">*</span>Hospital</label>
        <div class="col-md-7">
            <select class="form-control doctor_id" id="doctor_id" onchange="if (!window.__cfRLUnblockHandlers) return false; loadSchedul(this.value);" name="hospital" required="">
                <option value="">--Select Hospital--</option>
                @foreach ($hospital as $item)
                <option value="<?php echo \Crypt::decryptString($item->title)?>"><?php echo \Crypt::decryptString($item->title)?></option>
                @endforeach
            
            </select>
        </div>
        </div>
    <div class="form-group">
    <label class="col-md-3 control-label"><span class="text-danger">*</span>Designation</label>
    <div class="col-md-7">
    <input type="text" name="designation" class="form-control" placeholder="Designation">
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label">Degrees</label>
    <div class="col-md-7">
    <input type="text" name="degrees" class="form-control" placeholder="Degrees" required="">
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label"><span class="text-danger">*</span> Department </label>
    <div class="col-md-7">
    <input type="text" name="department" class="form-control" placeholder="Department" required="">
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label"><span class="text-danger">*</span>Specialist</label>
    <div class="col-md-7">
    <input type="text" name="special" class="form-control" placeholder="Specialist" required="">
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label">Doctor Experience</label>
    <div class="col-md-7">
    <input type="text" name="experience" class="form-control" placeholder="Doctor Experience">
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label"><span class="text-danger">*</span>Service Place</label>
    <div class="col-md-7">
    <input type="text" name="service" class="form-control" placeholder="Service Place" required="">
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label">Birth date</label>
    <div class="col-md-7">
    <input type="date"  name="birth" class="form-control datepicker1 hasDatepicker" placeholder="yyyy-mm-dd" >
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label"><span class="text-danger">*</span>Phone Number</label>
    <div class="col-md-7">
    <input type="number" name="phone" class="form-control" placeholder="Phone Number" required="">
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label"><span class="text-danger">*</span>Gender</label>
    <div class="col-md-7">
    <div class="md-radio-inline">
    <div class="md-radio">
    <input type="radio" id="checkbox2_5" name="gender" required="" value="Male" class="md-radiobtn">
    <label for="checkbox2_5">
    <span></span>
    <span class="check"></span>
    <span class="box"></span> Male </label>
    </div>
    <div class="md-radio">
    <input type="radio" id="checkbox2_10" required="" name="gender" value="Female" class="md-radiobtn">
    <label for="checkbox2_10">
    <span></span>
    <span class="check"></span>
    <span class="box"></span> Female
    </label>
    </div>
     </div>
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label">Blood Group </label>
    <div class="col-md-7">
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
    </select>
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label">Address</label>
    <div class="col-md-7">
    <textarea name="address" class="form-control"></textarea>
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label">About Me</label>
    <div class="col-md-7">
    <textarea name="about" class=" form-control" rows="6"></textarea>
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-3 control-label">Picture</label>
    <div>
    <input type="file" name="image">
    </div>
    </div>
    </div>
    <div class="form-group row">
    <div class="col-sm-offset-3 col-sm-6">
    <button type="submit" class="btn btn-success">Submit</button>
    </div>
    </div>
    </form> </div>
    </div>
    </div>
    </div>
    <div class="clearfix"></div>
    </div>
    </section>
    </div>
@endsection
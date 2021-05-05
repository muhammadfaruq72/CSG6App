@extends('layouts.app')
@section('content')
    
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
      <div class="header-icon">
        <i class="pe-7s-world"></i>
      </div>
      <div class="header-title">
        <h1>Add New User</h1>
        <small>Add New User</small>
       
      </div>
    </section>
  
    <section class="content">
      <div class="row">
  
        <div class="col-sm-12">
          <div class="panel panel-bd panel-form">
            <div class="panel-heading">
              <div class="panel-title">
                <h4>Add New User </h4>
              </div>
            </div>
            <div class="panel-body">
              <div class="portlet-body form">
                <form action="{{URL::to('/User')}}" class="form-horizontal" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                  @csrf
                  <input type="hidden" name="csrf_test_name" value="68ba9ecbe1032fe5788ea67ec55f2686">
                  <div class="form-body">
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Full Name :</label>
                      <div class="col-md-6">
                        <input type="text" name="name" class="form-control" required="" value="" placeholder="Full Name" >
                        <span class="text-danger"> </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Email:</label>
                      <div class="col-md-6">
                        <input type="text" name="email" required="" value="" class="form-control" placeholder="Email">
                        <span class="text-danger"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label"> Password:</label>
                      <div class="col-md-6">
                        <input type="text" name="password" required="" value="" class="form-control">
                        <span class="text-danger"></span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Role :</label>
                      <div class="col-md-6">
                        <select class="form-control" name="role" required>
                          <option value="">--Select Role--</option>
                          <option value="admin">Admin</option>
                          <option value="doctor">Doctor</option>
                          <option value="patient">Patient</option>
                          
                        </select>
                      </div>
                    </div>
                  
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-offset-3 col-sm-6">
                      <button type="reset" class="btn btn-danger">Reset</button>
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
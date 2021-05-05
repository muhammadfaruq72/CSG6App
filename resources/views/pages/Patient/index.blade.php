@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1>Patient List</h1>
            <small>Patient List</small>
        </div>
    </section>

    <section class="content">
      <div class="row">
  
        <div class="col-sm-12">
          <div class="panel panel-bd">
            <div class="panel-heading">
              <div class="panel-title">
                <h4>Patient List </h4>
              </div>
            </div>
            <div class="panel-body">
              <div id="patient_list_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
               
                <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="patient_list" role="grid" style="width: 100%;">
                  <thead>
                    <tr role="row">

                      <th class="sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label="Full Name: activate to sort column ascending" style="width: 83px;">Full Name</th>
                      <th class="sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label="Phone Number: activate to sort column ascending" style="width: 120px;">Email</th>
                      <th class="sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label="Blood Group: activate to sort column ascending" style="width: 99px;">Role</th>
                      <th class="sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label="Birth date: activate to sort column ascending" style="width: 82px;">Date Added</th>
                    </tr>
                  </thead>
                  <tbody>
  @foreach ($user as $item)
      
                    <tr class="gradeX odd" role="row">
                    
                      <td>{{$item->name}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->role}}</td>
                      <td>{{$item->created_at}}</td>
                    </tr>
      
  @endforeach            
                  </tbody>
                </table>
           
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

</div>
@endsection
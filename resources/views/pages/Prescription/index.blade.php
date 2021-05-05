@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 887px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1>Prescription List</h1>
            <small>Prescription List</small>
           
        </div>
    </section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
                        <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Prescription List </h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="prescription_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="prescription" role="grid" style="width: 100%;">
                        <thead>
                            <tr role="row"><th class="all sorting_asc" tabindex="0" aria-controls="prescription" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Picture: activate to sort column descending" style="width: 134px;">Picture</th><th class="all sorting" tabindex="0" aria-controls="prescription" rowspan="1" colspan="1" aria-label="Patient Name: activate to sort column ascending" style="width: 223px;">Patient Name</th><th class="all sorting" tabindex="0" aria-controls="prescription" rowspan="1" colspan="1" aria-label="Patient Id: activate to sort column ascending" style="width: 169px;">Patient Id</th><th class="all sorting" tabindex="0" aria-controls="prescription" rowspan="1" colspan="1" aria-label="Phone Number: activate to sort column ascending" style="width: 241px;">Phone Number</th><th class="all sorting" tabindex="0" aria-controls="prescription" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 137px;">Gender</th><th class="desktop sorting" tabindex="0" aria-controls="prescription" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 126px;">Action</th></tr>
                        </thead>

                        <tbody>
                                                        
                                                        
                                                    <tr role="row" class="odd">
                                <td class="sorting_1" tabindex="0">
                                    <img width="60" src="http://localhost/Clinic/assets/images/patient.png" class="img-responsive">                                </td>

                                <td>hena done</td>
                                <td>P17K8JD</td>
                                <td>534535345345</td>
                                <td>Female</td>
                                <td>
                                 <a class="btn btn-xs btn-success" target="_blank" href="http://localhost/Clinic/admin/Prescription_controller/my_prescription/A17JR0IC"><i class="fa fa-eye"></i> </a>
                                </td>
                            </tr><tr role="row" class="even">
                                <td class="sorting_1" tabindex="0">
                                    <img width="60" src="http://localhost/Clinic/assets/images/patient.png" class="img-responsive">                                </td>

                                <td>fsdf fgdfg</td>
                                <td>P17YVT8</td>
                                <td>35235345</td>
                                <td>Male</td>
                                <td>
                                 <a class="btn btn-xs btn-success" target="_blank" href="http://localhost/Clinic/admin/Prescription_controller/my_prescription/A17R72WB"><i class="fa fa-eye"></i> </a>
                                </td>
                            </tr></tbody>
                    </table></div>
                </div>
            </div>
        </div> 
    </div>            
    </section>
</div>
@endsection
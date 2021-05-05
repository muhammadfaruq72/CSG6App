@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1>Hospital List</h1>
            <small>Hospital List</small>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                      
                        <div class="panel-title">
                            <h4>Hospital List </h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="appointment_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                   
                            <table width="100%" class="table table-striped table-bordered table-hover dt-responsive dataTable no-footer dtr-column" id="appointment" role="grid" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="all sorting" tabindex="0" aria-controls="appointment" rowspan="1" colspan="1" aria-label="Id: activate to sort column ascending" style="width: 151px;">Id</th>
                                        <th class="all sorting" tabindex="0" aria-controls="appointment" rowspan="1" colspan="1" aria-label="Hospital Name: activate to sort column ascending" style="width: 112px;">Hospital Name</th>
                                        <th class="all sorting" tabindex="0" aria-controls="appointment" rowspan="1" colspan="1" aria-label="Phone Number: activate to sort column ascending" style="width: 164px;">Phone Number</th>
                                        <th class="all sorting" tabindex="0" aria-controls="appointment" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 172px;">Email</th>
                                        <th class="all sorting_asc" tabindex="0" aria-controls="appointment" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Address: activate to sort column descending" style="width: 89px;">Address</th>
                                        <th class="desktop sorting" tabindex="0" aria-controls="appointment" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 78px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hospital as $item)
                                    <tr role="row" class="odd">
                                       
                                            
                                        <td>{{$item->id}}</td>
                                        <td><?php echo \Crypt::decryptString($item->title); ?></td>
                                        <td><?php echo \Crypt::decryptString($item->email); ?></td>
                                        <td><?php echo \Crypt::decryptString($item->phone); ?></td>
                                        <td class="sorting_1"><?php echo \Crypt::decryptString($item->address); ?></td>
                                
                                        <td class="text-center" style="width: 100px;">
                                            <a class="btn btn-xs btn-success" data-original-title="View Appointment" target="_blank" href="/Hospital/{{$item->id}}/edit"><i class="fa fa-edit"></i></a>
                                        </td>
                                        
                                       
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
@extends('layouts.app')
@section('content')
<div class="content-wrapper" style="min-height: 948px;">

    <section class="content-header">
        <div class="header-icon">
            <i class="pe-7s-world"></i>
        </div>
        <div class="header-title">
            <h1>Doctor List</h1>
            <small>Doctor List</small>
            <ol class="breadcrumb">
                <li class="active"><a href="/">Dashboard</a></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bd">
                    <div class="panel-heading ">
                        <div class="panel-title" style="max-width: calc(100% - 180px);">
                            <h4>Doctor List</h4>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="patient_list_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            {{-- <div class="row">
                                <div class="col-sm-4">
                                    <div class="dataTables_length" id="patient_list_length"><label>Show <select name="patient_list_length" aria-controls="patient_list" class="form-control input-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="-1">All</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="dt-buttons btn-group"><a class="btn btn-default buttons-copy buttons-html5 btn-sm" tabindex="0" aria-controls="patient_list"><span>Copy</span></a><a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="patient_list"><span>CSV</span></a><a class="btn btn-default buttons-excel buttons-html5 btn-sm" tabindex="0" aria-controls="patient_list"><span>Excel</span></a><a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0" aria-controls="patient_list"><span>PDF</span></a><a class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="patient_list"><span>Print</span></a></div>
                                </div>
                                <div class="col-sm-4">
                                    <div id="patient_list_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="patient_list"></label></div>
                                </div>
                            </div> --}}
                            <table width="100%" class="table table-striped table-bordered table-hover dt-responsive dataTable no-footer dtr-inline" id="patient_list" role="grid" style="width: 100%;">
                                <thead>
                                    <tr role="row">
                                        <th class="all sorting_asc" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Picture: activate to sort column descending" style="width: 171px;">S no.</th>
                                        <th class="all sorting_asc" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Picture: activate to sort column descending" style="width: 171px;"> Picture</th>
                                        <th class="all sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label=" Doctor Name: activate to sort column ascending" style="width: 269px;"> Doctor Name</th>
                                        <th class="all sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label=" Email Address: activate to sort column ascending" style="width: 485px;"> Email Address</th>
                                        <th class="desktop sorting" tabindex="0" aria-controls="patient_list" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 159px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($doctor as $item)
                                        <tr role="row" class="odd">     
                                            <td>{{$item->id}}</td>
                                        <td class="sorting_1" tabindex="0">
                                            <img width="50" src="../../../image/Doctor/{{$item->image}}" class="img-responsive">
                                        </td>
                                        <td><?php echo \Crypt::decryptString($item->name); ?></td>
                                        <td><?php echo \Crypt::decryptString($item->email); ?></td>
                                        <td>
                                            <a class="btn btn-xs btn-success" href="/Doctor/{{$item->id}}/edit"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- <div class="dataTables_paginate paging_simple_numbers" id="patient_list_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button previous disabled" id="patient_list_previous"><a href="#" aria-controls="patient_list" data-dt-idx="0" tabindex="0">Previous</a></li>
                                    <li class="paginate_button active"><a href="#" aria-controls="patient_list" data-dt-idx="1" tabindex="0">1</a></li>
                                    <li class="paginate_button next disabled" id="patient_list_next"><a href="#" aria-controls="patient_list" data-dt-idx="2" tabindex="0">Next</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
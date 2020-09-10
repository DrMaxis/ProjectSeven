@extends('frontend.layouts.dashboardui')

@section('title', __('Dashboard'))


@section('meta')

@endsection


@section('xcss')

{{--  BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES --}}

<link rel="stylesheet" type="text/css" href="{{asset('css/uis/dashboard/apex/apexcharts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/uis/dashboard/dash_2.css')}}" />

{{--  END PAGE LEVEL PLUGINS/CUSTOM STYLES --}}
@endsection



@section('content')

<div class="page-header">
    <div class="page-title">
        <h3>Money Transfers</h3>
    </div>
</div>
<div class="row" id="cancel-row">

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="table-responsive mb-4 mt-4">
                <div id="default-ordering_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="default-ordering_length"><label>Results : <select
                                        name="default-ordering_length" aria-controls="default-ordering"
                                        class="form-control">
                                        <option value="7">7</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                    </select></label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="default-ordering_filter" class="dataTables_filter"><label><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg><input type="search" class="form-control" placeholder="Search..."
                                        aria-controls="default-ordering"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="default-ordering" class="table table-hover dataTable" style="width:100%"
                                role="grid" aria-describedby="default-ordering_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Name: activate to sort column ascending"
                                            style="width: 154px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 255px;">Position</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 107px;">Office</th>
                                        <th class="sorting_desc" tabindex="0" aria-controls="default-ordering"
                                            rowspan="1" colspan="1" aria-sort="descending"
                                            aria-label="Age: activate to sort column ascending" style="width: 52px;">Age
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Start date: activate to sort column ascending"
                                            style="width: 131px;">Start date</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Salary: activate to sort column ascending"
                                            style="width: 89px;">Salary</th>
                                        <th class="sorting" tabindex="0" aria-controls="default-ordering" rowspan="1"
                                            colspan="1" aria-label="Action: activate to sort column ascending"
                                            style="width: 88px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row">
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td class="sorting_1">66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                        <td class="text-center"><button class="btn btn-primary">View</button> </td>
                                    </tr>
                                    <tr role="row">
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td class="sorting_1">66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                        <td class="text-center"><button class="btn btn-primary">View</button> </td>
                                    </tr>
                                    <tr role="row">
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td class="sorting_1">64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                        <td class="text-center"><button class="btn btn-primary">View</button> </td>
                                    </tr>
                                    <tr role="row">
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td class="sorting_1">63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                        <td class="text-center"><button class="btn btn-primary">View</button> </td>
                                    </tr>
                                    <tr role="row">
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td class="sorting_1">61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                        <td class="text-center"><button class="btn btn-primary">View</button> </td>
                                    </tr>
                                    <tr role="row">
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td class="sorting_1">61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                        <td class="text-center"><button class="btn btn-primary">View</button> </td>
                                    </tr>
                                    <tr role="row">
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td class="sorting_1">59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                        <td class="text-center"><button class="btn btn-primary">View</button> </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Position</th>
                                        <th rowspan="1" colspan="1">Office</th>
                                        <th rowspan="1" colspan="1">Age</th>
                                        <th rowspan="1" colspan="1">Start date</th>
                                        <th rowspan="1" colspan="1">Salary</th>
                                        <th class="invisible" rowspan="1" colspan="1"></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="default-ordering_info" role="status" aria-live="polite">
                                Showing page 1 of 4</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="default-ordering_paginate">
                                <ul class="pagination pagination-style-13 pagination-bordered mb-5">
                                    <li class="paginate_button page-item previous disabled"
                                        id="default-ordering_previous"><a href="#" aria-controls="default-ordering"
                                            data-dt-idx="0" tabindex="0" class="page-link"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-arrow-left">
                                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                                <polyline points="12 19 5 12 12 5"></polyline>
                                            </svg></a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="default-ordering" data-dt-idx="1" tabindex="0"
                                            class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="default-ordering"
                                            data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="default-ordering"
                                            data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="default-ordering"
                                            data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                    <li class="paginate_button page-item next" id="default-ordering_next"><a href="#"
                                            aria-controls="default-ordering" data-dt-idx="5" tabindex="0"
                                            class="page-link"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-arrow-right">
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                <polyline points="12 5 19 12 12 19"></polyline>
                                            </svg></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>








@endsection




@section('xjs')



<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{asset('js/uis/dashboard/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('js/uis/dashboard/dash_2.js')}}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->



@endsection

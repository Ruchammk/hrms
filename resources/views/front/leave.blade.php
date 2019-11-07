@extends('front.layouts.frontlayout')

@section('head')

    {{--{!! HTML::style("assets/global/css/components.css")!!}--}}
    {!! HTML::style("assets/global/css/plugins.css")!!}
    {!! HTML::style("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css")!!}

@stop

@section('mainarea')

<style>
    .profile > .row > .col-md-3.hidden-sm{
        display: none;
    }
</style>

<div class="col-md-12">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#activities">Activities</a></li>
    <li><a data-toggle="tab" href="#leave-entitlement">Leave Entitlement</a></li>
  </ul>

  <div class="tab-content">
    <div id="activities" class="tab-pane fade in active">
      <div class="table-responsive" style="margin-top: 10px;">
        <table class="table table-striped table-bordered table-hover" id="applications">
            <thead>
            <tr>
                <th>{{trans('core.id')}}</th>
                <th>{{trans('core.type')}}</th>
                <th>{{trans('core.date')}}</th>
                <th class="text-center">{{trans('core.days')}}</th>
                
                <th>{{trans('core.reason')}}</th>
                <th>{{trans('core.appliedOn')}}</th>
                <th>{{trans('core.status')}}</th>
                <th>{{trans('core.action')}}</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td> {{-- ID from Contoller ajaxload------}} </td>
                <td> {{-- Leavetype from Contoller ajaxload--}} </td>
                <td class="text-center"> {{-- Date from Contoller ajaxload----}} </td>
                <td> {{-- Days from Contoller ajaxload----}} </td>
                <td> {{-- Reason from Contoller ajaxload----}} </td>
                <td> {{-- Applied on from Contoller ajaxload---}} </td>
                <td> {{-- Status from Contoller ajaxload----}} </td>
                <td> {{-- Action from Contoller ajaxload----}} </td>
            </tr>

            </tbody>

        </table>
        </div>
    </div>
    <div id="leave-entitlement" class="tab-pane fade">
      <div class="table-responsive">
          <table class="table  table-striped table-bordered table-hover">
              <thead>
                  <tr>
                      <th>Leave  Type</th>
                      <th>Status Or Remarks</th>
                      <th>Entitlement Period</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <th>Annual Leave</th>
                      <th>You have <strong>7 days</strong> of Annual Leave <i class="fa fa-info-circle"></i></th>
                      <th>1 Jan 2019 to 31 Dec 2019</th>
                  </tr>
                  <tr>
                      <th>Sick Leave - Outpatient</th>
                      <th>You have <strong>14 days</strong> of Sick Leave - Outpatient <i class="fa fa-info-circle"></i></th>
                      <th>1 Jan 2019 to 31 Dec 2019</th>
                  </tr>
                  <tr>
                      <th>Sick Leave - Hospitalisation</th>
                      <th>You have <strong>60 days</strong> of Sick Leave - Hospitalisation <i class="fa fa-info-circle"></i></th>
                      <th>1 Jan 2019 to 31 Dec 2019</th>
                  </tr>
                  <tr>
                      <th>No Pay Leave</th>
                      <th>You have <strong>365 days</strong> of No Pay Leave <i class="fa fa-info-circle"></i></th>
                      <th>1 Jan 2019 to 31 Dec 2019</th>
                  </tr>
                  <tr>
                      <th>Unpaid Infant Care Leave</th>
                      <th>Employee has no registered children.</th>
                      <th>-</th>
                  </tr>
                  <tr>
                      <th>Shared Parental Leave</th>
                      <th>Available to male employees.</th>
                      <th>-</th>
                  </tr>
                  <tr>
                      <th>Paternity Leave</th>
                      <th>Available to male employees.</th>
                      <th>-</th>
                  </tr>
                  <tr>
                      <th>Maternity Leave</th>
                      <th>Available to female employees.</th>
                      <th>-</th>
                  </tr>
                  <tr>
                      <th>Extended Child Care Leave</th>
                      <th>Employee has no registered children.</th>
                      <th>-</th>
                  </tr>
                  <tr>
                      <th>Child Care Leave</th>
                      <th>Employee has no registered children.</th>
                      <th>-</th>
                  </tr>
              </tbody>
          </table>
      </div>
    </div>
  </div>
</div>

<div class="col-md-12">
    <h3>Manage Leave Policies</h3>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover dataTable no-footer" id="applications" role="grid" aria-describedby="applications_info" style="width: 1140px;">
    <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="applications" rowspan="1" colspan="1" style="width: 49px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">Emp. ID</th>
            <th class="sorting" tabindex="0" aria-controls="applications" rowspan="1" colspan="1" style="width: 139px;" aria-label="Type: activate to sort column ascending">Employee Name</th>
            <th class="sorting" tabindex="0" aria-controls="applications" rowspan="1" colspan="1" style="width: 139px;" aria-label="Type: activate to sort column ascending">Leave Type</th>
            <th class="sorting" tabindex="0" aria-controls="applications" rowspan="1" colspan="1" style="width: 123px;" aria-label="Date: activate to sort column ascending">Date</th>
            <th class="text-center sorting" tabindex="0" aria-controls="applications" rowspan="1" colspan="1" style="width: 80px;" aria-label="Days: activate to sort column ascending">Days</th>
            <th class="sorting" tabindex="0" aria-controls="applications" rowspan="1" colspan="1" style="width: 94px;" aria-label="Status: activate to sort column ascending">Status</th>
            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 82px;" aria-label="Action">Action</th>
        </tr>
    </thead>
    <tbody>

        <tr role="row" class="odd">
            <td class="sorting_1">1</td>
            <td>john</td>
            <td>Sick Leave - Outpatient</td>
            <td>24/09/2019
                <br>to
                <br>31/10/2019</td>
            <td>38</td>
            <td><span class="label label-warning text-uppercase">pending</span></td>
            <td>
                <button class="btn-u btn-u-xs btn-u-blue" onclick="show_application(1);return false;"><i class="fa fa-eye"></i></button>
            </td>
        </tr>
        <tr role="row" class="even">
            <td class="sorting_1">2</td>
            <td>david</td>
            <td>Sick Leave - Hospitalisation</td>
            <td>24/09/2019
                <br>to
                <br>31/10/2019</td>
            <td>38</td>
            <td><span class="label label-warning text-uppercase">pending</span></td>
            <td>
                <button class="btn-u btn-u-xs btn-u-blue" onclick="show_application(2);return false;"><i class="fa fa-eye"></i></button>
            </td>
        </tr>
    </tbody>

</table>
    </div>
</div>

<div class="col-md-12">
    <h3>Leave Calendar</h3>
    <div class="table-responsive" style="overflow: scroll;">
        <table class="table table-responsive table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Default</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                    <th>18</th>
                    <th>19</th>
                    <th>20</th>
                    <th>21</th>
                    <th>22</th>
                    <th>23</th>
                    <th>24</th>
                    <th>25</th>
                    <th>26</th>
                    <th>27</th>
                    <th>28</th>
                    <th>29</th>
                    <th>30</th>
                    <th>31</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>David</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

    <div class="col-md-9">
        <!--Profile Body-->
        <div class="profile-body">
            <div class="row">
                <!--Profile Post-->
                <div class="col-sm-12 margin-bottom-20">


                    <div class="panel">
                        <div class="panel-heading  service-block-u">
                            <h3 class="panel-title"><i class="fa fa-tasks"></i> {{trans('core.myLeaveApp')}}</h3>
                        </div>
                        <div class="panel-body">
                            {{------------------Error Messages----------}}
                            <div id="alert_message">
                                @if(Session::get('success_leave'))
                                    <div class="alert alert-success"><i
                                                class="fa fa-check"></i> {!! Session::get('success_leave') !!}</div>
                                @endif

                                @if (Session::get('error_leave'))
                                    <div class="alert alert-danger alert-dismissable ">
                                        <button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true"></button>
                                        @foreach (Session::get('error_leave') as $error)
                                            <p><strong><i class="fa fa-warning"></i></strong> {!!  $error  !!}</p>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            {{------------------Error Messages----------}}
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="applications">
                                <thead>
                                <tr>
                                    <th>{{trans('core.id')}}</th>
                                    <th>{{trans('core.type')}}</th>
                                    <th>{{trans('core.date')}}</th>
                                    <th class="text-center">{{trans('core.days')}}</th>
                                    
                                    <th>{{trans('core.reason')}}</th>
                                    <th>{{trans('core.appliedOn')}}</th>
                                    <th>{{trans('core.status')}}</th>
                                    <th>{{trans('core.action')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td> {{-- ID from Contoller ajaxload------}} </td>
                                    <td> {{-- Leavetype from Contoller ajaxload--}} </td>
                                    <td class="text-center"> {{-- Date from Contoller ajaxload----}} </td>
                                    <td> {{-- Days from Contoller ajaxload----}} </td>
                                    <td> {{-- Reason from Contoller ajaxload----}} </td>
                                    <td> {{-- Applied on from Contoller ajaxload---}} </td>
                                    <td> {{-- Status from Contoller ajaxload----}} </td>
                                    <td> {{-- Action from Contoller ajaxload----}} </td>
                                </tr>

                                </tbody>

                            </table>
                            </div>
                        </div>
                    </div>


                    <!--End Profile Post-->


                </div><!--/end row-->


                <div class="col-sm-12 ">
                    <div class="panel panel-profile no-bg">
                        <div class="panel-heading overflow-h  service-block-u">
                            <h2 class="panel-title heading-sm pull-left">Leaves Left</h2>
                        </div>
                        <div class="panel-body panelHolder">
                            <table class="table table-light margin-bottom-0">
                                <!-- <tbody>
                                @foreach ($leaveTypesData as $leaveType)
                                    <tr>
                                        <td><span class="primary-link">{{  ucfirst($leaveType->leaveType) }}</span></td>
                                        @if (strtolower($leaveType->leaveType) == "annual")
                                            <td>{{ $employee->annual_leave }}</td>
                                        @elseif (($key = array_search($leaveType->leaveType, $takenLeaveTypes)) !== FALSE )
                                            <td>{{ $leaveType->num_of_leave - $takenLeaves[$key] }}</td>
                                        @else
                                            <td>{{ $leaveType->num_of_leave }}</td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody> -->

                                   <!---  change by prem --->
                                <tbody>
                                <?php foreach ($leaveTypesData as $leaveType){

                                    $numOfLeave=$leaveType->num_of_leave;
                                    
                                    if(!empty($leaveType->takenLeaves)){
                                       $takenLeave= count($leaveType->takenLeaves);
                                    }else{
                                         $takenLeave=0;
                                    }
                                    
                                   
                                   ?>
                                    <tr>
                                        <td>
                                            <span class="primary-link">{{  ucfirst($leaveType->leaveType) }}</span>
                                        </td>
                                        <td><?php echo $numOfLeave;?></td>
                                        <td><?php echo $takenLeave;?></td>                                  
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <!--End Profile Body-->
        </div>

    </div>


    {{--------------------------Show Notice MODALS-----------------}}


    <div class="modal fade show_notice" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
         aria-hidden="true" id="modal-data">
        <div class="modal-dialog">
            <div class="modal-content">

            </div>
        </div>
    </div>


    {{------------------------END Notice MODALS---------------------}}

@stop

@section('footerjs')
    {!!  HTML::script("assets/global/plugins/datatables/datatables.min.js") !!}
    {!!  HTML::script("assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js")!!}

    <script>

        var table = $('#applications').dataTable(
            {
                processing: true,
                serverSide: true,
                "ajax": "{{ URL::route("front.leave_applications") }}",
                "aaSorting": [[0, "asc"]],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'leaveType', name: 'leaveType'},
                    {data: 'start_date', name: 'start_date'},
                    {data: 'days', name: 'days'},
                    {data: 'reason', name: 'reason'},
                    {data: 'applied_on', name: 'applied_on'},
                    {data: 'application_status', name: 'application_status'},
                    {data: 'edit', name: 'edit', "bSortable": false}
                ],
                "sPaginationType": "full_numbers",
                "language": {
                    "lengthMenu": "Display _MENU_ records per page",
                    "info": "Showing page _PAGE_ of _PAGES_",
                    "emptyTable": "{{trans('messages.noDataTable')}}",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "{{trans('core.search')}}:"
                },
                "fnRowCallback": function (nRow, aData, iDisplayIndex) {
                    var oSettings = this.fnSettings();
                    $("td:first", nRow).html(oSettings._iDisplayStart + iDisplayIndex + 1);
                    return nRow;
                }

            });


        function show_application(id) {
            var url = "{{ route('leaves.show',':id') }}";
            url = url.replace(':id', id);
            $.ajaxModal('#modal-data', url);
        }

        @if (Session::get('error_leave'))
        $("html, body").animate({scrollTop: $('#applications').height() + 600}, 2000);
        @endif


    </script>


@stop

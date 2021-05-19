@extends('admin.footer')
@section('pageContent')
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Employees <span class="table-project-n">List</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="name" data-editable="true">Email</th>
                                                <th data-field="email" data-editable="true">Department Name</th>
                                                <th data-field="complete">Leave Type</th>
                                                <th data-field="task" data-editable="true">Request Date</th>
                                                <th data-field="">Proof Documents</th>
                                                <th data-field="view" data-editable="false">Edit</th>
                                                <th data-field="status" data-editable="false">Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($myLeaves as $leave)
                                                <tr>
                                                    <td></td>
                                                    <td> {{$leave->id}} </td>
                                                    <td> {{$leave->email}} </td>
                                                    <td> {{$leave->departmentName}} </td>
                                                    <td> {{{$leave->leaveType}}} </td>
                                                    <td> {{$leave->created_at}} </td>
                                                    <td> {{$leave->proofDoc}} <i class="fa fa-file-word"></i></td>
                                                    <td>
                                                        <a href="view/{{$leave->id}}"><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i> View</button></a>

                                                    </td>
                                                    <td>
                                                       

                                                        @if ($leave->status=="Accepted")
                                                            <button type="button" class="btn btn-success">{{$leave->status}}</button>
                                                        @elseif ($leave->status="Refused")
                                                            <button type="button" class="btn btn-danger">{{$leave->status}}</button>
                                                        @elseif ($leave->status="Processing")
                                                            <button type="button" class="btn btn-default">{{$leave->status}}</button>
                                                        @endif
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
            </div>
        </div>
        <!-- Static Table End -->
@endsection

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
                                    <h1>Web Department <span class="table-project-n">Leaves</span> List</h1>
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
                                                <th data-field="email" data-editable="true">Email</th>
                                                <th data-field="name" data-editable="true">Department Name</th>
                                                <th data-field="complete">Leave Type</th>
                                                <th data-field="task" data-editable="true">Request Date</th>
                                                <th data-field="proof">Proof Documents</th>
                                                <th data-field="status">Status</th>
                                                <th data-field="action">Options</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($webDept as $leave)
                                                <tr>
                                                    <td></td>
                                                    <td> {{$leave->id}} </td>
                                                    <td> {{$leave->email}} </td>
                                                    <td> {{$leave->departmentName}} </td>
                                                    <td> {{{$leave->leaveType}}} </td>
                                                    <td> {{$leave->created_at}} </td>
                                                    <td> {{$leave->proofDoc}} <i class="fa fa-file-word"></i></td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary"><i class="fa fa-recycle"></i> {{$leave->status}} </button>

                                                    </td>
                                                    <td>
                                                        <a href="respond/{{$leave->id}}">
                                                            <button type="button" class="btn btn-danger">Respond</button>
                                                        </a>
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

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
                                                <th data-field="name" data-editable="true">Name</th>
                                                <th data-field="email" data-editable="true">Email</th>
                                                <th data-field="phone" data-editable="true">Phone</th>
                                                <th data-field="complete">Start Day</th>
                                                <th data-field="task" data-editable="true">Gender</th>
                                                <th data-field="date" data-editable="true">Address</th>
                                                <th data-field="price" data-editable="true">Department</th>
                                                <th data-field="">Date of Birth</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allEmployees as $employee)
                                            <tr>
                                                <td></td>
                                                <td>{{$employee->id}}</td>
                                                <td>{{$employee->name}} {{$employee->lastName}}</td>
                                                <td>{{$employee->email}}</td>
                                                <td>{{{$employee->mobileNumber}}}</td>
                                                <td>{{$employee->created_at}}</span>
                                                </td>
                                                <td>{{$employee->gender}}</td>
                                                <td>{{$employee->address}}</td>
                                                <td> <?php
                                                    if($employee->deptId==4000){
                                                        echo('Web development');
                                                    }else if($employee->deptId==5000){
                                                        echo('Mobile development');
                                                    }else if($employee->deptId==6000){
                                                        echo('Management-Marketing');
                                                    }else {
                                                        echo('Artificial Intelligence');
                                                    }
                                                ?></td>
                                                <td>{{$employee->dob}}</td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i></td>
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

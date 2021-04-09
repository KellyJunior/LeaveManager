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
                                    <h1>LIST <span class="table-project-n">OF</span> DEPARTMENTS</h1>
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
                                                <th data-field="name" data-editable="false">Department Name</th>
                                                <th data-field="email" data-editable="false">HOD</th>
                                                <th data-field="phone" data-editable="false">HOD Email</th>
                                                <th data-field="complete">Total Employees</th>
                                                {{-- <th data-field="task" data-editable="true">Task</th>
                                                <th data-field="date" data-editable="true">Date</th>
                                                <th data-field="price" data-editable="true">Price</th> --}}
                                                <th data-field="action">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($departments as $department)
                                            <tr>
                                                <td></td>
                                                <td>{{$department->deptId}}</td>
                                                <td>{{$department->departmentName}}</td>
                                                <td>{{$department->name}} {{$department->lastName}}</td>
                                                <td>{{$department->email}}</td>
                                                <td class="datatable-ct">
                                                    <?php
                                                        if($department->deptId==4000){
                                                            echo($totalEmplWeb);
                                                        } else if($department->deptId==5000){
                                                            echo($totalEmplMob);
                                                        } else if($department->deptId==6000){
                                                            echo($totalEmplManag);
                                                        }else if($department->deptId==7000){
                                                            echo($totalEmplAi);
                                                        }
                                                    ?>
                                                </td>
                                                <td class="datatable-ct"><i class="fa fa-check"></i>
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

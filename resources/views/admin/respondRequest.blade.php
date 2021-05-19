@extends('admin.footer')
@section('pageContent')
<div class="mailbox-view-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-md-3 col-sm-3 col-xs-12">
                <div class="hpanel shadow-inner responsive-mg-b-30">
                    <div class="panel-body">
                        <a href="mailbox_compose.html" class="btn btn-success compose-btn btn-block m-b-md">Overview</a>
                        <ul class="mailbox-list">
                            <li>
                                <a href="#">
                                        <span class="pull-right">{{count($myLeaves) }}</span>
                                        <i class="fa fa-envelope"></i> Total Leaves
                                    </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-check" style="color: green"></i> Accepted </a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-times" style="color: red"></i> Refused</a>
                            </li>
                             <li>
                                <a href="#"><i class="fa fa-print"></i> Print</a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="mailbox-list">
                          {{--   <li>
                                <a href="#"><i class="fa fa-plane text-danger"></i> Travel</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart text-warning"></i> Finance</a>
                            </li> --}}
                            {{-- <li>
                                <a href="#"><i class="fa fa-users text-info"></i> Social</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-tag text-success"></i> Promos</a>
                            </li> --}}
                            <li>
                                <a href="#"><i class="fa fa-flag text-primary"></i> Updates</a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="mailbox-list">
                            <li>
                                <a href="#"><i class="fa fa-gears"></i> Settings</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-info-circle"></i> Support from syst admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
<div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
    <div class="hpanel email-compose mailbox-view">
        <div class="panel-heading hbuilt">

            <div class="p-xs h4">
                <small class="pull-right view-hd-ml">
                        08:26 PM (16 hours ago)
                    </small> Leave Request View

            </div>
        </div>
        <div class="border-top border-left border-right bg-light">
            <div class="p-m custom-address-mailbox">

                <div>
                    <span class="font-extra-bold">Subject: </span> Request for a {{$selectedLeave[0]->leaveType}}
                </div>
                <div>
                    <span class="font-extra-bold">From: </span>
                    <a href="#">{{$selectedLeave[0]->email}}</a>
                </div>
                <div>
                    <span class="font-extra-bold">Status: </span> <b>{{$selectedLeave[0]->status}}</b>
                </div>
                <div>
                    <span class="font-extra-bold">Date: </span> {{$selectedLeave[0]->created_at}}
                </div>
            </div>
        </div>
        <div class="panel-body panel-csm">
            <div>
                <h4>Dear Head of Department of {{$selectedLeave[0]->departmentName}}, </h4>

                <p>{{$selectedLeave[0]->description}}</p>

                <p>
                    @if ($user->gender=="Male" || $user->gender=="male")
                            Mr. {{  $user->name}} {{$user->lastName}}.
                        @elseif ($user->gender=="Female" || $user->gender=="female")
                            Ms. {{  $user->name}} {{$user->lastName}}.
                    @endif

                </p>
            </div>
        </div>

        <div class="border-bottom border-left border-right bg-white mg-tb-15">
            <p class="m-b-md">
                <span><i class="fa fa-paperclip"></i> 1 attachment - </span>
                <a href="#" class="btn btn-default btn-xs">Download all in zip format <i class="fa fa-file-zip-o"></i> </a>
            </p>
{{--
            <div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="hpanel vw-mb">
                            <div class="panel-body file-body incon-ctn-view">
                                <i class="fa fa-file-pdf-o text-info"></i>
                            </div>
                            <div class="panel-footer ft-pn">
                                <a href="#">Document_2016.doc</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="hpanel vw-mb res-mg-t-30 table-mg-t-pro-n">
                            <div class="panel-body file-body incon-ctn-view">
                                <i class="fa fa-file-audio-o text-warning"></i>
                            </div>
                            <div class="panel-footer ft-pn">
                                <a href="#">Audio_2016.doc</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="hpanel vw-mb res-mg-t-30 table-mg-t-pro-n">
                            <div class="panel-body file-body incon-ctn-view">
                                <i class="fa fa-file-excel-o text-success"></i>
                            </div>
                            <div class="panel-footer ft-pn">
                                <a href="#">Sheets_2016.doc</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}
        </div>

        <div style="display: flex;" class="panel-footer text-right ft-pn">
            <div class="btn-group active-hook">
                <a href="{{asset('Web/DepartmentLeaves')}}">
                    <button class="btn btn-default"><i class="fa fa-reply"></i> Go Back</button>
                </a>
                <form action="refuse/{{$selectedLeave[0]->id}}" method="POST" style="float:left;">
                    @csrf
                    <button type="submit" class="btn btn-danger" id="buttonRefuse" ><i class="fa fa-times"></i> Refuse</button>
                </form>

                <form action="accept/{{$selectedLeave[0]->id}}" method="POST" style="float:right;">
                    @csrf
                    <button type="submit" value="Accepted" id="buttonAccept" class="btn btn-success"><i class="fa fa-check"></i> Accept</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection

@extends('admin.adminHome')
@section('sideBar')
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="{{asset('img/logo/logo.png')}}" alt="" /></a>
            <strong><a href="index.html"><img src="{{asset('img/logo/logosn.png')}}" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="index.html">
                               <span class="educate-icon educate-home icon-wrap"></span>
                               <span class="mini-click-non">Dashboard</span>
                            </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href="{{asset('adminAnalytics')}}"><span class="mini-sub-pro">Dashboard v.1</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">HODs (2)</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Professors" href="{{asset('all-Hod')}}"><span class="mini-sub-pro">All HOD(s)</span></a></li>
                            <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Add New HOD</span></a></li>
                            </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Employees (3)</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Students" href="{{asset('all-Employees')}}"><span class="mini-sub-pro">All Employees</span></a></li>
                            <li><a title="Add Students" href=""><span class="mini-sub-pro">New Employee(s)</span></a></li>
                            </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Syst Admin (1)</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">Admin</span></a></li>
                            <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">New Admin</span></a></li>
                            </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Departments</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Departments List" href="{{asset('all-Department')}}"><span class="mini-sub-pro">Departments List</span></a></li>
                            <li><a title="Add Departments" href="{{asset('add-Department')}}"><span class="mini-sub-pro">New Departments</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Leaves</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Courses" href="all-courses.html"><span class="mini-sub-pro">All Requests</span></a></li>
                            <li><a title="Add Courses" href="add-course.html"><span class="mini-sub-pro">New Request </span></a></li>
                        </ul>
                    </li>

                     <li>
                        <a class="" href="{{asset('webDev')}}" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">web development</span></a>
                    </li>
                    <li>
                        <a class="" href="{{asset('mobileDev')}}" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Mobile development</span></a>
                    </li>
                    <li>
                        <a class="" href="{{asset('management')}}" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Management-Marketing</span></a>
                    </li>
                    <li>
                        <a class="" href="{{asset('ai')}}" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Artificial Intelligence</span></a>
                    </li>

                    {{-- <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Mailbox</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                            <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">View Mail</span></a></li>
                            <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Compose Mail</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Interface</span></a>
                        <ul class="submenu-angle interface-mini-nb-dp" aria-expanded="false">
                            <li><a title="Google Map" href="google-map.html"><span class="mini-sub-pro">Google Map</span></a></li>
                            <li><a title="Data Maps" href="data-maps.html"><span class="mini-sub-pro">Data Maps</span></a></li>
                            <li><a title="Pdf Viewer" href="pdf-viewer.html"><span class="mini-sub-pro">Pdf Viewer</span></a></li>
                            <li><a title="X-Editable" href="x-editable.html"><span class="mini-sub-pro">X-Editable</span></a></li>
                            <li><a title="Code Editor" href="code-editor.html"><span class="mini-sub-pro">Code Editor</span></a></li>
                            <li><a title="Tree View" href="tree-view.html"><span class="mini-sub-pro">Tree View</span></a></li>
                            <li><a title="Preloader" href="preloader.html"><span class="mini-sub-pro">Preloader</span></a></li>
                            <li><a title="Images Cropper" href="images-cropper.html"><span class="mini-sub-pro">Images Cropper</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Charts</span></a>
                        <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                            <li><a title="Bar Charts" href="bar-charts.html"><span class="mini-sub-pro">Bar Charts</span></a></li>
                            <li><a title="Line Charts" href="line-charts.html"><span class="mini-sub-pro">Line Charts</span></a></li>
                            <li><a title="Area Charts" href="area-charts.html"><span class="mini-sub-pro">Area Charts</span></a></li>
                            <li><a title="Rounded Charts" href="rounded-chart.html"><span class="mini-sub-pro">Rounded Charts</span></a></li>
                            <li><a title="C3 Charts" href="c3.html"><span class="mini-sub-pro">C3 Charts</span></a></li>
                            <li><a title="Sparkline Charts" href="sparkline.html"><span class="mini-sub-pro">Sparkline Charts</span></a></li>
                            <li><a title="Peity Charts" href="peity.html"><span class="mini-sub-pro">Peity Charts</span></a></li>
                        </ul>
                    </li> --}}
                    {{-- <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Data Tables</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Peity Charts" href="static-table.html"><span class="mini-sub-pro">Static Table</span></a></li>
                            <li><a title="Data Table" href="data-table.html"><span class="mini-sub-pro">Data Table</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">Forms Elements</span></a>
                        <ul class="submenu-angle form-mini-nb-dp" aria-expanded="false">
                            <li><a title="Basic Form Elements" href="basic-form-element.html"><span class="mini-sub-pro">Bc Form Elements</span></a></li>
                            <li><a title="Advance Form Elements" href="advance-form-element.html"><span class="mini-sub-pro">Ad Form Elements</span></a></li>
                            <li><a title="Password Meter" href="password-meter.html"><span class="mini-sub-pro">Password Meter</span></a></li>
                            <li><a title="Multi Upload" href="multi-upload.html"><span class="mini-sub-pro">Multi Upload</span></a></li>
                            <li><a title="Text Editor" href="tinymc.html"><span class="mini-sub-pro">Text Editor</span></a></li>
                            <li><a title="Dual List Box" href="dual-list-box.html"><span class="mini-sub-pro">Dual List Box</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap"></span> <span class="mini-click-non">App views</span></a>
                        <ul class="submenu-angle app-mini-nb-dp" aria-expanded="false">
                            <li><a title="Notifications" href="notifications.html"><span class="mini-sub-pro">Notifications</span></a></li>
                            <li><a title="Alerts" href="alerts.html"><span class="mini-sub-pro">Alerts</span></a></li>
                            <li><a title="Modals" href="modals.html"><span class="mini-sub-pro">Modals</span></a></li>
                            <li><a title="Buttons" href="buttons.html"><span class="mini-sub-pro">Buttons</span></a></li>
                            <li><a title="Tabs" href="tabs.html"><span class="mini-sub-pro">Tabs</span></a></li>
                            <li><a title="Accordion" href="accordion.html"><span class="mini-sub-pro">Accordion</span></a></li>
                        </ul>
                    </li> --}}
                    {{-- <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Pages</span></a>
                        <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                            <li><a title="Login" href="login.html"><span class="mini-sub-pro">Login</span></a></li>
                            <li><a title="Register" href="register.html"><span class="mini-sub-pro">Register</span></a></li>
                            <li><a title="Lock" href="lock.html"><span class="mini-sub-pro">Lock</span></a></li>
                            <li><a title="Password Recovery" href="password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
                            <li><a title="404 Page" href="404.html"><span class="mini-sub-pro">404 Page</span></a></li>
                            <li><a title="500 Page" href="500.html"><span class="mini-sub-pro">500 Page</span></a></li>
                        </ul>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </nav>
</div>
@endsection

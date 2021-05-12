@extends('admin.footer')
@section('pageContent')
<!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Courses Details</a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                {{-- <div id="dropzone1" class="pro-ad addcoursepro"> --}}
                                                    <form   action="{{route('confirm-leave')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="email" type="text" class="form-control" placeholder="Your Email Address">
                                                                </div>
                                                                {{-- <div class="form-group">
                                                                    <input name="departmentName" type="text" class="form-control" placeholder="Department Name">
                                                                </div> --}}
                                                                <div class="form-group">
                                                                    <select class="form-control" name="departmentName" type="text">
                                                                        @foreach ($departments as $department)
                                                                           <option value="{{$department->departmentName}}">{{$department->departmentName}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                                <div class="form-group alert-up-pd">
                                                                    <p style="
                                                                        font-size:bold;
                                                                        margin: 50px;
                                                                        font-weight:bold;
                                                                    ">
                                                                       Upload Document File as proof of the Leave(Not Required for Mandatory Leaves)
                                                                   </p>
                                                                    <input type="file" name="proofDoc"  class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15">
                                                                    {{-- <input name="leaveType" type="text" class="form-control" placeholder="Type Of Leave"> --}}
                                                                    <select class="form-control" name="leaveType" type="text" id="cars">
                                                                        <option value="National Holidays">National Holidays</option>
                                                                        <option value="Religious Festivals">Religious Festivals</option>
                                                                        <option value="Medical Leave">Medical Leave</option>
                                                                        <option value="Maternity Leave">Maternity Leave</option>
                                                                        <option value="Emergency">Emergency (will be justified within one day)</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="description" placeholder="Elaborate your Leave's reason in few words (Max:500 words)"></textarea>
                                                                </div>
                                                                {{-- <div class="form-group">
                                                                    <input name="crprofessor" type="text" class="form-control" placeholder="Professor">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input id="year" name="year" type="text" class="form-control" placeholder="Year">
                                                                </div> --}}
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                               {{--  </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

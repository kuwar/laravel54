@extends('admin.layouts.admin')

@section('title', $title)

@section('styles')
    <link href="{{URL::to('admin/coco/assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('contents')
    <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="profile-banner" style="background-image: url({{URL::to('admin/coco/images/stock/1epgUO0.jpg')}});">
            <div class="col-sm-3 avatar-container">
                <img src="{{URL::to('admin/coco/images/users/user-256.jpg')}}" class="img-circle profile-avatar"
                     alt="User avatar">
            </div>
        </div>
        <div class="content">

            <div class="row">
                <div class="col-sm-3">
                    <!-- Begin user profile -->
                    <div class="text-center user-profile-2">
                        <h4>Howdy, <b>Jane Doe</b></h4>

                        <h5>Administrator</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">1,245</span>
                                Followers
                            </li>
                            <li class="list-group-item">
                                <span class="badge">245</span>
                                Following
                            </li>
                            <li class="list-group-item">
                                <span class="badge">1,245</span>
                                Tweets
                            </li>
                        </ul>

                        <!-- User button -->
                        <div class="user-button">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                class="fa fa-envelope"></i> Send Message
                                    </button>
                                </div>
                                <div class="col-lg-6">
                                    <button type="button" class="btn btn-default btn-sm btn-block"><i
                                                class="fa fa-user"></i> Add as friend
                                    </button>
                                </div>
                            </div>
                        </div><!-- End div .user-button -->
                    </div><!-- End div .box-info -->
                    <!-- Begin user profile -->
                </div><!-- End div .col-sm-4 -->

                <div class="col-sm-9">
                    <div class="widget widget-tabbed">
                        <!-- Nav tab -->
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> About</a>
                            </li>
                        </ul>
                        <!-- End nav tab -->

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <!-- Tab about -->
                            <div class="tab-pane animated active fadeInRight" id="about">
                                <div class="user-profile-content">
                                    <h5><strong>ABOUT</strong> ME</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                                        aliquip ex ea commodo consequat.
                                    </p>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5><strong>CONTACT</strong> ME</h5>
                                            <address>
                                                <strong>Phone</strong><br>
                                                <abbr title="Phone">+62 857 123 4567</abbr>
                                            </address>
                                            <address>
                                                <strong>Email</strong><br>
                                                <a href="mailto:#">first.last@example.com</a>
                                            </address>
                                            <address>
                                                <strong>Website</strong><br>
                                                <a href="http://r209.com">http://r209.com</a>
                                            </address>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5><strong>MY</strong> SKILLS</h5>
                                            <p>UI Design</p>
                                            <p>Clean and Modern Web Design</p>
                                            <p>PHP and MySQL Programming</p>
                                            <p>Vector Design</p>
                                        </div>
                                    </div><!-- End div .row -->
                                </div><!-- End div .user-profile-content -->
                            </div><!-- End div .tab-pane -->
                            <!-- End Tab about -->

                        </div><!-- End div .tab-content -->
                    </div><!-- End div .box-info -->
                </div>
            </div>


            <!-- Footer Start -->
        @include('admin.includes.footer')
        <!-- Footer End -->
        </div>
        <!-- ============================================================== -->
        <!-- End content here -->
        <!-- ============================================================== -->

    </div>
@endsection

@section('scripts')
    <script src="{{URL::to('admin/coco/assets/libs/bootstrap-validator/js/bootstrapValidator.min.js')}}"></script>
    <script src="{{URL::to('admin/coco/assets/js/pages/form-validation.js')}}"></script>

    <script src="http://maps.google.com/maps/api/js?sensor=true')}}"></script>
    <script src="{{URL::to('admin/coco/assets/libs/jquery-gmap3/gmap3.min.js')}}"></script>
    <script src="{{URL::to('admin/coco/assets/js/pages/google-maps.js')}}"></script>
@endsection
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
        <div class="content">
            <!-- Page Heading Start -->
            <div class="page-heading">
                <h1><i class='fa fa-users'></i> {{$title}}</h1>
                <h3>{{$subtitle}}</h3></div>
            <!-- Page Heading End-->

            <!-- Your awesome content goes here -->
            <div class="row">

                <div class="col-md-12">
                    <div class="widget">
                        <div class="widget-header">
                            <h2><strong>{{$title}}</strong> {{$subtitle}}</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content">
                            <br>
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
                            </div>
                        </div>
                    </div>
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
@endsection
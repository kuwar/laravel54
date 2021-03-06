@extends('admin.layouts.admin')

@section('title', $title)

@section('styles')
    <link href="{{URL::to('admin/coco/assets/libs/bootstrap-validator/css/bootstrapValidator.min.css')}}"
          rel="stylesheet" type="text/css"/>
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
                <h1>{{$subtitle}}</h1>
            </div>
            <!-- Page Heading End-->
            <div class="row">
                <div class="col-sm-6 portlets">
                    <div class="widget">
                        <div class="widget-header transparent">
                            <h2><strong>Registration</strong> Form</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding">
                            <form role="form" id="registerForm" method="post" action="{{ url('admin/users') }}">
                                {{ csrf_field() }}

                                <div class="form-group {{ $errors->has('name') ? ' has-error ' : ''}}">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <small class="help-block">{{ $errors->first('name') }}</small>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    <label>Email address</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <small class="help-block">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 {{ $errors->has('password') ? 'has-error' : '' }}">
                                            <label>Password</label>
                                            <input id="password" type="password" class="form-control" name="password">
                                            @if ($errors->has('password'))
                                                <small class="help-block">{{ $errors->first('password') }}</small>
                                            @endif
                                        </div>
                                        <div class="col-sm-6 {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                            <label>Re-Password</label>
                                            <input type="password" class="form-control" name="password_confirmation">
                                            @if ($errors->has('password_confirmation'))
                                                <small class="help-block">{{ $errors->first('password_confirmation') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">{{ trans('view.REGISTER') }}</button>
                            </form>
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
    <script src="{{URL::to('admin/coco/assets/libs/bootstrap-validator/js/bootstrapValidator.min.js')}}"></script>
    <script src="{{URL::to('admin/coco/assets/js/pages/form-validation.js')}}"></script>
@endsection
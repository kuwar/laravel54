@extends('admin.layouts.admin')

@section('title', $title)

@section('styles')
    <link href="{{URL::to('admin/coco/assets/libs/bootstrap-validator/css/bootstrapValidator.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::to('admin/coco/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
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
            </div>
            <!-- Page Heading End-->
            {{--Alert--}}
            @include('admin.includes.alerts')

            <div class="row">
                {{--Edit profile--}}
                <div class="col-sm-6 portlets">
                    <div class="widget">
                        <div class="widget-header transparent">
                            <h2><strong>Edit</strong> Form</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding">
                            <form role="form" id="userEditForm" method="post" action="{{ url('admin/users', $user->id) }}">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}

                                <input type="hidden" name="id" value="{{ $user->id }}">

                                <div class="form-group {{ $errors->has('name') ? ' has-error ' : ''}}">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
                                    @if ($errors->has('name'))
                                        <small class="help-block">{{ $errors->first('name') }}</small>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('email') ? ' has-error ' : ''}}">
                                    <label>Email address</label>
                                    <input type="text" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                                    @if ($errors->has('email'))
                                        <small class="help-block">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">{{ trans('view.UPDATE') }}</button>
                            </form>
                        </div>
                    </div>
                </div>

                {{--Change password--}}
                <div class="col-sm-6 portlets">
                    <div class="widget">
                        <div class="widget-header transparent">
                            <h2><strong>Change Password</strong> Form</h2>
                            <div class="additional-btn">
                                <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                                <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                                <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
                            </div>
                        </div>
                        <div class="widget-content padding">
                            <form role="form" id="userChangePasswordForm" method="post" action="{{ url('admin/users/change-password') }}">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}

                                <input type="hidden" name="id" value="{{ $user->id }}">

                                <div class="form-group {{ $errors->has('password') ? ' has-error ' : ''}}">
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control" name="password">
                                    @if ($errors->has('password'))
                                        <small class="help-block">{{ $errors->first('password') }}</small>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error ' : ''}}">
                                    <label>Re-Password</label>
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                                    @if ($errors->has('password_confirmation'))
                                        <small class="help-block">{{ $errors->first('password_confirmation') }}</small>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">{{ trans('view.UPDATE') }}</button>
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
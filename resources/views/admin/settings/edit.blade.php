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
                <h1><i class='fa fa-users'></i> {{$title}}</h1>
                <h3>{{$subtitle}}</h3></div>
            <!-- Page Heading End-->
            {{--Alert--}}
            @include('admin.includes.alerts')

            <!-- Your awesome content goes here -->
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
                            <form role="form" id="userEditForm" method="post"
                                  action="{{ url('admin/settings', $setting->id) }}">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}

                                <div class="form-group {{ $errors->has('site_name') ? ' has-error ' : ''}}">
                                    <label>Site name</label>
                                    <input type="text" class="form-control" name="site_name"
                                           value="{{ old('site_name', $setting->site_name) }}">
                                    @if ($errors->has('site_name'))
                                        <small class="help-block">{{ $errors->first('site_name') }}</small>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('contact_email') ? ' has-error ' : ''}}">
                                    <label>Contact email</label>
                                    <input type="text" class="form-control" name="contact_email"
                                           value="{{ old('contact_email', $setting->contact_email) }}">
                                    @if ($errors->has('contact_email'))
                                        <small class="help-block">{{ $errors->first('contact_email') }}</small>
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
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

                                <div class="form-group {{ $errors->has('contact_phone') ? ' has-error ' : ''}}">
                                    <label>Contact phone</label>
                                    <input type="text" class="form-control" name="contact_phone"
                                           value="{{ old('contact_phone', $setting->contact_phone) }}">
                                    @if ($errors->has('contact_email'))
                                        <small class="help-block">{{ $errors->first('contact_phone') }}</small>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('contact_address') ? ' has-error ' : ''}}">
                                    <label>Contact address</label>
                                    <input type="text" class="form-control" name="contact_address"
                                           value="{{ old('contact_address', $setting->contact_address) }}">
                                    @if ($errors->has('contact_address'))
                                        <small class="help-block">{{ $errors->first('contact_address') }}</small>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('facebook_page_url') ? ' has-error ' : ''}}">
                                    <label>Facebook page url</label>
                                    <input type="text" class="form-control" name="facebook_page_url"
                                           value="{{ old('facebook_page_url', $setting->facebook_page_url) }}">
                                    @if ($errors->has('facebook_page_url'))
                                        <small class="help-block">{{ $errors->first('facebook_page_url') }}</small>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('twitter_page_url') ? ' has-error ' : ''}}">
                                    <label>Twitter page url</label>
                                    <input type="text" class="form-control" name="twitter_page_url"
                                           value="{{ old('twitter_page_url', $setting->twitter_page_url) }}">
                                    @if ($errors->has('twitter_page_url'))
                                        <small class="help-block">{{ $errors->first('twitter_page_url') }}</small>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('youtube_page_url') ? ' has-error ' : ''}}">
                                    <label>Youtube page url</label>
                                    <input type="text" class="form-control" name="youtube_page_url"
                                           value="{{ old('youtube_page_url', $setting->youtube_page_url) }}">
                                    @if ($errors->has('youtube_page_url'))
                                        <small class="help-block">{{ $errors->first('youtube_page_url') }}</small>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('googleplus_page_url') ? ' has-error ' : ''}}">
                                    <label>Google plus page url</label>
                                    <input type="text" class="form-control" name="googleplus_page_url"
                                           value="{{ old('googleplus_page_url', $setting->googleplus_page_url) }}">
                                    @if ($errors->has('googleplus_page_url'))
                                        <small class="help-block">{{ $errors->first('googleplus_page_url') }}</small>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('default_page_title') ? ' has-error ' : ''}}">
                                    <label>Default page title</label>
                                    <input type="text" class="form-control" name="default_page_title"
                                           value="{{ old('default_page_title', $setting->default_page_title) }}">
                                    @if ($errors->has('default_page_title'))
                                        <small class="help-block">{{ $errors->first('default_page_title') }}</small>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('default_meta_keys') ? ' has-error ' : ''}}">
                                    <label>Default meta keys</label>
                                    <input type="text" class="form-control" name="default_meta_keys"
                                           value="{{ old('default_meta_keys', $setting->default_meta_keys) }}">
                                    @if ($errors->has('default_meta_keys'))
                                        <small class="help-block">{{ $errors->first('default_meta_keys') }}</small>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('default_meta_description') ? ' has-error ' : ''}}">
                                    <label>Default meta description</label>
                                    <input type="text" class="form-control" name="default_meta_description"
                                           value="{{ old('default_meta_description', $setting->default_meta_description) }}">
                                    @if ($errors->has('default_meta_description'))
                                        <small class="help-block">{{ $errors->first('default_meta_description') }}</small>
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
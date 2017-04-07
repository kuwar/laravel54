@extends('layouts.admin')

@section('title', 'Push Nofitfication')

@section('page_css')
@endsection

@section('breadcrumb')
    @parent
@endsection

@section('contents')
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i> Push Notification</h2>
                </div>
                <div class="box-content">
                    <form role="form" method="post" action="{{url('admin/push-notifications')}}">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}"
                                   placeholder="Enter title">
                            @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body">Content</label>
                            <textarea name="body" id="body" class="form-control summernote"
                                      placeholder="Content">{{old('body')}}</textarea>
                            @if ($errors->has('body'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->
@endsection

@section('page_js')
@endsection

@section('custom_js')
@endsection

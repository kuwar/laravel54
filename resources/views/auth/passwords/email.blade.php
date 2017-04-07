@extends('admin.layouts.login')

@section('contents')
    <div class="container">
        <div class="full-content-center">
            <p class="text-center"><a href="#"><img src="{{URL::to('admin/coco/assets/img/login-logo.png')}}"
                                                    alt="Logo"></a></p>
            <div class="login-wrap animated flipInX">
                <div class="login-block">
                    <img src="{{URL::to('admin/coco/images/users/default-user.png')}}"
                         class="img-circle not-logged-avatar">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group login-input">
                            <i class="fa fa-envelope overlay"></i>
                            <input id="email" type="email" class="form-control text-input" placeholder="Email"
                                   name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-success btn-block">Send Password Reset Link</button>
                            </div>
                            <div class="col-sm-4">
                                <a href="{{ route('login') }}" class="btn btn-default btn-block">Login</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection

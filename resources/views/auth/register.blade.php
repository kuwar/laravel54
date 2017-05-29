@extends('admin.layouts.login')

@section('contents')
    <div class="container">
        <div class="full-content-center animated fadeInDownBig">
            <p class="text-center"><a href="#"><img src="{{URL::to('admin/coco/assets/img/login-logo.png')}}"
                                                    alt="Logo"></a></p>
            <div class="login-wrap">
                <div class="login-block">
                    <form role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group login-input">
                            <i class="fa fa-envelope overlay"></i>
                            <input id="email" type="email" class="form-control text-input" placeholder="E-mail"
                                   name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group login-input">
                            <i class="fa fa-user overlay"></i>
                            <input id="name" type="text" class="form-control text-input" placeholder="Username"
                                   name="name" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group login-input">
                            <i class="fa fa-key overlay"></i>
                            <input id="password" type="password" class="form-control text-input" placeholder="********"
                                   name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group login-input">
                            <i class="fa fa-key overlay"></i>
                            <input id="password_confirmation" type="password" class="form-control text-input"
                                   placeholder="********" name="password_confirmation" required>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-default btn-block">Register</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

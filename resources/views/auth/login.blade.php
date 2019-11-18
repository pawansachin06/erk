@extends('layouts.app')

@section('content')
<div class="container laravel-login">
    <div class="row login-page">
        <div class="col-md-12 laravel-login-inner">
            <div class="login-body-width panel panel-default">
                <div class="panel-heading text-center">登录</div>

                <div class="panel-body p-0">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="mx-0 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="mx-0 form-group{{ $errors->has('password') ? ' has-error' : '' }}">                            
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif                            
                        </div>
                        <div class="form-group stay-forget row mx-0">
                            <div class="checkbox col-md-6 p-0">                                
                                <input class="regular-checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                       <label for="checkbox-1-1"></label>
                                <span>保持登录状态</span>                                
                            </div>
                            <div class="text-right col-md-6 p-0 forget-pass">
                                <a class="btn-link" href="{{ route('password.request') }}">
                                    忘记密码？
                                </a>
                            </div>
                        </div>
                        <div class="mb-0 form-group">
                            <div class="col-md-12 text-center login-btn-id"><button type="submit" class="w-100 d-inline-block btn login-btn btn-primary">
                                    登录
                                </button>
                                <div class="create-an-account">
                                    <a href="{{ url('/register') }}">新用户？ <span>新建账号</span></a>
                                </div>
                            </div>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

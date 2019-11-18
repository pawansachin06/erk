@extends('layouts.app')
@section('content')
@include('header', array('medical' =>$medical))

<div class="container register-page">    
    <div class="row m-0 register-account-container">
        <div class="col-md-12 p-0 register-account-inner">
            <div class="signup-heading-content">
                <h1 class="page-title">注册</h1>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input placeholder="名" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input placeholder="姓" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input placeholder="邮箱" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input placeholder="密码" id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input placeholder="确认密码" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
<!--                        <div class="stay-and-forget">
                            <div class="checkbox text-left">
                                <input type="checkbox" class="regular-checkbox">
                                <label for="checkbox-1-2"></label>
                                <span>
                                    Sign up for newsletter &amp; latest industry insights
                                </span></div>
                        </div>-->
                        <div class="form-group button-wrappers mx-0">
                            <div class="button-wrapper">
                                <button type="submit" class="text-uppercase btn btn-primary">
                                    注册
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
@endsection

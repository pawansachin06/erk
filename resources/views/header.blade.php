<div class="header">
    <div class="topbar vcenter">
        <div class="navbar-header-inner d-flex justify-content-between align-items-center">
            <div class="menu w-100">
                <nav class="navbar navbar-expand-lg p-0 m-0">
                    <a class="navbar-brand p-0" href="{{url('/')}}">
                        <img src="{{asset('/public/images/logo.png')}}">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                    </button>
                    <div class="container">
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav custom-navbar">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{url('/')}}">首  页</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('doctor')}}">专家介绍</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/news/category/id/9')}}">消息公告</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/health/category/id/6')}}">健康资讯</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/about')}}">关于我们</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{url('medical-products/post')}}">
                                        产品介绍
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <ul class="navbar-nav nav nav-mobile">
                <?php
                if ($user = Auth::user()) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/account')}}"> <strong>Account</strong></a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="{{url('logout')}}"><i class="fa fa-sign-out"></i> <strong>退出</strong></a>
                    </li>
                    <?php
                } else {
                    ?>
                    <li class="nav-item">
                        <a data-toggle="modal" data-target="#regModal" class="nav-link" href="javascript:void(0)"><i class="fa fa-user"></i> <strong>注册</strong></a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="modal" data-target="#loginModal" class="nav-link" href="javascript:void(0)"><i class="fa fa-sign-in"></i> <strong>登录</strong></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>

        <!-- The Modal -->
        <div class="modal fade" id="regModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="register-page">
                        <div class="row m-0 register-account-container">
                            <div class="col-md-6 p-0 register-account-inner">
                                <div class="signup-img h-100">
                                    <img class="h-100" src="{{asset('/public/images/popup-img.png')}}">
                                </div>
                            </div>
                            <div class="col-md-6 p-0 register-account-inner">
                                <div class="modal-header p-0">
                                    <button type="button" class="close" data-dismiss="modal"><span><img src="{{asset('/public/images/cross-btn.png')}}"></span></button>
                                </div>
                                <div class="signup-heading-content">
                                    <h1 class="page-title text-left">注册</h1>
                                </div>
                                <div class="panel panel-default mb-0">
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
                </div>
            </div>
        </div>

        <div class="modal fade" id="loginModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="laravel-login">
                        <div class="row login-page mx-0">
                            <div class="col-md-6 p-0 register-account-inner">
                                <div class="signup-img h-100">
                                    <img class="h-100" src="{{asset('/public/images/popup-img.png')}}">
                                </div>
                            </div>
                            <div class="col-md-6 laravel-login-inner">
                                <div class="modal-header p-0">
                                    <button type="button" class="close" data-dismiss="modal"><span><img src="{{asset('/public/images/cross-btn.png')}}"></span></button>
                                </div>
                                <div class="login-body-width panel panel-default mb-0">
                                    <div class="panel-heading text-center">登录</div>

                                    <div class="panel-body p-0">
                                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                            {{ csrf_field() }}

                                            <div class="input-field mx-0 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                <input placeholder="" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                                @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="input-field mx-0 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
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
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

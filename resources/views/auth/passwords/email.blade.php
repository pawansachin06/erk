@extends('layouts.app')

@section('content')
<div class="reset-page">
    <div class="container">
        <div class="recover-container">
            <h1 class="recovery-header text-center">Password Recovery</h1>
            <p class="sub-heading-recovery text-center">Please enter the email you used when creating an account.</p>        

            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form class="form-horizontal recovery-customer-password" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}
                        <div class="form-control-height form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" placeholder="Enter your email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="cancle-submit"><div class="button-wwrapper">
                                <button type="submit" class="btn">
                                    Send Password Reset link</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

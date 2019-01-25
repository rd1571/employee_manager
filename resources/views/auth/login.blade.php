@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <!-- <div class="col-md-3"> -->
        <div class="login-container">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-3 control-label">Email</label> -->

                            <div class="col-md-12 input-container">
                                <i class="fa fa-envelope icon"></i>
                                <input id="email" type="email" class="form-control input-field" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-3 control-label">Password</label> -->

                            <div class="col-md-12 input-container">
                                <i class="fa fa-key icon"></i>
                                <input id="password" type="password" class="form-control input-field" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default btn-login-default">
                                    Login
                                </button>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-login-default">
                                    Login
                                </button>
                            </div>
                        </div>

                        <!-- <div class="form-group">
                            <div class="col-md-12">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password? 
                                </a>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

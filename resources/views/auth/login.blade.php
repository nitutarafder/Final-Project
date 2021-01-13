@extends('layouts.app')
@extends('layouts.font_header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="max-width: 35.667%;">
            <div class="card">
                <div class="card-header" style="background-color:#fff"><h2>Login </div>

                <div class="card-body" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group ">
                            
                            <div >
                                <p>Email</p>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            
                            <div >
                            <p>Password</p>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <div >
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div >
                                <button type="submit" class="btn btn-primary" style="width:100%; background-color:#025d98;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link " href="{{ route('password.request') }}"style="text-align:center;"   >
                                        {{ __('Forgot Your Password?') }}
                                        
                                    </a> <a class="btn btn-link" style="text-align:center;" href="{{ route('register') }}">SignUp</a>

                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('auth.layout')

@section('content')
    <div class="center text-center mt5 w-20">
            <img src="{{url("images/handesk_full.png")}}" class="w-80">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                <div class="m3">
                    <input id="email" type="email" class="w-80" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="m3">
                    <input id="password" type="password" class="w-80" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="mh3 mb2">
                    <button type="submit" class="uppercase ph5 w-80">Login</button>
                </div>
                <div class="mb3">
                    <input type="checkbox" class="" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    Remember Me
                </div>

                <div>
                    <a class="btn btn-link" href="{{ route('password.request') }}"> Forgot Your Password? </a>
                </div>
            </form>
    </div>
@endsection

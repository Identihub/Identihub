@extends('layouts.app')

@section('content')

    <div class="container page-login">

        <form class="center-both-axes" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <section class="template-input-group-with-button">

                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if ($errors->has('error'))
                    <span class="input-error" style="margin-bottom: 10px">
                        <strong>{{ $errors->first('error') }}</strong>
                    </span>
                @endif

                <div class="input-wrapper{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="input" name="email" placeholder="email" value="{{ old('email') }}"
                           required autofocus>
                    @if ($errors->has('email'))
                        <span class="input-error">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-wrapper{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="input" placeholder="password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="input-error">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-wrapper remember-me">
                    <label for="rememberMe">Remember Me</label>
                    <input id="rememberMe" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="rememberMe" class="checkbox"></label>
                </div>

                <div class="button-wrapper">
                    <div class="input-wrapper">
                        <button type="submit" class="button">
                            Login
                        </button>
                    </div>
                </div>

                @if(env('GITHUB_LOGIN_ENABLED'))
                    <p style="text-align: center; margin: 10px">OR</p>

                    <div class="btn-wrapper">
                        <div class="input-wrapper">
                            <a href="{{ route('github.redirect') }}" class="button">
                                <i class="fab fa-github"></i>&nbsp;&nbsp;Login via Github
                            </a>
                        </div>
                    </div>
                @endif

                <div class="center-text">
                    <a class="link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>

            </section>

        </form>

    </div>

@endsection

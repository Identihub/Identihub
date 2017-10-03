@extends('layouts.app')

@section('content')
    <div class="container">

        <form class="center-both-axes" role="form" method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <section class="template-input-group-with-button">

                <div class="input-wrapper{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="input" name="email" value="{{ $email or old('email') }}" required  placeholder="email" autofocus>
                    @if ($errors->has('email'))
                        <span class="input-error">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-wrapper{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="input" name="password" placeholder="password" required>
                    @if ($errors->has('password'))
                        <span class="input-error">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-wrapper{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" class="input" name="password_confirmation" placeholder="confirm password" required>
                    @if ($errors->has('password_confirmation'))
                        <span class="input-error">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="button-wrapper">
                    <button type="submit" class="button">
                        Reset Password
                    </button>
                </div>
            </section>

        </form>

    </div>

@endsection

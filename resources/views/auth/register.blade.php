@extends('layouts.app')

@section('content')
    <div class="container">

        <form class="center-both-axes" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <section class="template-input-group-with-button">
                <div class="input-wrapper{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" placeholder="Full Name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-wrapper{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" placeholder="Email" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-wrapper{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="input" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-wrapper">
                    <input id="password-confirm" type="password" class="input" name="password_confirmation" placeholder="Confirm Password" required>
                </div>

                <div class="button-wrapper">
                    <div class="input-wrapper">
                        <button type="submit" class="button">
                            Register
                        </button>
                    </div>
                </div>
            </section>

        </form>

    </div>
@endsection

@extends('layouts.app')

@section('content')

    <div class="container page-login">

        <form class="center-both-axes" method="POST" action="{{ route('introduction.user.post') }}">
            {{ csrf_field() }}

            <section class="template-input-group-with-button">

                <div class="logo-wrapper">
                    <img src="/images/logo.svg" width="75" height="75">
                </div>

                <div class="input-wrapper{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="input" name="name" placeholder="full name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="input-error">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-wrapper{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="input" placeholder="email" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="input-error">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-wrapper{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="input" placeholder="password" name="password" value="{{ old('password') }}" required>
                    @if ($errors->has('password'))
                        <span class="input-error">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-wrapper{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="input" placeholder="password repeat" name="password-repeat" required>
                    @if ($errors->has('password-repeat'))
                        <span class="input-error">
                            <strong>{{ $errors->first('password-repeat') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="button-wrapper">
                    <div class="input-wrapper">
                        <button type="submit" class="button">
                            Continue
                        </button>
                    </div>
                </div>

            </section>

        </form>

    </div>

@endsection

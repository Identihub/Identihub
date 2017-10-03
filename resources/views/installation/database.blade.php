@extends('layouts.app')

@section('content')

    <div class="container page-login">

        <form class="center-both-axes" method="POST" action="{{ route('introduction.database.post') }}">
            {{ csrf_field() }}

            <section class="template-input-group-with-button">

                <div class="logo-wrapper">
                    <img src="/images/logo.svg" width="75" height="75">
                </div>

                <div class="input-wrapper{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="text" class="input" name="host" placeholder="database host" value="{{ old('host') }}" required autofocus>
                    @if ($errors->has('host'))
                        <span class="input-error">
                            <strong>{{ $errors->first('host') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-wrapper{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="input" placeholder="database name" name="name" value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                        <span class="input-error">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-wrapper{{ $errors->has('username') ? ' has-error' : '' }}">
                    <input type="text" class="input" placeholder="database username" name="username" value="{{ old('username') }}" required>
                    @if ($errors->has('username'))
                        <span class="input-error">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="input-wrapper{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="input" placeholder="database password" name="password" required>
                    @if ($errors->has('password'))
                        <span class="input-error">
                            <strong>{{ $errors->first('password') }}</strong>
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

@extends('layouts.app')

@section('content')

    <div class="container page-login">

        <form class="center-both-axes" method="POST" action="{{ route('introduction.organization.post') }}">
            {{ csrf_field() }}

            <section class="template-input-group-with-button">

                <div class="logo-wrapper">
                    <img src="/images/logo.svg" width="75" height="75">
                </div>

                <div class="input-wrapper{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="input" name="name" placeholder="organization name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="input-error">
                            <strong>{{ $errors->first('name') }}</strong>
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

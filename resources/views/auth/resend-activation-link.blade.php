@extends('layouts.app')

@section('content')

    <div class="container page-login">

        <form class="center-both-axes" method="POST" action="{{ route('activate.post') }}">
            {{ csrf_field() }}

            <section class="template-input-group-with-button">

                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="input-wrapper{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="input" name="email" placeholder="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="input-error">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="button-wrapper">
                    <div class="input-wrapper">
                        <button type="submit" class="button">
                            Send Link
                        </button>
                    </div>
                </div>

            </section>

        </form>

    </div>

@endsection

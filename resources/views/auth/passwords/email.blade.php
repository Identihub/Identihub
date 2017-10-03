@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel-heading">Reset Password</div>
    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="center-both-axes" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <section class="template-input-group-with-button">
                <section class="title-wrapper">
                    <h2>Reset Password</h2>
                </section>

                <div class="input-wrapper{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="input" name="email" value="{{ old('email') }}" placeholder="email" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="button-wrapper">
                    <div class="input-wrapper">
                        <button type="submit" class="button">
                            Reset
                        </button>
                    </div>
                </div>
            </section>

        </form>

    </div>
</div>
@endsection

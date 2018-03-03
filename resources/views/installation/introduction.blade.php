@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-both-axes">
            <div class="template-logo-description">
                <header>
                    <img width="75" height="75" src="/images/logo.svg">
                    <h2>Welcome to Identihub</h2>
                </header>
                <section>
                    <p>Welcome to Identihub.</p>
                    <p>The open source software developed by Ura to help you host your brand.</p>
                    <a class="button" href="{{ route('introduction.database') }}">Continue</a>
                </section>
            </div>
        </div>
    </div>
@endsection

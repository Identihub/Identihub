@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-both-axes">
            <div class="template-logo-description">
                <header>
                    <img width="75" height="75" src="/images/logo.svg">
                    <h2>Installation Process</h2>
                </header>
                <ul class="installation-checker">
                    @foreach($thirdParty as $software => $checked)
                        <li class="{{ $checked ? 'active' : '' }}">{{ $software }}</li>
                    @endforeach
                </ul>
                <br />
                <section>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <a class="button" href="{{ route('introduction.finish') }}">Continue</a>
                </section>
            </div>
        </div>
    </div>
@endsection

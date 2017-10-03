@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="center-both-axes">
            <div class="template-logo-description">
                <header>
                    <img width="75" height="75" src="/images/logo.svg">
                    <h2>Installation Process</h2>
                </header>
                <section>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <a class="button" href="{{ route('introduction.database') }}">Continue</a>
                </section>
            </div>
        </div>
    </div>
@endsection

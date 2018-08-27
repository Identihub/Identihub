<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

@include('partials.head')

<body>
<div id="app">

    @if(!isset($menu) || $menu !== false)
        <nav>
            <div class="container">
                @include('components.logo-login-menu')
            </div>
        </nav>
    @endif

    @yield('content')

</div>

<footer>powered by <span>Identihub</span></footer>

@stack('scripts')
</body>
</html>

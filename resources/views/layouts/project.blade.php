<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

@include('partials.head')

<body class="app-page">
<div>

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

<script src="{{ mix('js/react-project.js') }}"></script>
</body>
</html>

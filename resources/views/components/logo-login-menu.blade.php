<div class="navigation">
    <a class="center-both-axes" href="/">
        <img src="/images/logo.svg" width="48" height="48">
    </a>

    <label class="menu" for="menu"><img src="/images/menu.svg"/></label>
    <input type="checkbox" id="menu"/>

    <div class="menu-container">
        <label class="close" for="menu"><img src="/images/close.svg"/></label>
        <ul>
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="/app#/projects" class="dropdown-toggle">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>

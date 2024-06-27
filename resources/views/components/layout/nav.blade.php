<nav class="navbar">
    <div class="navbar-container">
        <!-- button for welcome page -->
        <div class="navbar-menu-main" id="navMenu">
            <div class="navbar-start">
                <a href="{{ route('welcome') }}"
                   class="navbar-item-left {{ Request::route()->getName() === 'welcome' ? 'is-active' : '' }}">
                    <img src="{{ asset('image/logo.png') }}" class="logo" alt="Logo">
                </a>
            </div>
            <div class="navbar-end">
                <a href="{{ route('work') }}"
                   class="navbar-item-right {{ Request::route()->getName() === 'work' ? 'is-active' : '' }}">Work
                </a>
                <a href="{{ route('research') }}"
                   class="navbar-item-right {{ Request::route()->getName() === 'research' ? 'is-active' : '' }}">Research
                </a>
                <a href="{{ route('contacts') }}"
                   class="navbar-item-right {{ Request::route()->getName() === 'contacts' ? 'is-active' : '' }}">Contacts
                </a>
                <a href="https://www.behance.net/marianamartinez6"
                   class="navbar-item-left" target="_blank">
                    <img src="{{ asset('image/Beehance icon.png') }}" class="beehance" alt="Behance logo">
                </a>
                <a href="https://mx.linkedin.com/in/margisela"
                   class="navbar-item-left" target="_blank">
                    <img src="{{ asset('image/Linkedin icon.png') }}" class="linkedin" alt="LinkedIn logo">
                </a>
                @if(!Auth::check())
                    <a href="{{ route("register") }}"
                       class="nav-buttons {{ Request::route()->getName() === 'register' ? "is-active" : "" }}">Register</a>
                @endif
                {{-- button for profile page --}}
                @auth
                    <a href="{{ route('edit') }}"
                       class="nav-buttons {{ Request::route()->getName() === 'edit' ? 'is-active' : '' }}">
                        Profile
                    </a>
                @endauth
                {{-- Button for login/logout page --}}
                @if(Auth::check())
                    <a href="{{ route('logout') }}"
                       class="nav-buttons {{ Request::route()->getName() === 'logout' ? 'is-active' : '' }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="nav-buttons {{ Request::route()->getName() === 'login' ? 'is-active' : '' }}">
                        Login
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>

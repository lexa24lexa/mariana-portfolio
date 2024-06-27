<nav class="navbar bg-transparent">
    <div class="navbar-container h-16 flex items-center justify-between">
        <!-- button for welcome page -->
        <div class="navbar-menu-main flex w-full">
            <div class="navbar-start">
                <a href="{{ route('welcome') }}"
                   class="navbar-item-left {{ Request::route()->getName() === 'welcome' ? 'text-blue-500 font-bold' : 'text-gray-600' }}">
                    <img src="{{ asset('image/logo.png') }}" class="logo" alt="Logo">
                </a>
            </div>
            <div class="navbar-end flex items-center space-x-4">
                <a href="{{ route('work') }}"
                   class="navbar-item-right {{ Request::route()->getName() === 'work' ? 'text-blue-500 font-bold' : 'text-gray-600' }}">Work
                </a>
                <a href="{{ route('research') }}"
                   class="navbar-item-right {{ Request::route()->getName() === 'research' ? 'text-blue-500 font-bold' : 'text-gray-600' }}">Research
                </a>
                <a href="{{ route('contacts') }}"
                   class="navbar-item-right {{ Request::route()->getName() === 'contacts' ? 'text-blue-500 font-bold' : 'text-gray-600' }}">Contacts
                </a>
                @guest
                    <a href="{{ route('register') }}"
                       class="navbar-item-left {{ Request::route()->getName() === 'register' ? 'text-blue-500 font-bold' : 'text-gray-600' }}">Register</a>
                @endguest
                {{-- button for profile page --}}
                @auth
                    <a href="{{ route('profile.edit') }}"
                       class="navbar-item-left {{ Request::route()->getName() === 'edit' ? 'text-blue-500 font-bold' : 'text-gray-600' }}">
                        Profile
                    </a>
                @endauth
                {{-- Button for login/logout page --}}
                @auth
                    <a href="{{ route('logout') }}"
                       class="navbar-item-left text-gray-600"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="navbar-item-left {{ Request::route()->getName() === 'login' ? 'text-blue-500 font-bold' : 'text-gray-600' }}">
                        Login
                    </a>
                @endauth
                <a href="https://www.behance.net/marianamartinez6"
                   class="navbar-item-left" target="_blank">
                    <img src="{{ asset('image/Beehance icon.png') }}" class="beehance h-5" alt="Behance logo">
                </a>
                <a href="https://mx.linkedin.com/in/margisela"
                   class="navbar-item-left" target="_blank">
                    <img src="{{ asset('image/Linkedin icon.png') }}" class="linkedin h-5" alt="LinkedIn logo">
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- Navigation bar --}}
<nav class="navbar">
    <container class="navbar-container">
        {{-- button for welcome page --}}
        <div class="navbar-menu-main" id="navMenu">
            <div class="navbar-start">
                <a href="{{ route('welcome') }}"
                   class="navbar-item-left {{ Request::route()->getName() === 'welcome' ? "is-active" : "" }}">
                    <img src="{{ asset('image/logo.png' )}}" class="logo" alt="Logo">
                </a>
            </div>
        </div>
    </container>
</nav>

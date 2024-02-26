<div class="mobile-nav-bar__container">
    <nav id="mobile-nav-bar" class="mobile-nav-bar">
        <div class="mobile-nav-bar__brand">
            <a href="{{ route('home', [], false) }}">
                <img class="mobile-nav-bar__logo" src="https://cdn.auth0.com/blog/hub/code-samples/hello-world/auth0-logo.svg" alt="Auth0 shield logo" width="82" height="24" />
            </a>
        </div>
        <span class="mobile-nav-bar__toggle material-icons" id="mobile-menu-toggle-button">
            menu
        </span>
        <div class="mobile-nav-bar__menu mobile-nav-bar__menu--closed" id="mobile-menu">
            <div class="mobile-nav-bar__tabs">
                <a href="{{ route('profile', [], false) }}" class="mobile-nav-bar__tab">
                    Profile
                </a>
                <a href="{{ route('public', [], false) }}" class="mobile-nav-bar__tab">
                    Public
                </a>
                <a href="{{ route('protected', [], false) }}" class="mobile-nav-bar__tab">
                    Protected
                </a>
                <a href="{{ route('admin', [], false) }}" class="mobile-nav-bar__tab">
                    Admin
                </a>
            </div>
            <div class="mobile-nav-bar__actions">
            </div>
        </div>
    </nav>
</div>

<div class="nav-bar__container">
    <nav class="nav-bar">
        <div class="nav-bar__brand">
            <a href="{{ route('home', [], false) }}">
                <img class="nav-bar__logo" src="https://cdn.auth0.com/blog/hub/code-samples/hello-world/auth0-logo.svg" alt="Auth0 shield logo" width="122" height="36" />
            </a>
        </div>
        <div class="nav-bar__tabs">
            <a href="{{ route('profile', [], false) }}" class="nav-bar__tab">
                Profile
            </a>
            <a href="{{ route('public', [], false) }}" class="nav-bar__tab">
                Public
            </a>
            @if (isset($isAuthenticated) && $isAuthenticated)
            <a href="{{ route('protected', [], false) }}" class="nav-bar__tab">
                Protected
            </a>
            <a href="{{ route('admin', [], false) }}" class="nav-bar__tab">
                Admin
            </a>
            @endif
        </div>
        <div class="nav-bar__buttons">
            <x-authentication-buttons />
        </div>
    </nav>
</div>

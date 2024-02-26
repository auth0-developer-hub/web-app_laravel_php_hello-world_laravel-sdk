<div class="mobile-nav-bar__buttons">
    @if (!isset($isAuthenticated) || !$isAuthenticated)
        <x-buttons.signup-button />
        <x-buttons.login-button />
    @else
        <x-buttons.logout-button />
    @endif
</div>

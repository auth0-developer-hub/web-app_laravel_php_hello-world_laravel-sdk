<div class="mobile-nav-bar__tabs">
    <x-navigation.mobile.mobile-nav-bar-tab path="{{ route('profile') }}" active="{{ $currentRoute == 'profile' }}" label="Profile" />
    <x-navigation.mobile.mobile-nav-bar-tab path="{{ route('public') }}" active="{{ $currentRoute == 'public' }}" label="Public" />
    @if (isset($isAuthenticated) && $isAuthenticated)
        <x-navigation.mobile.mobile-nav-bar-tab path="{{ route('protected') }}" active="{{ $currentRoute == 'protected' }}" label="Protected" />
        <x-navigation.mobile.mobile-nav-bar-tab path="{{ route('admin') }}" active="{{ $currentRoute == 'admin' }}" label="Admin" />
    @endif
</div>

<div class="nav-bar__tabs">
    <x-navigation.desktop.nav-bar-tab path="{{ route('profile') }}" active="{{ $currentRoute == 'profile' }}" label="Profile" />
    <x-navigation.desktop.nav-bar-tab path="{{ route('public') }}" active="{{ $currentRoute == 'public' }}" label="Public" />
    @if (isset($isAuthenticated) && $isAuthenticated)
        <x-navigation.desktop.nav-bar-tab path="{{ route('protected') }}" active="{{ $currentRoute == 'protected' }}"  label="Protected" />
        @can('read:admin-message')
            <x-navigation.desktop.nav-bar-tab path="{{ route('admin') }}" active="{{ $currentRoute == 'admin' }}"  label="Admin" />
        @endcan
    @endif
</div>

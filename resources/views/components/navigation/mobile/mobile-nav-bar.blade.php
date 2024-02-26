<div class="mobile-nav-bar__container">
    <nav class="mobile-nav-bar" id="mobile-nav-bar">
        <x-navigation.mobile.mobile-nav-bar-brand />
        <x-navigation.mobile.menu-button />
        <x-navigation.mobile.close-button />
        <div class="mobile-nav-bar__menu">
            <x-navigation.mobile.mobile-nav-bar-tabs current-route="{{ Route::currentRouteName() }}"/>
            <x-navigation.mobile.mobile-nav-bar-buttons />
        </div>
    </nav>
</div>

@if (!isset($isAuthenticated) || !$isAuthenticated)
<x-signup-button />
<x-login-button />
@else
<x-logout-button />
@endif

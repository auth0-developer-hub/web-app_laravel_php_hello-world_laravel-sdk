<footer class="page-footer">
    <div class="page-footer-grid">
        <div class="page-footer-grid__info">
            <div class="page-footer-info__message">
                <p class="page-footer-message__headline">
                    <span>This sample application is brought to you by&nbsp;</span>
                    <x-footer-hyperlink path="https://auth0.com/">
                        Auth0
                    </x-footer-hyperlink>
                </p>
                <p class="page-footer-message__description">
                    <x-footer-hyperlink path="https://auth0.com/docs/quickstarts/">
                        <span>
                            Securely implement authentication using Auth0 on any stack and any
                            device&nbsp;</span><u>in less than 10 minutes</u>
                    </x-footer-hyperlink>
                </p>
            </div>
            <div class=" page-footer-info__button">
                <a class="button button--secondary" href="https://auth0.com/signup" target="_blank" rel="noopener noreferrer" id="create-account-button">Create Free Auth0 Account</a>
            </div>
            <div class="page-footer-info__resource-list">
                @foreach ($resourceList as $resource)
                <div class="page-footer-info__resource-list-item">
                    <x-footer-hyperlink path="{{ $resource['path'] }}">
                        {{ $resource['label'] }}
                    </x-footer-hyperlink>
                </div>
                @endforeach
            </div>
        </div>
        <div class="page-footer-grid__brand">
            <div class="page-footer-brand">
                <img class="page-footer-brand__logo" src="https://cdn.auth0.com/blog/hello-auth0/auth0-shield.svg" alt="Auth0" width="20" height="22.22" />
                <x-footer-hyperlink path="https://auth0.com/">
                    Auth0 Inc
                </x-footer-hyperlink>
            </div>
        </div>
    </div>
</footer>

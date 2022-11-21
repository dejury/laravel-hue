<?php

namespace Dejury\LaravelHue\Connectors;

use Sammyjo20\Saloon\Helpers\OAuth2\OAuthConfig;
use Sammyjo20\Saloon\Http\SaloonConnector;
use Sammyjo20\Saloon\Traits\OAuth2\AuthorizationCodeGrant;

class AuthConnector extends SaloonConnector
{
    use AuthorizationCodeGrant;

    public function defineBaseUrl(): string
    {
        return 'https://api.meethue.com/v2';
    }

    protected function defaultOauthConfig(): OAuthConfig
    {
        return OAuthConfig::make()
            ->setRedirectUri('https://hafka.mp/auth/callback')
            ->setAuthorizeEndpoint('authorize')
            ->setTokenEndpoint('token')
            ->setUserEndpoint('user');
    }
}

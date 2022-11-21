<?php

namespace Dejury\LaravelHue\Tests\Feature;

use Dejury\LaravelHue\Connectors\AuthConnector;
use Dejury\LaravelHue\Tests\TestCase;

class AuthTest extends TestCase
{
    public function test_it_can_authorize_via_oauth()
    {
        $authConnector = new AuthConnector;
        $authorizationUrl = $authConnector->getAuthorizationUrl();

        dd($authorizationUrl);
    }
}

<?php

namespace Dejury\LaravelHue\Tests;


use Dejury\LaravelHue\LaravelHueServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app)
    {
        return [
            LaravelHueServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}

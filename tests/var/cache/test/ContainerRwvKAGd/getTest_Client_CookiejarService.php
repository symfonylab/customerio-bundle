<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'test.client.cookiejar' service.

include_once $this->targetDirs[4].'/vendor/symfony/browser-kit/CookieJar.php';

$this->factories['service_container']['test.client.cookiejar'] = function () {
    return new \Symfony\Component\BrowserKit\CookieJar();
};

return $this->factories['service_container']['test.client.cookiejar']();

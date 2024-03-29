<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'router.cache_warmer' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/framework-bundle/CacheWarmer/RouterCacheWarmer.php';

return $this->privates['router.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'router' => ['services', 'router', 'getRouterService', false],
], [
    'router' => '?',
]))->withContext('router.cache_warmer', $this));

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.error_listener' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/console/EventListener/ErrorListener.php';

return $this->privates['console.error_listener'] = new \Symfony\Component\Console\EventListener\ErrorListener(($this->privates['monolog.logger.console'] ?? $this->load('getMonolog_Logger_ConsoleService.php')));

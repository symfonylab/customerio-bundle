<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'symfonylab_customer_io.api' shared service.

include_once $this->targetDirs[4].'/vendor/userscape/customerio/src/Customerio/Api.php';
include_once $this->targetDirs[4].'/vendor/userscape/customerio/src/Customerio/Request.php';

return $this->privates['symfonylab_customer_io.api'] = new \Customerio\Api('foo', 'bar', ($this->privates['symfonylab_customer_io.request'] ?? ($this->privates['symfonylab_customer_io.request'] = new \Customerio\Request())));

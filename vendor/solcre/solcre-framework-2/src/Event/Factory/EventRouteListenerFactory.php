<?php

namespace Solcre\SolcreFramework2\Event\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Solcre\SolcreFramework2\Event\EventRouteListener;

class EventRouteListenerFactory implements FactoryInterface {

    /**
     * {@inheritDoc}
     */
    public function createService(ServiceLocatorInterface $serviceLocator) {
        return new EventRouteListener($serviceLocator);
    }
}

?>
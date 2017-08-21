<?php

namespace Solcre\SolcreFramework2;

class Module {

    public function getConfig() {
        return include __DIR__.'/../config/module.config.php';
    }

    public function getAutoloaderConfig() {
        return array(
            'ZF\Apigility\Autoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }

    public function onBootstrap($e) {
        $app = $e->getTarget();
        $services = $app->getServiceManager();
        
        //Attah to view
        $view = $services->get('View');
        $events = $view->getEventManager();

        //Attach to router mvc
        $em = $app->getEventManager();
        $em->attach($services->get('Solcre\SolcreFramework2\Event\EventRouteListener'));
    }
}

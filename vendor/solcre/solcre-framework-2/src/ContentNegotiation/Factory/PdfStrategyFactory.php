<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace Solcre\SolcreFramework2\ContentNegotiation\Factory;

use Solcre\SolcreFramework2\ContentNegotiation\PdfStrategy;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PdfStrategyFactory implements FactoryInterface
{
    /**
     * @param  ServiceLocatorInterface $serviceLocator
     * @return PdfStrategy;
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $renderer = $serviceLocator->get('Solcre\SolcreFramework2\ContentNegotiation\PdfRenderer');

        return new PdfStrategy($renderer);
    }
}

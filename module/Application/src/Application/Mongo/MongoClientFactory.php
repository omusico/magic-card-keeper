<?php
/**
 * Magic Card Keeper
 *
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 *
 * @link      https://github.com/manchuck/magic-card-keeper for the canonical source repository
 * @copyright Copyright (c) 2014 Chuck "MANCHUCK" Reeves (http://www.manchuck.com)
 * @license   See LICENSE.txt
 */

namespace Application\Mongo;

use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class MongoClientFactory
 *
 * @package Mongo
 * @author Chuck "MANCHUCK" Reeves <chuck@manchuck.com>
 */
class MongoClientFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed|\MongoClient
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        \MongoCursor::$slaveOkay = true;
        $config = $this->getConfigOptions($serviceLocator);
        return new \MongoClient($config['server'], $config['options']);
    }

    /**
     * @param ServiceLocatorInterface $service
     * @return array|object
     * @throws \Zend\ServiceManager\Exception\ServiceNotCreatedException
     */
    protected function getConfigOptions(ServiceLocatorInterface $service)
    {
        if (!$service->has('Config')) {
            throw new ServiceNotCreatedException('Cannot create MongoClient when missing Config');
        }

        $config = $service->get('Config');
        if (!isset($config['mongo'])
            || !isset($config['mongo']['server'])
            || !is_array($config['mongo']['options'])
        ) {
            throw new ServiceNotCreatedException('Cannot create MongoClient when missing config options');
        }

        return $config['mongo'];
    }
}

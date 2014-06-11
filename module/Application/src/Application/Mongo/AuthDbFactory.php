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
 * Class AuthDbFactory
 * @package Application\Mongo
 * @author Chuck "MANCHUCK" Reeves <chuck@manchuck.com>
 */
class AuthDbFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $service)
    {
        if (!$service->has('Mongo')) {
            throw new ServiceNotCreatedException('Cannot create Auth DB when missing Mongo');
        }

        /** @var \MongoClient $mongoClient */
        $mongoClient = $service->get('Mongo');

        return $mongoClient->selectDB('pla_auth');
    }
}

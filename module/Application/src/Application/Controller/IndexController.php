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


namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class IndexController
 *
 * @package Application\Controller
 * @author Chuck "MANCHUCK" Reeves <chuck@manchuck.com>
 */
class IndexController extends AbstractActionController
{
    /**
     * @return array|\Zend\Http\Response
     */
    public function indexAction()
    {
        return $this->redirect()->toRoute('zf-apigility/welcome');
    }
}

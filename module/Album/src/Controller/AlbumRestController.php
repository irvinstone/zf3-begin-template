<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Album\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

        class AlbumRestController extends AbstractRestfulController
        {
            public function get($id)
            {
                return new JsonModel(array("id"));
            }

            public function getList()
            {
                return new JsonModel(
                    array(
                        array("id"),
                        array("id"),
                        array("id")
                    ));
            }
        }

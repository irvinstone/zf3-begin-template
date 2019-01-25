<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Album;

use Album\Model\Album;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'album' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/album[/:action][/:id]',
                    'constraints'=> [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\AlbumController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'album-rest' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/album-rest[/:id]',
                    'constraints'=> [
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\AlbumRestController::class,
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
//        'strategies' => array(
//            'ViewJsonStrategy',
//        ),
        'template_path_stack' => [
            'album' => __DIR__ . '/../view',
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\AlbumRestController::class => InvokableFactory::class,
        ],
    ],
];

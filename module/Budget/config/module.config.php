<?php
namespace Budget;

use Budget\Controller\UserControllerFactory;
use Zend\Router\Http\Literal;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'router' => [
        'routes' => [
            'user' => [
                'type' => 'segment',
                'options' => [
                    'route' => '/user[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\UserController::class,
                        'action' => 'index',
                    ],
                ],
            ],
            'movement' => [
                'type' => 'segment',
                'options' => [
                    'route' => '/movement[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\MovementController::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\UserController::class => UserControllerFactory::class,
            Controller\MovementController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'template_map' => [
            'budget/user/index' => __DIR__ . '/../view/budget/user/index.phtml',
            'budget/user/add' => __DIR__ . '/../view/budget/user/add.phtml',
            'budget/user/edit' => __DIR__ . '/../view/budget/user/edit.phtml',
            'budget/movement/index' => __DIR__ . '/../view/budget/movement/index.phtml',
        ],
        'template_path_stack' => [
        __DIR__ . '/../view',
        ],
    ],
    'doctrine' => [
        'driver' => [
            __NAMESPACE__ . '_driver' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../../../library/User/Repository/Model' . __NAMESPACE__ . '/Entity',
                    __DIR__ . '/../../../library/Catalog/Repository/Model' . __NAMESPACE__ . '/Entity',
                    __DIR__ . '/../../../library/Movement/Repository/Model' . __NAMESPACE__ . '/Entity',
                ],
            ],
            'orm_default' => [
                'drivers' => [
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver',
                ],
            ],
        ],
    ],

];

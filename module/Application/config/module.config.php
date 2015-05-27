<?php

use Application\Controller\IndexController;
use Application\Controller\MeetupController;
use Application\Factory\MeetupControllerFactory;
use Application\Service\MeetupService;

return [
    'router'          => [
        'routes' => [
            'home'   => [
                'type'    => 'Literal',
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => IndexController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'meetup' => [
                'type'    => 'Literal',
                'options' => [
                    'route'    => '/meetup',
                    'defaults' => [
                        'controller' => MeetupController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers'     => [
        'invokables' => [
            IndexController::class => IndexController::class,
        ],
        'factories'  => [
            MeetupController::class => MeetupControllerFactory::class,
        ]
    ],
    'service_manager' => [
        'invokables' => [
            MeetupService::class => MeetupService::class,
        ],
    ],
    'view_manager'    => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map'             => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack'      => [
            __DIR__ . '/../view',
        ],
    ],
];

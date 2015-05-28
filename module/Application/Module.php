<?php

namespace Application;

use Zend\Log\LoggerAwareInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function getAutoloaderConfig()
    {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ],
            ],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getConfig()
    {
        $config = [
            'initializers' => [
                'LoggerInitializer' => function ($element, $serviceLocator) {
                    if ($element instanceof LoggerAwareInterface) {
                        $element->setLogger($serviceLocator->get('My\Custom\Logger'));
                    }
                },
            ],
        ];

        return array_merge($config, include __DIR__ . '/config/module.config.php');
    }
}

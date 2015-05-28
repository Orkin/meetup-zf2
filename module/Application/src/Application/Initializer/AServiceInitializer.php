<?php
/**
 * Created by PhpStorm.
 * User: orkin
 * Date: 28/05/15
 * Time: 20:03
 */

namespace Application\Initializer;


use Application\Service\AService;
use Application\Service\AServiceAwareInterface;
use Zend\ServiceManager\InitializerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AServiceInitializer implements InitializerInterface {
    /**
     * Initialize
     *
     * @param                         $instance
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function initialize($instance, ServiceLocatorInterface $serviceLocator)
    {
        if ($instance instanceof AServiceAwareInterface) {
            $parentLocator = $serviceLocator->getServiceLocator();
            /** @var AService $aService */
            $aService = $parentLocator->get(AService::class);
            $instance->setAService($aService);
        }
    }
} 
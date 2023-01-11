<?php

namespace ContainerJ9ncYjl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Izj0ilSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.izj0ilS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.izj0ilS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ProductController::add' => ['privates', '.service_locator.3DfJ1pY', 'get_ServiceLocator_3DfJ1pYService', true],
            'App\\Controller\\ProductController::delete' => ['privates', '.service_locator.u5c7DvU', 'get_ServiceLocator_U5c7DvUService', true],
            'App\\Controller\\ProductController::edit' => ['privates', '.service_locator.u5c7DvU', 'get_ServiceLocator_U5c7DvUService', true],
            'App\\Controller\\ProductController::index' => ['privates', '.service_locator.cadsvfQ', 'get_ServiceLocator_CadsvfQService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\ProductController:add' => ['privates', '.service_locator.3DfJ1pY', 'get_ServiceLocator_3DfJ1pYService', true],
            'App\\Controller\\ProductController:delete' => ['privates', '.service_locator.u5c7DvU', 'get_ServiceLocator_U5c7DvUService', true],
            'App\\Controller\\ProductController:edit' => ['privates', '.service_locator.u5c7DvU', 'get_ServiceLocator_U5c7DvUService', true],
            'App\\Controller\\ProductController:index' => ['privates', '.service_locator.cadsvfQ', 'get_ServiceLocator_CadsvfQService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\ProductController::add' => '?',
            'App\\Controller\\ProductController::delete' => '?',
            'App\\Controller\\ProductController::edit' => '?',
            'App\\Controller\\ProductController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ProductController:add' => '?',
            'App\\Controller\\ProductController:delete' => '?',
            'App\\Controller\\ProductController:edit' => '?',
            'App\\Controller\\ProductController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}

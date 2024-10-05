<?php

namespace ContainerYzVeZQN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\JobController' shared autowired service.
     *
     * @return \App\Controller\JobController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/JobController.php';

        $container->services['App\\Controller\\JobController'] = $instance = new \App\Controller\JobController(($container->services['doctrine'] ?? $container->getDoctrineService()));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\JobController', $container));

        return $instance;
    }
}

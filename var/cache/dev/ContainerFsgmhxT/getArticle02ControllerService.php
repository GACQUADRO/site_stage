<?php

namespace ContainerFsgmhxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticle02ControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Article02Controller' shared autowired service.
     *
     * @return \App\Controller\Article02Controller
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Article02Controller.php';

        $container->services['App\\Controller\\Article02Controller'] = $instance = new \App\Controller\Article02Controller();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Article02Controller', $container));

        return $instance;
    }
}
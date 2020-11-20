<?php

namespace ContainerGixtYKL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YBlyzTzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yBlyzTz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yBlyzTz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::indexArticle' => ['privates', '.service_locator.Zr91eP6', 'get_ServiceLocator_Zr91eP6Service', true],
            'App\\Controller\\AdminController::indexContact' => ['privates', '.service_locator.DIAC.T0', 'get_ServiceLocator_DIAC_T0Service', true],
            'App\\Controller\\ArticleController::delete' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\ArticleController::edit' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\ArticleController::index' => ['privates', '.service_locator.Zr91eP6', 'get_ServiceLocator_Zr91eP6Service', true],
            'App\\Controller\\ArticleController::show' => ['privates', '.service_locator.zp_sfEp', 'get_ServiceLocator_ZpSfEpService', true],
            'App\\Controller\\CategoryController::delete' => ['privates', '.service_locator.wNIwF8O', 'get_ServiceLocator_WNIwF8OService', true],
            'App\\Controller\\CategoryController::edit' => ['privates', '.service_locator.wNIwF8O', 'get_ServiceLocator_WNIwF8OService', true],
            'App\\Controller\\CategoryController::index' => ['privates', '.service_locator.zAmj.kw', 'get_ServiceLocator_ZAmj_KwService', true],
            'App\\Controller\\CategoryController::show' => ['privates', '.service_locator.wNIwF8O', 'get_ServiceLocator_WNIwF8OService', true],
            'App\\Controller\\ContactController::delete' => ['privates', '.service_locator.S6iF3Lw', 'get_ServiceLocator_S6iF3LwService', true],
            'App\\Controller\\ContactController::edit' => ['privates', '.service_locator.S6iF3Lw', 'get_ServiceLocator_S6iF3LwService', true],
            'App\\Controller\\ContactController::show' => ['privates', '.service_locator.S6iF3Lw', 'get_ServiceLocator_S6iF3LwService', true],
            'App\\Controller\\HomepageController::about' => ['privates', '.service_locator.0E7GJk9', 'get_ServiceLocator_0E7GJk9Service', true],
            'App\\Controller\\HomepageController::delete' => ['privates', '.service_locator.aZ0gdaJ', 'get_ServiceLocator_AZ0gdaJService', true],
            'App\\Controller\\HomepageController::edit' => ['privates', '.service_locator.aZ0gdaJ', 'get_ServiceLocator_AZ0gdaJService', true],
            'App\\Controller\\HomepageController::index' => ['privates', '.service_locator.0E7GJk9', 'get_ServiceLocator_0E7GJk9Service', true],
            'App\\Controller\\HomepageController::show' => ['privates', '.service_locator.0E7GJk9', 'get_ServiceLocator_0E7GJk9Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.aJomXdb', 'get_ServiceLocator_AJomXdbService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\AdminController:indexArticle' => ['privates', '.service_locator.Zr91eP6', 'get_ServiceLocator_Zr91eP6Service', true],
            'App\\Controller\\AdminController:indexContact' => ['privates', '.service_locator.DIAC.T0', 'get_ServiceLocator_DIAC_T0Service', true],
            'App\\Controller\\ArticleController:delete' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\ArticleController:edit' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\ArticleController:index' => ['privates', '.service_locator.Zr91eP6', 'get_ServiceLocator_Zr91eP6Service', true],
            'App\\Controller\\ArticleController:show' => ['privates', '.service_locator.zp_sfEp', 'get_ServiceLocator_ZpSfEpService', true],
            'App\\Controller\\CategoryController:delete' => ['privates', '.service_locator.wNIwF8O', 'get_ServiceLocator_WNIwF8OService', true],
            'App\\Controller\\CategoryController:edit' => ['privates', '.service_locator.wNIwF8O', 'get_ServiceLocator_WNIwF8OService', true],
            'App\\Controller\\CategoryController:index' => ['privates', '.service_locator.zAmj.kw', 'get_ServiceLocator_ZAmj_KwService', true],
            'App\\Controller\\CategoryController:show' => ['privates', '.service_locator.wNIwF8O', 'get_ServiceLocator_WNIwF8OService', true],
            'App\\Controller\\ContactController:delete' => ['privates', '.service_locator.S6iF3Lw', 'get_ServiceLocator_S6iF3LwService', true],
            'App\\Controller\\ContactController:edit' => ['privates', '.service_locator.S6iF3Lw', 'get_ServiceLocator_S6iF3LwService', true],
            'App\\Controller\\ContactController:show' => ['privates', '.service_locator.S6iF3Lw', 'get_ServiceLocator_S6iF3LwService', true],
            'App\\Controller\\HomepageController:about' => ['privates', '.service_locator.0E7GJk9', 'get_ServiceLocator_0E7GJk9Service', true],
            'App\\Controller\\HomepageController:delete' => ['privates', '.service_locator.aZ0gdaJ', 'get_ServiceLocator_AZ0gdaJService', true],
            'App\\Controller\\HomepageController:edit' => ['privates', '.service_locator.aZ0gdaJ', 'get_ServiceLocator_AZ0gdaJService', true],
            'App\\Controller\\HomepageController:index' => ['privates', '.service_locator.0E7GJk9', 'get_ServiceLocator_0E7GJk9Service', true],
            'App\\Controller\\HomepageController:show' => ['privates', '.service_locator.0E7GJk9', 'get_ServiceLocator_0E7GJk9Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.aJomXdb', 'get_ServiceLocator_AJomXdbService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\AdminController::indexArticle' => '?',
            'App\\Controller\\AdminController::indexContact' => '?',
            'App\\Controller\\ArticleController::delete' => '?',
            'App\\Controller\\ArticleController::edit' => '?',
            'App\\Controller\\ArticleController::index' => '?',
            'App\\Controller\\ArticleController::show' => '?',
            'App\\Controller\\CategoryController::delete' => '?',
            'App\\Controller\\CategoryController::edit' => '?',
            'App\\Controller\\CategoryController::index' => '?',
            'App\\Controller\\CategoryController::show' => '?',
            'App\\Controller\\ContactController::delete' => '?',
            'App\\Controller\\ContactController::edit' => '?',
            'App\\Controller\\ContactController::show' => '?',
            'App\\Controller\\HomepageController::about' => '?',
            'App\\Controller\\HomepageController::delete' => '?',
            'App\\Controller\\HomepageController::edit' => '?',
            'App\\Controller\\HomepageController::index' => '?',
            'App\\Controller\\HomepageController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:indexArticle' => '?',
            'App\\Controller\\AdminController:indexContact' => '?',
            'App\\Controller\\ArticleController:delete' => '?',
            'App\\Controller\\ArticleController:edit' => '?',
            'App\\Controller\\ArticleController:index' => '?',
            'App\\Controller\\ArticleController:show' => '?',
            'App\\Controller\\CategoryController:delete' => '?',
            'App\\Controller\\CategoryController:edit' => '?',
            'App\\Controller\\CategoryController:index' => '?',
            'App\\Controller\\CategoryController:show' => '?',
            'App\\Controller\\ContactController:delete' => '?',
            'App\\Controller\\ContactController:edit' => '?',
            'App\\Controller\\ContactController:show' => '?',
            'App\\Controller\\HomepageController:about' => '?',
            'App\\Controller\\HomepageController:delete' => '?',
            'App\\Controller\\HomepageController:edit' => '?',
            'App\\Controller\\HomepageController:index' => '?',
            'App\\Controller\\HomepageController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
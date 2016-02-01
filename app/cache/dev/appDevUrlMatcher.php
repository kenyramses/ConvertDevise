<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // convert_devise_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'convert_devise_homepage')), array (  '_controller' => 'ConvertDeviseBundle:Default:index',));
        }

        // convert_devise_accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::indexAction',  '_route' => 'convert_devise_accueil',);
        }

        // convert_devise_admin_compte
        if ($pathinfo === '/compte') {
            return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::compteAction',  '_route' => 'convert_devise_admin_compte',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // convert_devise_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::adminAction',  '_route' => 'convert_devise_admin',);
            }

            // convert_devise_admin_add
            if ($pathinfo === '/admin/ajouter') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::ajouterAction',  '_route' => 'convert_devise_admin_add',);
            }

            // convert_devise_admin_get
            if ($pathinfo === '/admin/voir') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::voirAction',  '_route' => 'convert_devise_admin_get',);
            }

            // convert_devise_admin_etat
            if ($pathinfo === '/admin/etat') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::etatAction',  '_route' => 'convert_devise_admin_etat',);
            }

        }

        // convert_devise_convert
        if ($pathinfo === '/convert') {
            return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::historiqueAction',  '_route' => 'convert_devise_convert',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // convert_devise_admin_voirhistorique
            if ($pathinfo === '/admin/voirhistorique') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::voirhistoriqueAction',  '_route' => 'convert_devise_admin_voirhistorique',);
            }

            // convert_devise_admin_param
            if ($pathinfo === '/admin/param') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::paramAction',  '_route' => 'convert_devise_admin_param',);
            }

            // convert_devise_admin_courbe
            if ($pathinfo === '/admin/courbe') {
                return array (  '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::voircourbeAction',  '_route' => 'convert_devise_admin_courbe',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

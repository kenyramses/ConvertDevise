<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'convert_devise_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'ConvertDeviseBundle:Default:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convert_devise_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/accueil',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convert_devise_admin_compte' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::compteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/compte',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convert_devise_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convert_devise_admin_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convert_devise_admin_get' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/voir',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convert_devise_admin_etat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::etatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/etat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convert_devise_convert' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::historiqueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/convert',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convert_devise_admin_voirhistorique' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::voirhistoriqueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/voirhistorique',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convert_devise_admin_param' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::paramAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/param',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convert_devise_admin_courbe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::voircourbeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/courbe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convert_devise_admin_capecha' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::capechaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/capecha',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'convert_devise_admin_mail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Convert\\DeviseBundle\\Controller\\DeviseController::mailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/mail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

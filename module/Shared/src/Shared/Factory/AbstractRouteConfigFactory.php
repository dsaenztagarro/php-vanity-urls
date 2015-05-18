<?php
/**
 * <strong>Name : AbstractRouteConfigFactory</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5.22
 *
 * @category  PHP-ZF2-VANITY-URLS
 * @package   Shared\Factory
 * @author    David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright 2015 David Saenz Tagarro
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   Release: <0.1.0>
 * @link      http://www.hola.com
 * @since     Class available since Release 0.1.0
 **/

namespace Shared\Factory;

/**
 * Class AbstractRouteConfigFactory
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    Shared\Factory
 * @subpackage AbstractRouteConfigFactory
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
abstract class AbstractRouteConfigFactory
{
    protected $routePluginManager;

    /**
     * __construct
     *
     * @param mixed $routePluginManager The route plugin manager
     *
     * @access public
     * @return void
     */
    public function __construct($routePluginManager)
    {
        $this->routePluginManager = $routePluginManager;
    }

    /**
     * createRoute
     *
     * @param mixed $routeClass The concrete Route class
     * @param mixed $params     The defaults params of the route
     *
     * @access private
     * @return void
     */
    protected function createRoute($routeClass, $params)
    {
        $route = $routeClass::factory($params);
        $locator = $this->routePluginManager->getServiceLocator();
        $route->setServiceManager($locator);
        return $route;
    }
}

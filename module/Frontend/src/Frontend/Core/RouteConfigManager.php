<?php
/**
 * <strong>Name : RouteConfigManager</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5.22
 *
 * @category  PHP-ZF2-VANITY-URLS
 * @package   Frontend\Core
 * @author    David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright 2015 David Saenz Tagarro
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   Release: <0.1.0>
 * @link      http://www.hola.com
 * @since     Class available since Release 0.1.0
 **/

namespace Frontend\Core;

use Frontend\Factory\RouteConfigFactory;

/**
 * Class RouteConfigManager
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    Frontend\Core
 * @subpackage RouteConfigManager
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
class RouteConfigManager
{
    use \Shared\Helper\ArrayHelper;

    /**
     * Defines route config of module, adding new route types
     *
     * @access public
     * @return void
     */
    public function getConfig()
    {
        $factories = array();
        $routeTypes = $this->getRouteTypes();
        foreach ($routeTypes as $routeType) {
            $callable = function ($routePluginManager) use ($routeType) {
                $routeFactory = new RouteConfigFactory($routePluginManager);
                return $routeFactory->createRouteFor($routeType);
            };
            $factories[$routeType] = $callable;
        }
        return array('factories' => $factories);
    }

    /**
     * Returns an array of string with the names of the route types
     *
     * @access public
     * @return array
     */
    public function getRouteTypes()
    {
        $routeConfigClass = new \ReflectionClass($this->getRouteConfigClass());
        $methods = array_map(
            function ($method) {
                $routeRegex = '/^create(?P<routeName>.+)Route$/';
                preg_match($routeRegex, $method->getName(), $matches);
                return $matches ? lcfirst($matches[1]) . 'Route' : null;
            },
            $routeConfigClass->getMethods()
        );
        return $this->rejectNulls($methods);
    }

    /**
     * getRouteConfigClass
     *
     * @access public
     * @return void
     */
    public function getRouteConfigClass()
    {
        return \Frontend\Factory\RouteConfigFactory::class;
    }
}

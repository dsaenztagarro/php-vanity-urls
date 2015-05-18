<?php
/**
 * <strong>Name : Module</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5.22
 *
 * @category  PHP-ZF2-VANITY-URLS
 * @package   PHP-ZF2-VANITY-URLS
 * @author    David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright 2015 David Saenz Tagarro
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   Release: <0.1.0>
 * @link      http://www.hola.com
 * @since     Class available since Release 0.1.0
 **/

namespace Frontend;

use Zend\EventManager\EventInterface;
use Zend\ModuleManager\Feature\RouteProviderInterface;
use Frontend\Factory\RouteConfigFactory;

/**
 * Class Module
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    PHP-ZF2-VANITY-URLS
 * @subpackage Module
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
class Module implements RouteProviderInterface
{
    /**
     * getConfig(): defined by ConfigProviderInterface interface
     *
     * @access public
     * @return void
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * getRouteConfig(): defined by RouteProviderInterface interface
     *
     * @access public
     * @return void
     */
    public function getRouteConfig()
    {
        $routeConfigManager = new \Frontend\Core\RouteConfigManager();
        return $routeConfigManager->getConfig();
    }

    /**
     * getAutoloaderConfig
     *
     * @access public
     * @return void
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}

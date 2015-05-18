<?php

/**
 * <strong>Name : BaseRoute</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5.22
 *
 * @category  PHP-ZF2-VANITY-URLS
 * @package   Shared\Route
 * @author    David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright 2015 David Saenz Tagarro
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   Release: <0.1.0>
 * @link      http://www.hola.com
 * @since     Class available since Release 0.1.0
 **/

namespace Shared\Route;

use Zend\Mvc\Router\Http\RouteInterface;
use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\ServiceManagerAwareInterface;

/**
 * <strong>Name : BaseRoute</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5.22
 *
 * @category  PHP-ZF2-VANITY-URLS
 * @package   Shared\Route
 * @author    David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright 2015 David Saenz Tagarro
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   Release: <0.1.0>
 * @link      http://www.hola.com
 * @since     Class available since Release 0.1.0
 **/
abstract class BaseRoute implements RouteInterface, ServiceManagerAwareInterface
{
    use \Shared\Helper\RouteHelper;

    /**
     * The Zend\ServiceManager component
     *
     * @var mixed
     * @access protected
     */
    protected $serviceManager;

    protected $defaults;

    /**
     * getServiceManager
     *
     * @access public
     * @return void
     */
    public function getServiceManager()
    {
        return $this->serviceManager;
    }

    /**
     * setServiceManager
     *
     * @param ServiceManager $serviceManager The Zend\ServiceManager component
     *
     * @access public
     * @return void
     */
    public function setServiceManager(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;

        return $this;
    }

    /**
     * __construct
     *
     * @param array $defaults The default of the route
     *
     * @access public
     * @return void
     */
    public function __construct(array $defaults = array())
    {
        $this->defaults = $defaults;
    }

    /**
     * factory(): defined by RouteInterface interface.
     *
     * @param array $options The options
     *
     * @static
     * @access public
     * @return void
     */
    public static function factory($options = array())
    {
        if ($options instanceof Traversable) {
            $options = ArrayUtils::iteratorToArray($options);
        } elseif (!is_array($options)) {
            throw new Exception\InvalidArgumentException(
                __METHOD__ . ' expects an array or Traversable set of options'
            );
        }

        if (!isset($options['defaults'])) {
            $options['defaults'] = array();
        }

        return new static($options['defaults']);
    }

    /**
     * getAssembledParams(): defined by RouteInterface interface.
     *
     * @access public
     * @return void
     */
    public function getAssembledParams()
    {
        return array();
    }

    /**
     * assemble
     *
     * @param array $params  The parameters
     * @param array $options The options
     *
     * @access public
     * @return void
     */
    public function assemble(array $params = array(), array $options = array())
    {
        return $this->route;
    }
}

<?php
/**
 * <strong>Name : TagRoute</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5.22
 *
 * @category  PHP-ZF2-VANITY-URLS
 * @package   Frontend\Route
 * @author    David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright 2015 David Saenz Tagarro
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   Release: <0.1.0>
 * @link      http://www.hola.com
 * @since     Class available since Release 0.1.0
 **/

namespace Frontend\Route;

use Shared\Route\BaseRoute;
use Zend\Mvc\Router\Http\RouteMatch;
use Zend\Stdlib\RequestInterface;

/**
 * Class TagRoute
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    Frontend\Route
 * @subpackage TagRoute
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
class TagRoute extends BaseRoute
{
    /**
     * match(): defined by RouteInterface interface.
     *
     * @param RequestInterface $request The request
     *
     * @access public
     * @return void
     */
    public function match(RequestInterface $request)
    {
        $segments = $this->getSegments($request);

        if ($segments) {
            if ($segments[0] == 'tag1') {
                $params = $this->defaults;
                $params['tag_id'] = 'tag_id';
                return new RouteMatch($params);
            }
        }

        return null;
    }
}

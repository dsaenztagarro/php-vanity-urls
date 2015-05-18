<?php
/**
 * <strong>Name : SubsectionRoute</strong><br>
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
 * Class SubsectionRoute
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    Frontend\Route
 * @subpackage SubsectionRoute
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
class SubsectionRoute extends BaseRoute
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

        if (count($segments) == 2) {
            if ($segments[0] == 'cat1' && $segments[1] == 'cat2') {
                $params = $this->defaults;
                $params['section_id'] = 'section_id';
                $params['subsection_id'] = 'subsection_id';
                return new RouteMatch($params);
            }
        }

        return null;
    }
}

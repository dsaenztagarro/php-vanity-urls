<?php
/**
 * <strong>Name : SubsectionNewsRoute</strong><br>
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
 * Class SubsectionNewsRoute
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    Frontend\Route
 * @subpackage SubsectionNewsRoute
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
class SubsectionNewsRoute extends BaseRoute
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

        /* $slugs = $this->getSegmentsAs($request, $this->getSlugs()); */

        if (count($segments) == 3) {
            if ($segments[0] == 'cat1' && $segments[1] == 'cat2'
                && $segments[2] == 'news'
            ) {
                $params = $this->defaults;
                $params['section_id'] = 'section_id';
                $params['subsection_id'] = 'subsection_id';
                $params['news_id'] = 'news_id';
                return new RouteMatch($params);
            }
        }

        return null;
    }

    /**
     * undocumented function
     *
     * @return array
     */
    public function getSlugs()
    {
        return array("section_slug", "subsection_slug", "news_slug");
    }
}

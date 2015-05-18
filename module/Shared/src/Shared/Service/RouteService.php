<?php
/**
 * <strong>Name : RouteService</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5.22
 *
 * @category  PHP-ZF2-VANITY-URLS
 * @package   Shared\Service
 * @author    David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright 2015 David Saenz Tagarro
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   Release: <0.1.0>
 * @link      http://www.hola.com
 * @since     Class available since Release 0.1.0
 **/

namespace Shared\Service;

use Blog\Mapper\RouteMapperInterface;
use Blog\Model\RouteInterface;
use Blog\Service\RouteServiceInterface;

/**
 * Class RouteService
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    Shared\Service
 * @subpackage RouteService
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
class RouteService implements RouteServiceInterface
{
    /**
     * routeMapper
     *
     * @var mixed
     * @access protected
     */
    protected $routeMapper;

    /**
     * __construct
     *
     * @param RouteMapperInterface $routeMapper The route mapper
     *
     * @access public
     * @return void
     */
    public function __construct(RouteMapperInterface $routeMapper)
    {
        $this->routeMapper = $routeMapper;
    }

    /**
     * Finds category by category slug
     *
     * @param String $slug The slug of the category
     *
     * @access public
     * @return void
     */
    public function findSection($slug)
    {
        return $this->routeMapper->findSection($slug);
    }
}

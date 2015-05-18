<?php
/**
 * <strong>Name : RouteConfig</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5.22
 *
 * @category  PHP-ZF2-VANITY-URLS
 * @package   Frontend\Factory
 * @author    David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright 2015 David Saenz Tagarro
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   Release: <0.1.0>
 * @link      http://www.hola.com
 * @since     Class available since Release 0.1.0
 **/

namespace Frontend\Factory;

use Shared\Factory\AbstractRouteConfigFactory;

/**
 * Class RouteConfigFactory
 *
 * Responsible for matching controller actions with routes
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    Frontend\Factory
 * @subpackage RouteConfig
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
class RouteConfigFactory extends AbstractRouteConfigFactory
{
    /**
     * createRouteFor
     *
     * @param String $routeType The name of the route type
     *
     * @access public
     * @return void
     */
    public function createRouteFor($routeType)
    {
        return $this->{'create' . ucfirst($routeType)}();
    }

    /**
     * http://<HOST>/<SECTION_SLUG>/
     *
     * @access public
     * @return void
     */
    public function createSectionRoute()
    {
        $params = array('defaults' => array(
            'controller' => \Frontend\Controller\SectionsController::class,
            'action' => 'showSection'));
        return $this->createRoute(\Frontend\Route\SectionRoute::class, $params);
    }

    /**
     * http://<HOST>/<SECTION_SLUG>/<STORY_SLUG>/<TIMESTAMP>/
     * Where <TIMESTAMP> = YYYYMMDDID
     *
     * @access public
     * @return void
     */
    public function createSectionNewsRoute()
    {
        $params = array('defaults' => array(
            'controller' => \Frontend\Controller\NewsController::class,
            'action' => 'showSectionNews'));
        return $this->createRoute(\Frontend\Route\SectionNewsRoute::class, $params);
    }

    /**
     * http://<HOST>/<SECTION_SLUG>/<SUBSECTION_SLUG>/
     *
     * @access public
     * @return void
     */
    public function createSubsectionRoute()
    {
        $params = array('defaults' => array(
            'controller' => \Frontend\Controller\SectionsController::class,
            'action' => 'showSubsection'));
        return $this->createRoute(\Frontend\Route\SubsectionRoute::class, $params);
    }

    /**
     * http://<HOST>/<SECTION_SLUG>/<SUBSECTION_SLUG>/<STORY_SLUG>/<TIMESTAMP>/
     * Where <TIMESTAMP> = YYYYMMDDID
     *
     * @access public
     * @return void
     */
    public function createSubsectionNewsRoute()
    {
        $params = array('defaults' => array(
            'controller' => \Frontend\Controller\NewsController::class,
            'action' => 'showSubsectionNews'));
        return $this->createRoute(
            \Frontend\Route\SubsectionNewsRoute::class,
            $params
        );
    }

    /**
     * http://<HOST>/<TAG_SLUG>/
     *
     * @access public
     * @return void
     */
    public function createTagRoute()
    {
        $params = array('defaults' => array(
            'controller' => \Frontend\Controller\TagsController::class,
            'action' => 'show'));
        return $this->createRoute(\Frontend\Route\TagRoute::class, $params);
    }
}

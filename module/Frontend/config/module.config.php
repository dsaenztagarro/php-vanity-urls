<?php
/**
 * <strong>Name : module.config</strong><br>
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

return array(
    'controllers' => array(
        /*
        'factories' => array(
            'Frontend\Controller\Section' =>
                'Frontend\Factory\SectionControllerFactory',
            'Frontend\Controller\News' =>
                'Frontend\Factory\NewsControllerFactory',
        ),
        */
        'invokables' => array(
            Frontend\Controller\SectionsController::class =>
                Frontend\Controller\SectionsController::class,
            Frontend\Controller\NewsController::class =>
                Frontend\Controller\NewsController::class,
            Frontend\Controller\TagsController::class =>
                Frontend\Controller\TagsController::class,
        ),
    ),

    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/home',
                    'defaults' => array(
                        'controller' =>
                            Frontend\Controller\SectionsController::class,
                        'action'     => 'index',
                    ),
                ),
            ),
            'section' => array(
                'type' => 'sectionRoute'
            ),
            'section-news' => array(
                'type' => 'sectionNewsRoute'
            ),
            'subsection' => array(
                'type' => 'subsectionRoute'
            ),
            'subsection-news' => array(
                'type' => 'subsectionNewsRoute'
            ),
            'tag' => array(
                'type' => 'tagRoute'
            ),
        )
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'thing' => __DIR__ . '/../view',
        ),
    ),
);
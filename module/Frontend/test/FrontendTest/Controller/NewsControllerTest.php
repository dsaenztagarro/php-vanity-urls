<?php
/**
 * <strong>Name : NewsControllerTest</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5.22
 *
 * @category  PHP-ZF2-VANITY-URLS
 * @package   FrontendTest\Controller
 * @author    David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright 2015 David Saenz Tagarro
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   Release: <0.1.0>
 * @link      http://www.hola.com
 * @since     Class available since Release 0.1.0
 **/

namespace FrontendTest\Controller;

use Shared\Test\BaseControllerTest;

/**
 * Class NewsControllerTest
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    FrontendTest\Controller
 * @subpackage NewsControllerTest
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
class NewsControllerTest extends BaseControllerTest
{
    /**
     * testShowSectionNewsAction
     *
     * @access public
     * @return void
     */
    public function testShowSectionNewsAction()
    {
        $this->dispatch('/cat1/news');
        $this->assertResponseStatusCode(200);

        $this->assertModuleName('Frontend');
        $this->assertControllerName('Frontend\Controller\NewsController');
        $this->assertControllerClass('NewsController');
        $this->assertMatchedRouteName('section-news');
    }

    /**
     * testShowSubsectionNewsAction
     *
     * @access public
     * @return void
     */
    public function testShowSubsectionNewsAction()
    {
        $this->dispatch('/cat1/cat2/news');
        $this->assertResponseStatusCode(200);

        $this->assertModuleName('Frontend');
        $this->assertControllerName('Frontend\Controller\NewsController');
        $this->assertControllerClass('NewsController');
        $this->assertMatchedRouteName('subsection-news');
    }
}

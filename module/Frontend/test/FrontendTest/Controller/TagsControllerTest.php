<?php
/**
 * <strong>Name : TagsControllerTest</strong><br>
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
 * Class TagsControllerTest
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    FrontendTest\Controller
 * @subpackage TagsControllerTest
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
class TagsControllerTest extends BaseControllerTest
{
    /**
     * testShowSectionAction
     *
     * @access public
     * @return void
     */
    public function testShowSectionAction()
    {
        $this->dispatch('/tag1');
        $this->assertResponseStatusCode(200);

        $this->assertModuleName('Frontend');
        $this->assertControllerName('Frontend\Controller\TagsController');
        $this->assertControllerClass('TagsController');
        $this->assertMatchedRouteName('tag');
    }
}

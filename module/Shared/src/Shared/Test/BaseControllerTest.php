<?php
/**
 * <strong>Name : BaseControllerTest</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5.22
 *
 * @category  PHP-ZF2-VANITY-URLS
 * @package   Shared\Test
 * @author    David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright 2015 David Saenz Tagarro
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   Release: <0.1.0>
 * @link      http://www.hola.com
 * @since     Class available since Release 0.1.0
 **/

namespace Shared\Test;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

/**
 * Class BaseControllerTest
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    Shared\Test
 * @subpackage BaseControllerTest
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
class BaseControllerTest extends AbstractHttpControllerTestCase
{
    /**
     * setUp
     *
     * @access public
     * @return void
     */
    public function setUp()
    {
        $this->setApplicationConfig(
            include __DIR__ . '/../../../../../config/application.config.php'
        );
        parent::setUp();
    }
}

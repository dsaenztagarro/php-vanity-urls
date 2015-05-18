<?php
/**
 * <strong>Name : ArrayHelperTest</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5.22
 *
 * @category  PHP-ZF2-VANITY-URLS
 * @package   SharedTest\Helper
 * @author    David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright 2015 David Saenz Tagarro
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   Release: <0.1.0>
 * @link      http://www.hola.com
 * @since     Class available since Release 0.1.0
 **/

namespace SharedTest\Helper;

/**
 * Dummy class for testing ArrayHelper trait
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    SharedTest\Helper
 * @subpackage ArrayHelperTest
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
class ArrayHelperDummyClass
{
    use \Shared\Helper\ArrayHelper;
}

/**
 * Class ArrayHelperTest
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    SharedTest\Helper
 * @subpackage ArrayHelperTest
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
class ArrayHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var object
     */
    protected $traitObject;

    /**
     * Sets up the fixture.
     *
     * @return void
     */
    public function setUp()
    {
        $this->traitObject = new ArrayHelperDummyClass;
    }

    /**
     * testRejectNulls
     *
     * @access public
     * @return void
     * @covers Shared\Helper\ArrayHelper\testReject
     * @test
     */
    public function testRejectNulls()
    {
        $expected = ["1", "2"];
        $actual = $this->traitObject->rejectNulls(["1", null, "2", null]);
        $this->assertEquals($expected, $actual);
    }

    /**
     * testRejectBlanks
     *
     * @access public
     * @return void
     * @covers Shared\Helper\ArrayHelper\testReject
     * @test
     */
    public function testRejectBlanks()
    {
        $expected = ["Test", "Dummy"];
        $actual = $this->traitObject->rejectBlanks(["Test", "", "Dummy", ""]);
        $this->assertEquals($expected, $actual);
    }
}

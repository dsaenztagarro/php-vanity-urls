<?php
/**
 * <strong>Name : ArrayHelper</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5.22
 *
 * @category  PHP-ZF2-VANITY-URLS
 * @package   Shared\Helper
 * @author    David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright 2015 David Saenz Tagarro
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   Release: <0.1.0>
 * @link      http://www.hola.com
 * @since     Class available since Release 0.1.0
 **/

namespace Shared\Helper;

/**
 * Class ArrayHelper
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    Shared\Helper
 * @subpackage ArrayHelper
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
trait ArrayHelper
{
    /**
     * Returns a reindexed array with all null elements removed
     *
     * @param mixed $list The array list
     *
     * @access public
     * @return void
     */
    public function rejectNulls($list)
    {
        $callback = function ($element) {
            return !is_null($element);
        };
        return array_values(array_filter($list, $callback));
    }

    /**
     * Returns a reindexed array with all empty elements removed
     *
     * @param mixed $list The array list
     *
     * @access public
     * @return void
     */
    public function rejectBlanks($list)
    {
        $callback = function ($element) {
            return $element !== '';
        };
        return array_values(array_filter($list, $callback));
    }
}

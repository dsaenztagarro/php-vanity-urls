<?php
/**
 * <strong>Name : RouteServiceInterface</strong><br>
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

use Shared\Model\SectionInterface;

/**
 * Interface RouteServiceInterface
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    Shared\Service
 * @subpackage RouteServiceInterface
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
interface RouteServiceInterface
{
    /**
     * Should return a single section
     *
     * @param String $slug The slug of the section
     *
     * @return SectionInterface
     */
    public function findSection($slug);
}

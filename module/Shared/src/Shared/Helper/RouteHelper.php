<?php
/**
 * <strong>Name : RouteHelper</strong><br>
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

use Zend\Stdlib\RequestInterface;

trait RouteHelper
{
    use \Shared\Helper\ArrayHelper;

    /**
     * getSegments
     *
     * @param RequestInterface $request The request
     *
     * @access public
     * @return void
     */
    public function getSegments(RequestInterface $request)
    {
        $url = $request->getRequestUri();
        $segments = explode('/', $url);
        return $this->rejectBlanks($segments);
    }
}

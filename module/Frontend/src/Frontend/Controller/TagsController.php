<?php
/**
 * <strong>Name : TagsController</strong><br>
 * <strong>Desc :  </strong><br>
 *
 * PHP version 5.5.22
 *
 * @category  PHP-ZF2-VANITY-URLS
 * @package   Frontend\Controller
 * @author    David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright 2015 David Saenz Tagarro
 * @license   Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version   Release: <0.1.0>
 * @link      http://www.hola.com
 * @since     Class available since Release 0.1.0
 **/

namespace Frontend\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class TagsController
 *
 * @category   PHP-ZF2-VANITY-URLS
 * @package    Frontend\Controller
 * @subpackage TagsController
 * @author     David Saenz Tagarro <david.saenz.tagarro@gmail.com>
 * @copyright  2015 David Saenz Tagarro
 * @license    Apache 2 License http://www.apache.org/licenses/LICENSE-2.0.html
 * @version    Release: <0.1.0>
 * @link       http://www.hola.com
 * @since      Class available since Release 0.1.0
 **/
class TagsController extends AbstractActionController
{

    /**
     * showAction
     *
     * @access public
     * @return void
     */
    public function showAction()
    {
        return new ViewModel();
    }
}


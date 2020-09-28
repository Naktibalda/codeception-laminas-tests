<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class FormController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function postAction()
    {
        return new ViewModel(
            [
                'param1' => $this->params()->fromPost('param1'),
                'param2' => $this->params()->fromPost('param2'),
            ]
        );
    }
}

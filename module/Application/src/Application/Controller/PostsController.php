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

class PostsController extends AbstractActionController
{
    public function createAction()
    {
        return new ViewModel();
    }

    public function showAction()
    {
        return new ViewModel(
            [
                'id' => $this->params()->fromRoute('id'),
            ]
        );
    }
}

<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class RestController extends AbstractActionController
{
    public function indexAction()
    {
        $request = $this->getServiceLocator()->get('Request');
    
        $data = array(
            'requestMethod' => $request->getMethod(),
            'requestUri' => $request->getRequestUri(),
            'queryParams' => $request->getQuery(),
            'formParams' => $request->getPost(),
            'rawBody' => $request->getContent(),
            'headers' => $request->getHeaders(),
        );
        return new JsonModel($data);
    }
}
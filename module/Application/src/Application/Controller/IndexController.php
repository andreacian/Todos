<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Todos\Service\TodosService;

class IndexController extends AbstractActionController
{

    private $todosService;

    public function __construct(TodosService $todosService) {
        $this->todosService = $todosService;
    }

    public function indexAction()
    {
        return new ViewModel([
            'listaTodos' => $this->todosService->getListaTodos()
        ]);
    }
}

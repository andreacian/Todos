<?php

namespace Todos\Controller;

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
            'lista' => $this->todosService->getListaTodos()
        ]);
    }

    public function todoAction()
    {
        $todo = $this->todosService->getTodo($this->params()->fromRoute('cliente'));
        return new ViewModel([
            'todo' => $todo
        ]);
    }
}

<?php
namespace Todos\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {

        $todosService = $serviceLocator->getServiceLocator()->get('Todos\Service\TodosService');

        return new IndexController($todosService);

    }


}

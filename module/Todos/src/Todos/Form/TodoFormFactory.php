<?php

namespace Todos\Form;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class TodoFormFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return DriverLicenseForm
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $todosService = $serviceLocator->get('Todos\Service\TodosService');

      //  $inputFilter = new ProdottoInputFilter();
        $form = new TodoForm();

      //  $form->setInputFilter($inputFilter);

        return $form;
    }
}

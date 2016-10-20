<?php

namespace Todos\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Todos\Service\TodosService;
use Todos\Form\TodoForm;


class IndexController extends AbstractActionController
{
    private $form;
    private $todosService;

    public function __construct(TodosService $todosService, TodoForm $todoForm) {
        $this->todosService = $todosService;
        $this->form = $todoForm;
    }

    public function indexAction()
    {
        return new ViewModel([
            'lista' => $this->todosService->getListaTodos()
        ]);
    }

    public function todoAction()
    {
        $todo = $this->todosService->getTodoId($this->params()->fromRoute('id'));
        return new ViewModel([
            'todo' => $todo
        ]);
    }

    public function eliminaAction()
    {
      $todo = $this->todosService->getTodoId($this->params()->fromRoute('id'));
      $this->todosService->elimina($todo);

      $this->redirect()->toRoute('todos');
    }

    public function nuovoAction()
  {
      if ($this->getRequest()->isPost()) {
          $request = $this->getRequest();

          // merge dati che arrivano dalla form
          $postData = array_merge_recursive(
              $request->getPost()->toArray()
            //  $request->getFiles()->toArray()
          );

          $this->form->setData($postData);

// FOR VALIDATION IF INPUT FILTER EXIST
          if ($this->form->isValid()) {

             $todo = $this->todosService->creaNuovoTodo($postData);

              // salvataggio del file nella posizione finale
            //  if (!empty($postData['immagine'])) {
              //    move_uploaded_file($postData['immagine']['tmp_name'], __DIR__ . '/../../../../../public/prodotti/' . $prodotto->getCodice() . '.jpg');
              // }

              $this->redirect()->toRoute('todos');

          }
      }

      return new ViewModel([
          'form' => $this->form,
          'lista' => $this->todosService->getListaTodos()

      ]);
  }

  public function modificaAction()
  {
    $todo = $this->todosService->getTodoId($this->params()->fromRoute('id'));

  $this->form->setDatiTodo($todo);

  if ($this->getRequest()->isPost()) {
      $request = $this->getRequest();

      // merge dati che arrivano dalla form
      $postData = array_merge_recursive(
          $request->getPost()->toArray()
        //  $request->getFiles()->toArray()
      );

      $this->form->setData($postData);

      if ($this->form->isValid()) {

          $this->todosService->aggiornaTodo($todo, $postData);

          // salvataggio del file nella posizione finale
      /*    if (!empty($postData['immagine'])) {
              move_uploaded_file($postData['immagine']['tmp_name'], __DIR__ . '/../../../../../public/prodotti/' . $prodotto->getCodice() . '.jpg');
          } */

          $this->redirect()->toRoute('todos');

      }
  }

  return new ViewModel([
      'form' => $this->form
  ]);

    }


}

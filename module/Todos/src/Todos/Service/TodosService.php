<?php
namespace Todos\Service;

use Todos\Entity\Todo;

class TodosService {

    private $entityManager;
    private $todosRepository;
  //  private $categorieRepository;

    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
        $this->todosRepository = $entityManager->getRepository('Todos\Entity\Todo');
      //  $this->categorieRepository = $entityManager->getRepository('Prodotti\Entity\Categoria');
    }

/*
    public function getTodosInEvidenza() {
        return $this->todosRepository->findAll();
    }

*/
    public function getTodoId($id) {
        return $this->todosRepository->find($id);
    }


    public function getListaTodos() {
        return $this->todosRepository->findAll();
    }


    public function creaNuovoTodo(array $dati) {
        $todo = new Todo(
            $dati['datacreazione'],
            $dati['cliente'],
            $dati['lavoro'],
            $dati['dataconsegna'],
            $dati['mail'],
            $dati['telefono'],
            $dati['oraconsegna'],
            $dati['referente'],
            $dati['note']

          //  $this->entityManager->getReference('\Prodotti\Entity\Categoria', $dati['categoria'])
        );

        $this->entityManager->persist($todo);
        $this->entityManager->flush();

        return $todo;
    }


    public function aggiornaTodo(Todo $todo, array $dati) {
          $todo->setDatacreazione($dati['datacreazione']);
          $todo->setCliente($dati['cliente']);
          $todo->setLavoro($dati['lavoro']);
          $todo->setDataconsegna($dati['dataconsegna']);
          $todo->setMail($dati['mail']);
          $todo->setTelefono($dati['telefono']);
          $todo->setOraconsegna($dati['oraconsegna']);
          $todo->setReferente($dati['referente']);
          $todo->setNote($dati['note']);

          $this->entityManager->persist($todo);
          $this->entityManager->flush();
      }


    public function elimina(Todo $todo) {
        $this->entityManager->remove($todo);
        $this->entityManager->flush();
    }

}

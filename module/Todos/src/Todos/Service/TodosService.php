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
    public function getTodo($cliente) {
        return $this->todosRepository->findOneByCliente($cliente);
    }

    public function getListaTodos() {
        return $this->todosRepository->findAll();
    }

  /*
  public function getListaCategorie() {
        return $this->categorieRepository->findAll();
    }

    public function getArrayCategorie() {
        $categorie = [];
        foreach($this->getListaCategorie() as $categoria) {
            $categorie[$categoria->getId()] = $categoria->getNome();
        }

        return $categorie;
    }
    */

    public function creaNuovoTodo(array $dati) {
        $todo = new Todo(
            $dati['datacreazione'],
            $dati['cliente'],
            $dati['lavoro'],
            $dati['dataconsegna'],
            $dati['mail'],
            $dati['telefono'],
            $dati['priorita'],
            $dati['referente'],
            $dati['note']

          //  $this->entityManager->getReference('\Prodotti\Entity\Categoria', $dati['categoria'])
        );

        $this->entityManager->persist($todo);
        $this->entityManager->flush();

        return $todo;
    }

    public function elimina(Todo $todo) {
        $this->entityManager->remove($todo);
        $this->entityManager->flush();
    }

}

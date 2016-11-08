<?php

namespace Todos\Entity\Repository;

/**
 * TodosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TodosRepository extends \Doctrine\ORM\EntityRepository
{
  public function findAll()
    {
        return $this->findBy(array(), array('dataconsegna' => 'ASC'));
    }
}

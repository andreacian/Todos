<?php

namespace Todos\Form;

use Zend\Form\Form;
use Todos\Entity\Todo;

class TodoForm extends Form
{
    public function __construct()
    {
        parent::__construct('todo');
        $this->setAttribute('method', 'post');

        $this->add([
            'name'       => 'datacreazione',
            'type'       => 'Zend\Form\Element\Date',
            'options' => array(
                 'label' => 'Data creazione',
                 'format' => 'd-m-Y',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'datacreazione',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'cliente',
            'type'       => 'Zend\Form\Element\Text',
            'options' => array(
                 'label' => 'Cliente',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'cliente',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'lavoro',
            'type'       => 'Zend\Form\Element\Textarea',
            'options' => array(
                 'label' => 'Lavoro',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'lavoro',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'dataconsegna',
            'type'       => 'Zend\Form\Element\Date',
            'options' => array(
                 'label' => 'Data consegna',
                 'format' => 'd-m-Y',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'dataconsegna',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'mail',
            'type'       => 'Zend\Form\Element\Email',
            'options' => array(
                 'label' => 'Mail',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'mail',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'telefono',
            'type'       => 'Zend\Form\Element\Text',
            'options' => array(
                 'label' => 'Telefono',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'telefono',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'oraconsegna',
            'type'       => 'Zend\Form\Element\Time',
            'options' => array(
                 'label' => 'Ora di consegna',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => array(
                'id'       => 'oraconsegna',
                'class'    => 'form-control',

            )
        ]);

        $this->add([
            'name'       => 'referente',
            'type'       => 'Zend\Form\Element\Text',
            'options' => array(
                 'label' => 'Referente',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'referente',
                'class'    => 'form-control'
            ]
        ]);

        $this->add([
            'name'       => 'note',
            'type'       => 'Zend\Form\Element\Textarea',
            'options' => array(
                 'label' => 'Note',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => [
                'id'       => 'note',
                'class'    => 'form-control'
            ]
        ]);
    }

    public function setDatiTodo(Todo $todo)
      {
          $this->get('datacreazione')->setValue($todo->getDatacreazione());
          $this->get('cliente')->setValue($todo->getCliente());
          $this->get('lavoro')->setValue($todo->getLavoro());
          $this->get('dataconsegna')->setValue($todo->getDataconsegna());
          $this->get('mail')->setValue($todo->getMail());
          $this->get('telefono')->setValue($todo->getTelefono());
          $this->get('oraconsegna')->setValue($todo->getOraconsegna());
          $this->get('referente')->setValue($todo->getReferente());
          $this->get('note')->setValue($todo->getNote());

      }

}

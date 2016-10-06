<?php

namespace Todos\Form;

use Zend\Form\Form;

class TodoForm extends Form
{
    public function __construct()
    {
        parent::__construct('todo');
        $this->setAttribute('method', 'post');

        $this->add([
            'name'       => 'datacreazione',
            'type'       => 'Zend\Form\Element\DateTime',
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
            'type'       => 'Zend\Form\Element\DateTime',
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
            'name'       => 'priorita',
            'type'       => 'Zend\Form\Element\Range',
            'options' => array(
                 'label' => 'Priorità',
                 'label_attributes' => array(
                     'class' => 'control-label',
                 ),
            ),
            'attributes' => array(
                'id'       => 'priorita',
                'class'    => 'form-control',
                'min' => 0, // default minimum is 0
                'max' => 100, // default maximum is 100
                'step' => 1 // default interval is 1
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

}

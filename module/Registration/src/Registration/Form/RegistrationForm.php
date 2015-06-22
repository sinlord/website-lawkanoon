<?php
 namespace Registration\Form;

 use Zend\Form\Form;

 Class RegistrationForm extends Form{
     Public function __construct ($name = null){
         // ignoring the name passed

         parent::__construct('registration');

         $this -> add ( array(
             'name' => 'id',
             'type' => 'Hidden',
         ));

          $this-> add(array(
            'name'    => 'firstName',
            'type'    => 'Text',
            'options' => array(
                      'label' => 'firstName',
		     ),
         ));

         $this-> add(array(
             'name'    => 'lastName',
             'type'    => 'Text',
             'options' => array(
                 'label' => 'lastName',
             ),
         ));
         $this-> add(array(
             'name'    => 'email',
             'type'    => 'Text',
             'options' => array(
                 'label' => 'email',
             ),
         ));
         $this-> add(array(
             'name'    => 'phone',
             'type'    => 'Text',
             'options' => array(
                 'label' => 'phone',
             ),
         ));
         $this-> add(array(
             'name'    => 'zip',
             'type'    => 'Text',
             'options' => array(
                 'label' => 'zip',
             ),
         ));
         $this-> add(array(
             'name'    => 'address',
             'type'    => 'Text',
             'options' => array(
                 'label' => 'address',
             ),
         ));
         $this-> add(array(
             'name'    => 'message',
             'type'    => 'Text',
             'options' => array(
                 'label' => 'message',
             ),
         ));

         //submit and reset buttons

         $this-> add(array(
             'name'    => 'submit',
             'type'    => 'Submit',
             'options' => array(
                 'value' => 'GO',
                 'id' => 'submit',
             ),
         ));
         $this-> add(array(
             'name'    => 'reset',
             'type'    => 'Reset',
             'options' => array(
                 'value' => 'ReseT',
                 'id'    => 'reset',
             ),
         ));
     }

 }
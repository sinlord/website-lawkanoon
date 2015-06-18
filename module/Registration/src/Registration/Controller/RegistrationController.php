<?php

namespace Registration\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Doctrine\ORM\EntityManager;
use \Registration\Entity\User;

Class RegistrationController extends AbstractActionController
{
    //CRUD application

    //Retreive
    Public function indexAction(){
        $objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

        $user = new User();
        $user->setFirstName('Abhinav');
        $user->setLastName('Verma');

        $objectManager->persist($user);
        $objectManager->flush();

//        die(var_dump($user->getId()));

        return new ViewModel();
    }
    //Create
    Public function createAction(){
        return new ViewModel();
    }
    //Update
    Public function updateAction(){
        return new ViewModel();
    }
    //Delete
    Public function deleteAction(){
        return new ViewModel();
    }

}

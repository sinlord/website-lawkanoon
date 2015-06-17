<?php
/**
 * Created by PhpStorm.
 * User: ABHI
 * Date: 15/06/15
 * Time: 3:14 PM
 */
namespace Registration\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM\EntityManager;


Class RegistrationController extends AbstractActionController
{
    //CRUD application

    //Retreive
    Public function indexAction(){
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

<?php

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

    /**
     * @var DoctrineORMEntityManager
     */
    protected $em;

    public function getEntityManager()
    {
        if (null === $this->em) {
            $this->em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
        }
        return $this->em;
    }
}

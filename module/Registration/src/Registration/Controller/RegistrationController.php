<?php

namespace Registration\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Doctrine\ORM\EntityManager;
use \Registration\Entity\User;
use Registration\Form\RegistrationForm;
use Zend\Http\Request;


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

        $form = new RegistrationForm();
        $form ->get('submit')->setValue('Create');

      //  /* @var $request Zend_Controller_Request_Http */

        $request = $this->getRequest();

        if ($request->isPost()) {       // we can also try $this->getRequest()->getMethod() == 'POST' OR $this->getRequest()->isPost()
            $objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

            $user = new User();
            // This is used when we have defined Input filters in the User.php entity Class
            $form->setInputFilter($user->getInputFilter());
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $user->exchangeArray($form->getData());
                $objectManager->persist($user);
                $objectManager->flush();

                // Redirect to list of albums
                return $this->redirect()->toRoute('registration');
            }
        }
        return array('form' => $form);

 //       return new ViewModel();
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

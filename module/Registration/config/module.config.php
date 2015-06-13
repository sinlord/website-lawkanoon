<?php
/**
 * Created by PhpStorm.
 * User: ABHI
 * Date: 13/06/15
 * Time: 9:38 PM
 */
return array(
    'controllers' => array(
        'invokables' => array(
            'Registration\Controller\Registration' =>'Registration\Controller\RegistrationController',
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'registration' => __DIR__ . '/../view',
        ),
    ),
);
<?php
namespace Registration;

return array(
    'controllers' => array(
        'invokables' => array(
            //module\Controller\Controller's Name => Module\'Controller\Controller's Name' + 'Controller' this is the convention!!
            'Registration\Controller\Registration' => 'Registration\Controller\RegistrationController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'registration' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/[:controller[/:action[/:id]]]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'         => '[0 - 9]+',
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Registration\Controller',
                        'controller'    => 'Registration',
                        'action'        => 'delete',
                    ),

                ),
               'may_terminate' => true,
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
        'Registration' => __DIR__ .'/../view',
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver'  => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array('/usr/local/zend/apache2/htdocs/website-lawkanoon/module/Registration/src/Registration/Entity'),
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver',
                )
            )
        )
    ),
);
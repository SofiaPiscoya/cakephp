<?php
namespace App\Controller;

abstract class AuthController extends AppController{
    
    public function initialize() {
        parent::initialize();
        
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'userModel' => 'Usuarios',
                    'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                    ],
                    'passwordHasher' => [
                        'className' => 'Plain'
                    ]
                ]
            ],
            'loginAction' => [		// Formulario login
                'controller' => 'Usuarios',
                'action' => 'login'
            ], 
            'loginRedirect' => [		// Destino luego del login 
                'controller' => 'Home',
                'action' => 'index'
            ],
            'logoutRedirect' => [	// Destino luego del logout
                'controller' => 'Usuarios',
                'action' => 'login'
            ],
            'authError' => 'No tienes permiso de acceder',	// Acceso no autorizado
        ]);
    }

    
}

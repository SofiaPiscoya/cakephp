<?php
namespace App\Controller;

class HomeController extends AuthController{
    
    public function index() {
        $usuario = $this->Auth->user();
        $this->set('usuario', $usuario);
    }
    
}

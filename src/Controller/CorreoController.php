<?php

namespace App\Controller;

use \Cake\Mailer\Email;

class CorreoController extends AuthController{
    public function index() {
        
    $email = new Email('default');
    $email->from(['noreply@tecsup.edu.pe' => 'Tienda Online'])
      ->to('sofiapiscoya@gmail.com')
      ->subject('Contacto desde Tienda Online')
      ->send('Contenido del correo...');  // $this->request->data['texto']
      
      $this->Flash->success('Correo enviado satisfactoriamente');
      return $this->redirect(['controller'=>'hombre', 'action'=>'index']);
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsuariosTable extends Table{
    
    public function initialize(array $config) {
        $this->table('usuarios');
        $this->primaryKey('id');
        $this->entityClass('App\Model\Entity\Usuario');
        
        $this->belongsTo('Roles', [
            'className' => 'Roles',
            'foreignKey' => 'roles_id',
            'propertyName' => 'rol'
        ]);
        
    }
    
    public function validationDefault(Validator $validator) {
        $validator ->notEmpty('username','Nombre de usuario obligatorio')
                ->minLength('username',8,'Longitud minima 8 caracteres')
                ->email('email', false, 'Correo invalido')
                ->notEmpty('password', 'Clave obligatoria')
                ->notBlank('role', 'Rol obligatorio');
        
        return $validator;
    }
}

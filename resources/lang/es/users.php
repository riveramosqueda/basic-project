<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Users Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in users sections
    |
    */

    'index' => [
        'title'=>'Usuarios',
        'create_new_user'=>'Crear nuevo usuario',
        'name'=>'Nombre',
        'email'=>'Email',
        'status'=>'Estatus',
        'actions'=>'Acciones',
        'active'=>'Activo',
        'inactive'=>'Inactivo',
        'edit'=>'Editar',
        'delete'=>'Eliminar',
    ],
    'create' => [
        'title'=>'Crear nuevo usuario',
        'name'=>'Nombre',
        'email'=>'Email',
        'store'=>'Guardar',
        'validations'=>[
            'name_required'=>'El campo Nombre es requerido',
            'name_max'=>'Los caracteres en el campo Nombre deben ser menos de 255',
            'email_required'=>'El campo Email es requerido',
            'email_unique'=>'El campo Email debe ser único',
            'email_max'=>'Los caracteres en el campo Email deben ser menos de 255',
        ],
        'stored'=>'Usuario creado exitosamente',
    ],
    'edit' => [
        'title'=>'Editar usuario',
        'name'=>'Nombre',
        'email'=>'Email',
        'new_password'=>'Nueva Contraseña',
        'active'=>'Activo',
        'inactive'=>'Inactivo',
        'update'=>'Actualizar',
        'validations'=>[
            'name_required'=>'El campo Nombre es requerido',
            'name_max'=>'Los caracteres en el campo Nombre deben ser menos de 255',
            'email_required'=>'El campo Email es requerido',
            'email_unique'=>'El campo Email debe ser único',
            'email_max'=>'Los caracteres en el campo Email deben ser menos de 255',
        ],
        'updated'=>'Usuario actualizado exitosamente',
    ],
    'delete' => [
        'confirm'=>'¿Está seguro que desea eliminar este usuario? La acción no se puede deshacer',
        'deleted'=>'Usuario eliminado exitosamente',
    ],

];

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
        'title'=>'Users',
        'create_new_user'=>'Create new user',
        'name'=>'Name',
        'email'=>'Email',
        'status'=>'Status',
        'actions'=>'Actions',
        'active'=>'Active',
        'inactive'=>'Inactive',
        'edit'=>'Edit',
        'delete'=>'Delete',
    ],
    'create' => [
        'title'=>'Create new user',
        'name'=>'Name',
        'email'=>'Email',
        'store'=>'Save',
        'validations'=>[
            'name_required'=>'Name field is required',
            'name_max'=>'Caracters in Name field must be below 255',
            'email_required'=>'Email field is required',
            'email_unique'=>'Email field must be unique',
            'email_max'=>'Caracters in Email field must be below 255',
        ],
        'stored'=>'User created successfully',
    ],
    'edit' => [
        'title'=>'Edit user',
        'name'=>'Name',
        'email'=>'Email',
        'new_password'=>'New Password',
        'active'=>'Active',
        'inactive'=>'Inactive',
        'update'=>'Update',
        'validations'=>[
            'name_required'=>'Name field is required',
            'name_max'=>'Caracters in Name field must be below 255',
            'email_required'=>'Email field is required',
            'email_unique'=>'Email field must be unique',
            'email_max'=>'Caracters in Email field must be below 255',
        ],
        'updated'=>'User updated successfully',
    ],
    'delete' => [
        'confirm'=>'Are you sure you want to delete user? This action cannot be undone',
        'deleted'=>'User deleted successfully',
    ],

];

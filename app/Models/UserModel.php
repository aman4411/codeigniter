<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['name','email', 'password'];
    protected $returnType = 'App\Entities\User';  //link model with entity
    protected $beforeInsert = ["hashPassword"];
    protected $validationRules = [
        'name' => 'required',
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[6]',
        'confirmPassword' => 'required|matches[password]'
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique' => 'An account with this email already exists.'
        ],
        'confirmPassword' => [
            'matches' => 'Password does not match.'
        ]
        ];

    protected function hashPassword($data){
        if(isset($data['data']['password'])){
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}

?>
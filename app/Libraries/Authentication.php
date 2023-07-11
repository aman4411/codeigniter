<?php 

namespace App\Libraries;

use App\Models\UserModel;

class Authentication{

    private $userModel;
    private $user;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login($email, $password){
        $user = $this->userModel->where('email', $email)->first();
        if($user == null || !password_verify($password, $user->password)){
            return false;
        }else {
             //login success
            $session = session();
            $session->regenerate();
            $session->set('userId', $user->id);
            return true;
        }
    }

    public function logout(){
        session()->destroy();
    }

    public function isLoggedIn(){
        return session()->has('userId');
    }

    public function getCurrentUser(){
        if(!$this->isLoggedIn()){
            return null;
        }
        if($this->user == null){
            $this->user = $this->userModel->find(session()->get('userId'));
        }
        return $this->user;
    }
}

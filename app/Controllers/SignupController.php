<?php

namespace App\Controllers;

use App\Entities\User;
use App\Models\UserModel;

class SignupController extends BaseController {

    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }
   
    public function new(){
        return view("/Signup/new");
    }

    public function create(){
        $user = new User($this->request->getPost());
        if( $this->userModel->insert($user)){
            return redirect()->to("signup/success");
        }else{
            return redirect()->back()->with('errors', $this->userModel->errors())->withInput();
        }
    }

    public function success(){
        return view("Signup/success");
    }
}
?>
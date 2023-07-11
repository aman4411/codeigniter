<?php 

namespace App\Controllers;

use App\Libraries\Authentication;
use App\Models\UserModel;
use Config\Services;

class LoginController extends BaseController{

    public function new(){
        return view('Login/new');
    }

    public function account(){
        $email = $this->request->getPost('email');
        $password = strval($this->request->getPost('password'));
        $auth = Services::auth();
        if($auth->login($email, $password)){
            return  redirect()->to("/home");
        }else{
            return  redirect()->back()->withInput()
            ->with('errors',['Invalid Login']);
        }
        
    }

    public function logout(){
        $auth = Services::auth();
        $auth->logout();
        return redirect()->to('/home');
    }
}
?>
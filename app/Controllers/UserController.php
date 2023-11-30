<?php

namespace App\Controllers;

use App\Controllers\BaseController;
$session =  \Config\Services::session();
class UserController extends BaseController
{
    public function index()
    {
        $data['title']="Agregar Curso"; 
        $validation =  \Config\Services::validation();
            if (strtolower($this->request->getMethod()) === 'get'){
                return view('common/head') .
                view('usuario/login') .
                view('common/footer');
            }
    
            $rules = [
                'email' => 'required',
                'password'=>'required'
            ];
    
            if (! $this->validate($rules)) {
                return view('common/head') .
                view('usuario/login') .
                view('common/footer');
            }
            else{

                $email = $_POST['email'];
                $password = $_POST['password'];
                $userModel = model('UserModel');
                $data['usuario']= $userModel->like('email',$email)
                                ->Like('pass',$password)
                                ->findAll();
                return redirect('curso/mostrar','refresh');
                if(count($data['usuario'])>0){
                    print "sesión iniciada";
                    print $data['usuario'][0]->idUsuario;
                    $session = session();

                    $newdata = [
                        'idUsuario' => $data['usuario'][0]->idUsuario,
                        'nombreUsuario'  => $data['usuario'][0]->nombreUsuario,
                        'email'     => $data['usuario'][0]->email,
                        'logged_in' => true,
                    ];
                    
                    $session->set($newdata);

                }
                else{
                    return redirect('usuario/login','refresh');
                }
            }  
    }
}

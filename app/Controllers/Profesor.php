<?php

namespace App\Controllers;

use App\Controllers\BaseController;
$session =  \Config\Services::session();
class Profesor extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {
        //
    }

    public function mostrar(){ 
        $profesorModel = model('ProfesorModel');
        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('usuario/login','refresh');
        }


        $data['Profesores'] = $ProfesorModel->findAll();
  
        return 
        view('common/head') .
        view('common/menu') .
        view('profesor/mostrar',$data) .
        view('common/footer');
    }

    public function agregar(){
        helper(['form','url']);
        $gradoModel = model('GradoModel');
        $grupoModel = model('GrupoModel');

        $data['grados'] = $gradoModel->findAll();
        $data['grupos'] = $grupoModel->findAll();


        $validation =  \Config\Services::validation();
        
        if ((strtolower($this->request->getMethod()) !== 'get')) {
            return 
            view('common/head') .
            view('common/menu') .
            view('profesor/agregar',$data) .
            view('common/footer');
        }

        $rules = [];

        if (! $this->validate($rules)) {
            return 
            view('common/head') .
        view('common/menu') .
        view('profesor/agregar',$data,['validation' => $validation]) .
        view('common/footer');
        }

    }

    public function insert(){
        $profesorModel = model('ProfesorModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "especialidad" => $_POST['especialidad']
        ];
        $profesorModel->insert($data, false);
        return redirect('profesor/mostrar','refresh');
    }


    
    public function delete($profesorID){
        $profesorModel = model('ProfesorModel');
        $profesorModel->delete($profesorID);
        return redirect('profesor/mostrar','refresh');
    }

    public function editar($profesorID){
        $estudianteModel = model('ProfesorModel');
        $data['profesor'] = $profesorModel->find($profesorID);

        return 
        view('common/head') .
        view('common/menu') .
        view('profesor/editar',$data) .
        view('common/footer');
    }

    public function update(){
        $profesorModel = model('ProfesorModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "especialidad" => $_POST['especialidad']
        ];
        $profesorModel->update($_POST['id'],$data);
        return redirect('profesor/mostrar','refresh');
    }

    public function buscar(){
        $profesorModel = model('ProfesorModel');
        if(isset($_GET['nombre'])){
            $nombre = $_GET['nombre'];
            $especialidad=$_GET['especialidad'];
            $data['profesores']= $profesorModel->like('nombre',$nombre)
                                ->Like('especialidad',$especialidad)
                                ->findAll();
        }
        else{
            $nombre = "";
            $data['profesores']=$profesorModel->findAll();
        }

        return 
            view('common/head') .
            view('common/menu') .
            view('profesor/buscar',$data) .
            view('common/footer');
    }


    


}


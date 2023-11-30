<?php

namespace App\Controllers;

use App\Controllers\BaseController;
$session =  \Config\Services::session();
class Estudiante extends BaseController
{
    protected $helpers = ['form'];
    public function index()
    {
        //
    }

    public function mostrar(){
        $estudianteModel = model('EstudianteModel');
        $session = session();
        if($session->get('logged_in')!=TRUE){
            return redirect('usuario/login','refresh');
        }


        $data['estudiantes'] = $estudianteModel->findAll();
  
        return 
        view('common/head') .
        view('common/menu') .
        view('estudiante/mostrar',$data) .
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
            view('estudiante/agregar',$data) .
            view('common/footer');
        }

        $rules = [];

        if (! $this->validate($rules)) {
            return 
            view('common/head') .
        view('common/menu') .
        view('estudiante/agregar',$data,['validation' => $validation]) .
        view('common/footer');
        }

    }

    public function insert(){
        $estudianteModel = model('EstudianteModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "fechaNacimiento" => $_POST['fechaNacimiento'],
            "direccion" => $_POST['direccion'],
            "idGrado" => $_POST['idGrado'],
            "idGrupo" => $_POST['idGrupo']
        ];
        $estudianteModel->insert($data, false);
        return redirect('estudiante/mostrar','refresh');
    }


    
    public function delete($estudianteID){
        $estudianteModel = model('EstudianteModel');
        $estudianteModel->delete($estudianteID);
        return redirect('estudiante/mostrar','refresh');
    }

    public function editar($estudianteID){
        $estudianteModel = model('EstudianteModel');
        $data['estudiante'] = $estudianteModel->find($estudianteID);

        return 
        view('common/head') .
        view('common/menu') .
        view('estudiante/editar',$data) .
        view('common/footer');
    }

    public function update(){
        $estudianteModel = model('EstudianteModel');
        $data = [
            "nombre" => $_POST['nombre'],
            "direccion" => $_POST['direccion'],
            "fechaNacimiento" => $_POST['fechaNacimiento']
        ];
        $estudianteModel->update($_POST['id'],$data);
        return redirect('estudiante/mostrar','refresh');
    }

    public function buscar(){
        $estudianteModel = model('EstudianteModel');
        if(isset($_GET['nombre'])){
            $nombre = $_GET['nombre'];
            $direccion=$_GET['direccion'];
            $data['estudiantes']= $estudianteModel->like('nombre',$nombre)
                                ->Like('direccion',$direccion)
                                ->findAll();
        }
        else{
            $nombre = "";
            $data['estudiantes']=$estudianteModel->findAll();
        }

        return 
            view('common/head') .
            view('common/menu') .
            view('estudiante/buscar',$data) .
            view('common/footer');
    }


    


}


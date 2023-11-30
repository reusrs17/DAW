<?php

namespace App\Controllers;

use App\Controllers\BaseController;
$session =  \Config\Services::session();
class Curso extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
       $this->mostrar($nav=null);
    }

    public function agregar(){
        $data['title']="Agregar Curso";   
        $validation =  \Config\Services::validation();
            if (strtolower($this->request->getMethod()) === 'get'){
                return view('common/head',$data)
                .  view('curso/agregar')
                .  view('common/footer');
            }
    
            $rules = [
                'curso' => 'required|max_length[30]'
            ];
    
            if (! $this->validate($rules)) {
                return view('common/head',$data)
                .  view('curso/agregar',['validation' => $validation])
                .  view('common/footer');
            }
            else{
                if($this->insert()){
                    return redirect('estudiante/mostrar','refresh');
                }
            }

    }

    public function insert(){
        $carreraModel = model('CursoModel');
        $data = [
            "nombreCurso" => $_POST['curso'],
        ];
        $carreraModel->insert($data, false);
        return true;
    }



    public function mostrar($nav=null)
    {
        $data['title']="Mostrar Cursos";

       
        $carreraModel = model('CursoModel');
        $data['cursos'] = $carreraModel->findAll();
        $data['totalCursos'] = $carreraModel->countAll();
        
        

        return view('common/head',$data)
            .  view('curso/mostrar').
            view('common/menu')
            .  view('common/footer');
    }
}


<?php

namespace App\Controllers;
$session =  \Config\Services::session();
class Home extends BaseController
{
    public function index()
    {   $db = db_connect();
        $sql = "SELECT Estudiante.*, Grupos.grupo, Grados.grado FROM Estudiante, Grados, Grupos where Estudiante.idGrado = Grados.idGrado and Estudiante.idGrupo = Grupos.idGrupo";
        $query = $db->query($sql);
        $data['estudiantes'] = $query->getResult();

        return view('home/head') . 
        view('home/menu') . 
        view('home/listaEstudiante',$data) .
        view('home/footer')   
        ;
    }
}

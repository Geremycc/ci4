<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    } 
    

    public function prueba ()
    {
        echo 'hola esto es una prueba de Geremy';
    }

    public function api ()
    {


        $usuarios= array (
            "usuario"=>"damian",
            "nombres"=>"Jose Quiñonez",
            "Ciudad"=>"Portoviejo",
            "Direccion"=>"Ciudadela Bellavista",
            "telefono"=>"+593996312711"

        );


        return $this->response->setJSON($usuarios);

    }


    public function login(){

return view('login');
    
    }


    public function testbd()
    {

        $this->db=\Config\Database::connect();
        $query=$this->db->query("SELECT id, nombre, apellido, email, genero, contrasena, contrasena_repetida 
        FROM registro.usuarios ");
        $result=$query->getResult();
        return $this->response->setJSON($result);


        
    
    }
}

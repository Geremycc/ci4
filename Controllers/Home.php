<?php

namespace App\Controllers;
// use App\Models

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    } 
    

 

    public function api ()
    {


        $usuarios= array (
            "usuario"=>"pepe",
            "nombres"=>"Jose Calderon",
            "Ciudad"=>"Portoviejo",
            "Direccion"=>"Los Olivos",
            "telefono"=>"+593987654321"

        );


        return $this->response->setJSON($usuarios);

    }


    public function login(){

return view('ci4/login');
    
    }

    function connection(){
        $host = "localhost";
        $user = "geremy";
        $pass = "yeye1";
    
        $bd = "yeyeuser";
    
        $connect=mysqli_connect($host, $user, $pass);
    
        mysqli_select_db($connect, $bd);
    
        return $connect;
    
    }
    

    
}

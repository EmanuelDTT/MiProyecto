<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function inicio(){

        return view ('inicio');
    }

    //Public function contacto(){
        //return view('contactoPrueba');
    //}

    public function formulario(){

        return view ('formulario');
    }


   

    public function enviarPost(){
        $nombre=$_POST['name'];
        $correo=$_POST['emai'];

        echo 'su nombre es: '. $nombre .' y su correo es: '. $correo;
    }
    
}


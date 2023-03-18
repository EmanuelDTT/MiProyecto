<?php
namespace App\Controllers;

class contactocontroller extends BaseController
{
    Public function index(){
        //return view('contacto/inicio'); 
         $data=['titulo' => 'inicio'];
      $vista =view ('contacto/Header', $data).
             view ('contacto/Menu').
             view ('contacto/contacto');
             view ('contacto/Footer');

    return $vista;
            
            }
    Public function catalogo(){

        $data= ['titulo' => 'catalogo'];
        $catalogo=['numero' => 'catalogo'];
        echo view ('contacto/Header', $data);
        echo view ('contacto/Menu');
        echo view ('contacto/catalogo');
        echo view ('contacto/Footer');
    }

    Public function formulario(){

        $data= ['titulo' => 'formulario'];
        echo view ('contacto/Header', $data);
        echo view ('contacto/Menu');
        echo view ('contacto/formulario');
        echo view ('contacto/Footer');
    }

    public function inicio(){
        $data= ['titulo' => 'inicio'];
        echo view ('contacto/Header', $data);
        echo view ('contacto/Menu');
        echo view ('contacto/Footer');

    }


}


?>
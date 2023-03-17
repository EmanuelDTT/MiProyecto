<?php
namespace App\Controllers;

class contactocontroller extends BaseController
{
    Public function index(){
        //return view('contacto/inicio'); 
         $data=['titulo' => 'inicio'];
      $vista =view ('contacto/Header', $data).
             view ('contacto/Menu').
             view ('contacto/inicio');
             view ('contacto/Footer');

    return $vista;
            
            }
    Public function catalogo($numeroCatalogo){

        $data= ['titulo' => 'catalogo'];
        $catalogo=['numero' => $numeroCatalogo];
        echo view ('contacto/Header', $data);
        echo view ('contacto/Menu');
        echo view ('contacto/catalogo', $catalogo);
        echo view ('contacto/Footer');
    }


}

?>
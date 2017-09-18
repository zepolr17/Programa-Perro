<?php
include_once 'principal';
class procesador{
    function procesar(){
    $miperro=new principal();
    $miperro->id=$_REQUEST["id"];
     $miperro->nombre=$_REQUEST["nom"];
      $miperro->raza=$_REQUEST["raza"];
       $miperro->peso=$_REQUEST["kg"];
        $miperro->edad=$_REQUEST["edad"];
        $miperro->guardarperro();
}
}
$miprocesador=new procesador();
$miprocesador->procesar();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


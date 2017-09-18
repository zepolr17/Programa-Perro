<?php
include_once 'perry';
class principal extends Perro{
    function guardarperro(){
        if($this->peso>25 || $this->peso<1){
            $this->peso=0;
        }
        if($this->edad>15 || $this->edad<0){
            $this->edad=0;
    }
    $enlace= mysqli_connect(localhost, root, armando99, Perrera, 3306);
    $cadena="INSERT INTO perro(id,nom,raza,edad,peso)VALUES( ".$this->id.",'".$this->nombre."','".$this->raza.",".$this->edad.","$this->peso.")";
    mysqli_query($enlace, $cadena);
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


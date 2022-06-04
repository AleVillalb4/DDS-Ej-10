<?php

require_once 'duenomascota.php';
class Mascota
{   
    public  $Id;
    public  $Nombre;
    public  $Raza;
    public  $Dueno;

    public function MostrarMascota()
    {
        echo 'Los datos de la mascota son: '. '<br>';
        echo 'Id de la mascota:'.$this-> Id. '<br>';
        echo 'Nombre: '.$this-> Nombre . '<br>';
        echo 'Raza: '.$this-> Raza. '<br>';
        echo 'Id del dueño: '. $this->Dueno->Id . '<br>';
        echo 'Nombre del dueño: '. $this->Dueno->Nombre . '<br>';
        echo 'Apellido del dueño: '. $this->Dueno->Apellido . '<br>';
        echo 'Documento del dueño: '. $this->Dueno->Documento . '<br>';
        echo 'Telefono del dueño: '. $this->Dueno->Celular . '<br>';
        echo 'Direccion del dueño: '. $this->Dueno->Direccion . '<br>';
    }
}

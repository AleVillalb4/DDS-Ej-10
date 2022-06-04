<?php

require_once 'modelo/duenomascota.php';
require_once 'modelo/mascota.php';

$DuenoMascota = new DuenoMascota();
$DuenoMascota->Id = '1';
$DuenoMascota->Nombre = 'Alejandro';
$DuenoMascota->Apellido = 'Villalba';
$DuenoMascota->Documento = '40121165';
$DuenoMascota->Celular = '3465 434950';
$DuenoMascota->Direccion = 'Rioja 1778';

$Mascota1 = new Mascota();
$Mascota1->Id = '1';
$Mascota1->Nombre = 'Ron';
$Mascota1->Raza = 'Boxer';
$Mascota1->Dueno = $DuenoMascota;

$Mascota1->MostrarMascota();

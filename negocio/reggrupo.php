<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/grupoentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();
$temp = 1;

			$objE->setdescripcion('Prueba');                        
			$objE->setfechavigencia('2015-07-07');                        
                        $objE->setestado($temp);
                        $reg_grupo	=	$objB->registrar_grupo_usuario($objE);
                        



?>
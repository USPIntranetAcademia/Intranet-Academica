<?php
session_start();
require('../conexion/conexion.php');
require('../data/usuariodata.php');
require('../entidad/grupoentity.php');


$con 	= 	new Conexion();
$objE	= 	new UsuarioE("","","","","");
$objB	= 	new UsuarioD();
$temp = '1';
			$objE->setdescripcion($_POST['grupo']);
                        $objE->setfechaalta(date());
			$objE->setfechavigencia($_POST['date']);                        
                        $objE->setestado($temp);
                        $reg_grupo	=	$objB->registrar_grupo_usuario($objE);


?>
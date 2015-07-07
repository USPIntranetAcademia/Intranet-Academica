<?php 
class UsuarioD{
    
		function verificar_usuario($obj){
			$objCn = new conexion();
			$sql = "call verificar_usuario('".$obj->getusuario()."','".$obj->getpassword()."')";
			return $objCn->ejecutar($sql);	
		}
		function listar_usuario(){
			$objCn = new conexion();
			$sql = "call reporte_usuario()";
			return $objCn->ejecutar($sql);	
		}
                function listar_persona(){
			$objCn = new conexion();
			$sql = "call reporte_persona()";
			return $objCn->ejecutar($sql);	
		}
                function listar_rol(){
			$objCn = new conexion();
			$sql = "call reporte_rol()";
			return $objCn->ejecutar($sql);	
		}
                function mostrar_nombre_apellido_usuario($obj){
			$objCn = new Conexion();
			$sql = "call nombre_persona_usuario('".$obj->getusuario()."')";
			return $objCn->ejecutar($sql);	
		}
                function registro_usuario_historial($obj){
			$objCn = new Conexion();
			$sql = "call registro_usuario_historial('".$obj->getidusuario()."','".$obj->getipacceso()."')";
			return $objCn->ejecutar($sql);	
		}
                function registro_grupo_usuario($obj){
			$objCn = new Conexion();
			$sql = "call registro_grupo_usuario('".$obj->getdescripcion()."','".$obj->getfechavigencia()."','".$obj->getestado()."')";
			return $objCn->ejecutar($sql);	
		}
                function registro_grupo_estudio($obj){
			$objCn = new Conexion();
			$sql = "call registro_grupo_estudio('".$obj->getnivel()."','".$obj->getgrado()."','".$obj->getseccion()."','".$obj->getestado()."')";
			return $objCn->ejecutar($sql);	
		}
                function registro_persona($obj){
			$objCn = new Conexion();
			$sql = "call registro_persona('".$obj->getnombre()."','".$obj->getapellido()."','".$obj->getdni()."','".$obj->getsexo()."','".$obj->getdireccion()."','".$obj->gettelefono()."','".$obj->getemail()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
		        function registro_alumno($obj){
			$objCn = new Conexion();
			$sql = "call registro_alumno('".$obj->getidpersona()."','".$obj->getcodigo()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
                function registro_usuario($obj){
			$objCn = new Conexion();
			$sql = "call registro_usuario('".$obj->getidpersona()."','".$obj->getrol()."','".$obj->getusuario()."','".$obj->getpassword()."','".$obj->getpregunta()."','".$obj->getrespuesta()."','".$obj->getfechavigencia()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
		        function registro_docente($obj){
			$objCn = new Conexion();
			$sql = "call registro_docente('".$obj->getidpersona()."','".$obj->getcodigo()."','".$obj->getidrol()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
		        function registro_curso($obj){
			$objCn = new Conexion();
			$sql = "call registro_curso('".$obj->getdescripcion()."','".$obj->getcodigo()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
				function registro_cad($obj){
			$objCn = new Conexion();
			$sql = "call registro_cad('".$obj->getidcurso()."','".$obj->getidtrabajador()."','".$obj->getidgrupo()."','".$obj->getfechavigencia()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
				function registro_matricula($obj){
			$objCn = new Conexion();
			$sql = "call registro_matricula('".$obj->getidalumno()."','".$obj->getidpersona()."','".$obj->getidgrupo()."','".$obj->getparentesco()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
                function reporte_perfil($obj){
			$objCn = new Conexion();
			$sql = "call reporte_perfil('".$obj->getusuario()."')";                    
			return $objCn->ejecutar($sql);	
		}
		function actualizar_matricula($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_matricula('".$obj->getidmatricula()."','".$obj->getidalumno()."','".$obj->getidpersona()."','".$obj->getidgrupo()."','".$obj->getparentesco()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
                function actualizar_telefono($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_telefono('".$obj->gettelefono()."','".$obj->getidpersona()."')";                        
			return $objCn->ejecutar($sql);	
		}
                function actualizar_direccion($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_direccion('".$obj->getidpersona()."','".$obj->getdireccion()."')";                        
			return $objCn->ejecutar($sql);	
		}
                function actualizar_correo($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_correo('".$obj->getidpersona()."','".$obj->getemail()."')";                        
			return $objCn->ejecutar($sql);	
		}
                 function actualizar_respuesta($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_respuesta('".$obj->getidusuario()."','".$obj->getrespuesta()."')";                        
			return $objCn->ejecutar($sql);	
		}
                function actualizar_pregunta($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_pregunta('".$obj->getidusuario()."','".$obj->getpregunta()."')";                        
			return $objCn->ejecutar($sql);	
		}
		        function actualizar_persona($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_persona('".$obj->getidpersona()."','".$obj->getnombre()."','".$obj->getapellido()."','".$obj->getdni()."','".$obj->getsexo()."','".$obj->getdireccion()."','".$obj->gettelefono()."','".$obj->getemail()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
		        function buscar_persona($obj){
			$objCn = new Conexion();
			$sql = "call buscar_persona('".$obj->getidpersona()."')";                        
			return $objCn->ejecutar($sql);	
		}
				function buscar_usuario($obj){
			$objCn = new Conexion();
			$sql = "call buscar_usuario('".$obj->getidusuario()."')";                        
			return $objCn->ejecutar($sql);	
		}
				function buscar_cad($obj){
			$objCn = new Conexion();
			$sql = "call buscar_cad('".$obj->getidcad()."')";                        
			return $objCn->ejecutar($sql);	
		}
                        function actualizar_curso($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_curso('".$obj->getidcurso()."','".$obj->getdescripcion()."','".$obj->getcodigo()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
                        function actualizar_rol($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_rol('".$obj->getidrol()."','".$obj->getdescripcion()."','".$obj->getfechavigencia()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
                        function actualizar_grupo($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_grupo('".$obj->getidgrupo()."','".$obj->getnivel()."','".$obj->getgrado()."','".$obj->getseccion()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		} 
					function actualizar_cad($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_cad('".$obj->getidcad()."','".$obj->getidtrabajador()."','".$obj->getidcurso()."','".$obj->getidgrupo()."','".$obj->getfechavigencia()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
                        function actualizar_trabajador($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_trabajador('".$obj->getidtrabajador()."','".$obj->getidpersona()."','".$obj->getcodigo()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
		                function actualizar_alumno($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_alumno('".$obj->getidalumno()."','".$obj->getidpersona()."','".$obj->getcodigo()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}
		               function actualizar_usuario($obj){
			$objCn = new Conexion();
			$sql = "call actualizar_usuario('".$obj->getidusuario()."','".$obj->getestado()."')";                        
			return $objCn->ejecutar($sql);	
		}                 
                	function buscar_curso($obj){
			$objCn = new Conexion();
			$sql = "call buscar_curso('".$obj->getidcurso()."')";                        
			return $objCn->ejecutar($sql);	
		}
                        function buscar_rol($obj){
			$objCn = new Conexion();
			$sql = "call buscar_rol('".$obj->getidrol()."')";                        
			return $objCn->ejecutar($sql);	
		}
                        function buscar_grupo($obj){
			$objCn = new Conexion();
			$sql = "call buscar_grupo('".$obj->getidgrupo()."')";                        
			return $objCn->ejecutar($sql);	
		}
		                function buscar_trabajador($obj){
			$objCn = new Conexion();
			$sql = "call buscar_trabajador('".$obj->getidtrabajador()."')";                        
			return $objCn->ejecutar($sql);	
		}
		                function buscar_alumno($obj){
			$objCn = new Conexion();
			$sql = "call buscar_alumno('".$obj->getidalumno()."')";                        
			return $objCn->ejecutar($sql);	
		}
		                function buscar_matricula($obj){
			$objCn = new Conexion();
			$sql = "call buscar_matricula('".$obj->getidmatricula()."')";                        
			return $objCn->ejecutar($sql);	
		}
}
?>
<?php mysql_connect('localhost', 'root', '');
 mysql_select_db('intranet');
?>

<div class="box box-primary" id="divlusuario" style="display:none">
                <div class="box-header">
                    <h3 class="box-title">Listar Rol</h3>
                </div>
                <form role="form">
                  <div class="box-body">                    
                    <table border="1" class="box box-primary">
                    
                    <th class="box-body">IdUsuario</th>
                    <th class="box-body">IdPersona</th>
                    <th class="box-body">IdRol</th>
                    <th class="box-body">Usuario</th>
                    <th class="box-body">Password</th>
                    <th class="box-body">Pregunta</th>
                    <th class="box-body">Respuesta</th>
                    <th class="box-body">FechaAlta</th>
                    <th class="box-body">FechaVigencia</th>
                    <th class="box-body">Estado</th>
                    
                    <?php 
                    $consulta = mysql_query('Select * From usuario');
                    while ($rol = mysql_fetch_array($consulta)){ ?>
                   <tr bgcolor=#F0FFFF>
                    <td class="box-body"><?php echo $rol['idusuario']?> </td>
                    <td class="box-body"><?php echo $rol['idpersona']?> </td>
                    <td class="box-body"><?php echo $rol['idrol']?> </td>
                    <td class="box-body"><?php echo $rol['usuario']?> </td>
                    <td class="box-body"><?php echo $rol['password']?> </td>
                    <td class="box-body"><?php echo $rol['pregunta']?> </td>
                    <td class="box-body"><?php echo $rol['respuesta']?> </td>
                    <td class="box-body"><?php echo $rol['fechaalta']?> </td>
                    <td class="box-body"><?php echo $rol['fechavigencia']?> </td>
                    <td class="box-body"><?php echo $rol['estado']?> </td>
                </tr>
                    <?php } ?>
</table>
            
                      
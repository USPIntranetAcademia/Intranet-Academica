
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputUsuario">Nombre</label>
                      <input type="hidden" name="idpersona" value="<?php echo $_POST['id_persona']?>"></input>
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" value="<?php echo $persona->nombre; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputUsuario">Apellido</label>
                      <input type="text" class="form-control" name="apellido" placeholder="Apellidos" value="<?php echo $persona->apellido; ?>">
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputPassword1">Documento Nacional de Identidad</label>
                      <input type="text" class="form-control" name="dni" placeholder="DNI" value="<?php echo $persona->dni; ?>">
                    </div>
                    <div class="form-group">
                     <label>Sexo</label><br>
                     <select name="sexo">
                     <?php if ($persona->sexo == '1') {
                       echo "<option value='1' selected>Masculino</option>";
                       echo "<option value='2'>Femenino</option>";

                     } else {
                       echo "<option value='1'>Masculino</option>";
                       echo "<option value='2' selected>Femenino</option>";
                     }
                      ?>
                     </select>

                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Direccion</label>
                      <input type="text" class="form-control" name="direccion" placeholder="Direccion" value="<?php echo $persona->direccion; ?>">  
                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Telefono</label>
                      <input type="text" class="form-control" name="telefono" placeholder="Teléfono" value="<?php echo $persona->telefono; ?>">  
                    </div>
                      <div class="form-group">
                      <label for="exampleInputRespuesta">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" value="<?php echo $persona->email; ?>">  
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="checkbox"> Habilitar
                      </label>
                    </div>
                  </div>
         
<div class="box-body">
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nombre Rol</label>
                      <input type="hidden" name="id_rol" value="<?php echo $_POST['id_rol']?>"></input>
                      <input type="text" class="form-control" name="descripcion" value="<?php echo $rol->descripcion; ?>">
                    </div>
                    <div class="form-group">
                          <label for="exampleInputDate">Fecha Vigencia</label>
                      <input type="date" class="form-control" name="date" value="<?php echo $rol->fechavigencia; ?>">
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="checkbox"> Habilitar
                      </label>
                    </div>
                  </div>

                  </div>
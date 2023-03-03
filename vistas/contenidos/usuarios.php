<div class="content">
  <div class="row">
    <div ><br>
    <!-- AQUI EMPIEZA EL FORMULARIO DE ADMINISTRADORES -->
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Registrar Administradores</button>
       
     <div class="modal fade" id="exampleModalCenter" tabindex="10" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                
              <h5 class="modal-title" id="exampleModalLongTitle">Registrar Administradores</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-footer">
                  <div class="card">
                      <div class="card-body">
                        <form id="" class ="frmAdministradores" method ="POST" action ="././Ajax/administradorAjax.php" data-form ="save" autocomplete="off" enctype = "multipart/form-data ">
                          <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputAddress">*Cedula</label>
                            <input type="number" class="form-control" name="Cedula" placeholder="Escribe aqui..." autocomplete="off">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">*Nombre</label>
                            <input type="text" class="form-control" id="Nombre"  name="Nombre" placeholder="Escribe aqui..."autocomplete="off">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">*Apellido</label>
                            <input type="text" class="form-control" id="Apellido" name="Apellido" placeholder="Escribe aqui..."autocomplete="off">
                          </div>
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">*Email</label>
                              <input type="email" class="form-control" id="Email" name="Email" placeholder="Email"autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputAddress">*Usuario</label>
                            <input type="text" class="form-control" id="Usuario"  name="Usuario" placeholder="Escribe aqui..."autocomplete="off">
                          </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">*Password</label>
                              <input type="password" class="form-control" id="Password1" name="Password1" placeholder="Password"autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">*Password</label>
                              <input type="password" class="form-control" id="Password" name="Password" placeholder="Password"autocomplete="off">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputAddress">*Dirección</label>
                            <input type="text" class="form-control" id="Direccion" name="Direccion" placeholder="Escribe tu dirección"autocomplete="off">
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCity">*Telefono</label>
                              <input type="number" class="form-control" id="Telefono" name="Telefono" autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputZip">*Fecha de Nacimiento</label>
                              <input type="date" class="form-control" id="Fecha" name="Fecha" autocomplete="off">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Registrar Administradores</button>
                          <div class="RespuestaAjax"></div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
            <!-- AQUI TERMINA EL FORMULARIO DE ADMINISTRADORES 23/01/2023-->

        <!-- AQUI EMPIEZA EL FORMULARIO DE Clientes 23/enero/2023-->
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FrmRegistrClientes">Registrar Clientes</button>
       
       <div class="modal fade" id="FrmRegistrClientes" tabindex="10" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  
                <h5 class="modal-title" id="exampleModalLongTitle">Registrar Clientes</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <div class="modal-footer">
                    <div class="card">
                        <div class="card-body">
                          <form id="" class ="frmclientes" method ="POST" action ="././Ajax/clientesAjax.php" data-form ="save" autocomplete="off" enctype = "multipart/form-data ">
                            <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputAddress">*Cedula</label>
                              <input type="number" class="form-control" id="CedulaC" name="CedulaC" placeholder="Escribe aqui..." autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputAddress">*Nombre</label>
                              <input type="text" class="form-control" id="NombreC" name= "NombreC" placeholder="Escribe aqui..."autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputAddress">*Apellido</label>
                              <input type="text" class="form-control" id="ApellidoC" name= "ApellidoC" placeholder="Escribe aqui..."autocomplete="off">
                            </div>
                              <div class="form-group col-md-6">
                                <label for="inputEmail4">*Email</label>
                                <input type="email" class="form-control" id="EmailC" name= "EmailC" placeholder="Email"autocomplete="off">
                              </div>
                              <div class="form-group col-md-6">
                              <label for="inputAddress">*Usuario</label>
                              <input type="text" class="form-control" id="UsuarioC" name= "UsuarioC"  placeholder="Escribe aqui..."autocomplete="off">
                            </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">*Contraseña</label>
                                <input type="password" class="form-control" id="Password1C" name= "Password1C"  placeholder="Contraseña"autocomplete="off">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">*Por Favor Confirme Su Contraseña </label>
                                <input type="password" class="form-control" id="PasswordC" name= "PasswordC" placeholder="Contraseña"autocomplete="off">
                              </div>
                              <div class="form-group">
                              <label for="inputAddress" >*Sexo</label>
                                <select name="SexoC" id= "SexoC" class="form-select form-control"  aria-label="Default select example">
                                  <option value="">Seleccione Un Sexo</option>
                                  <option value="M">Masculino</option>
                                  <option value="F" >Femenino</option>
                                  <option value="NA">Prefiero no Especificar</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-group">
                              <label for="inputAddress">*Dirección</label>
                              <input type="text" class="form-control" id="DireccionC" name="DireccionC"  placeholder="Escribe tu dirección"autocomplete="off">
                            </div>
        
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="inputCity">*Telefono</label>
                                <input type="number" class="form-control" name="TelefonoC" id="TelefonoC"autocomplete="off">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputZip">*Fecha de Nacimiento</label>
                                <input type="date" class="form-control" name="FechaC" id="FechaC"autocomplete="off">
                              </div>
                              
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar Clientes</button>
                            <div class="RespuestaAjax"></div>
  
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              
              
            </div>
            <!-- AQUI TERMINA EL FORMULARIO DE ADMINISTRADORES 23/01/2023-->
            <center>
            <table class="table table- table-hover">
  <thead>
    <tr class="table-dark">
      <th scope="col">Id</th>
      <th scope="col">Cedula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
            </center>








        </div>
      </div>
    </div>
  </div>  
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>     


  

           
           
                        <!-- Button trigger modal -->

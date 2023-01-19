<div class="content">
  <div class="row">
    <div class="col-md-8"><br>
    
    <!-- botton modal -->
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Registrar Administradores</button>

    <!-- Modal -->
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
                      <form id="frmAdministradores" data-form ="save">
                          <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="inputAddress">*Cedula</label>
                            <input type="number" class="form-control" id="Cedula" placeholder="Escribe aqui..." autocomplete="off">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">*Nombre</label>
                            <input type="text" class="form-control" id="Nombre" placeholder="Escribe aqui..."autocomplete="off">
                          </div>
                          <div class="form-group col-md-6">
                            <label for="inputAddress">*Apellido</label>
                            <input type="text" class="form-control" id="Apellido" placeholder="Escribe aqui..."autocomplete="off">
                          </div>
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">*Email</label>
                              <input type="email" class="form-control" id="Email" placeholder="Email"autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputAddress">*Usuario</label>
                            <input type="text" class="form-control" id="Usuario" placeholder="Escribe aqui..."autocomplete="off">
                          </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">*Password</label>
                              <input type="password" class="form-control" id="Password1" placeholder="Password"autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">*Password</label>
                              <input type="password" class="form-control" id="Password" placeholder="Password"autocomplete="off">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputAddress">*Dirección</label>
                            <input type="text" class="form-control" id="Direccion" placeholder="Escribe tu dirección"autocomplete="off">
                          </div>
      
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCity">*Telefono</label>
                              <input type="number" class="form-control" id="Telefono"autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputZip">*Fecha de Nacimiento</label>
                              <input type="date" class="form-control" id="Fecha"autocomplete="off">
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

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle2">Registrar Clientes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
    <div class="modal-footer">
      <div class="card">
          <div class="card-body">
              <form>
                    <div class="row">
                      <div class="col-md-5 pr-1">
                        <div class="form-group">
                          <label>Company (disabled)</label>
                          <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" placeholder="Username" value="michael23">
                    </div>
                  </div>
                  <div class="col-md-4 pl-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" placeholder="Company" value="Mike">
                    </div>
                  </div>
                  <div class="col-md-6 pl-1">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 pr-1">
                    <div class="form-group">
                      <label>City</label>
                      <input type="text" class="form-control" placeholder="City" value="Mike">
                    </div>
                  </div>
                  <div class="col-md-4 px-1">
                    <div class="form-group">
                      <label>Country</label>
                      <input type="text" class="form-control" placeholder="Country" value="Andrew">
                    </div>
                  </div>
                  <div class="col-md-4 pl-1">
                    <div class="form-group">
                      <label>Postal Code</label>
                      <input type="number" class="form-control" placeholder="ZIP Code">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>About Me</label>
                          <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                        </div>
                        <input type="submit" value ="Registrar" class="btn ">
                      </div>
                    </div>
                  </form>
                    </div>
                    </div>
                  </div>
               </div>
          </div>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Registrar Proveedores</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Registrar Proveedores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
    <div class="modal-footer">
      <div class="card">
          <div class="card-body">
              <form>
                    <div class="row">
                      <div class="col-md-5 pr-1">
                        <div class="form-group">
                          <label>Company (disabled)</label>
                          <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" placeholder="Username" value="michael23">
                    </div>
                  </div>
                  <div class="col-md-4 pl-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" placeholder="Company" value="Mike">
                    </div>
                  </div>
                  <div class="col-md-6 pl-1">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 pr-1">
                    <div class="form-group">
                      <label>City</label>
                      <input type="text" class="form-control" placeholder="City" value="Mike">
                    </div>
                  </div>
                  <div class="col-md-4 px-1">
                    <div class="form-group">
                      <label>Country</label>
                      <input type="text" class="form-control" placeholder="Country" value="Andrew">
                    </div>
                  </div>
                  <div class="col-md-4 pl-1">
                    <div class="form-group">
                      <label>Postal Code</label>
                      <input type="number" class="form-control" placeholder="ZIP Code">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>About Me</label>
                          <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                        </div>
                        <input type="submit" value ="Registrar" class="btn ">
                      </div>
                    </div>
                  </form>
                    </div>
                    </div>
                  </div>
               </div>
          </div>
        </div>
          </div>
        </div>
      </div>

            <!-- Button trigger modal -->

<div class="modal fade" tabindex="-1" role="dialog" id="iniciarsesion">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Iniciar Sesión</h4>
      </div>
      <div class="modal-body">
        <form name="user_form" action="proceso/recibedatos.php" method="POST">

      <br>
   Username:
      </br>  
  <input class="input-lg" name="user" type="text"  class="form-group" id="user" size="30" maxlength="100" />
      <br/>
   Password:
      </br>  
  <input class="input-lg" name="password" onkeypress="return validar(event)"  type="Password" class="form-group" id="password" size="30" maxlength="100" />
      </br>  

                  <button type="submit" class="btn btn-primary">Iniciar sesión</button>                  
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      
      </form>
    </div>
  </div>
</div>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="registro">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Registrarse</h4>
      </div>
      <div class="modal-body">
        <form name="user_form" action="proceso/recibedatos.php" method="POST">

      <br>
   Username:
      </br>  
  <input class="input-lg" name="user" type="text"  class="form-group" id="user" size="30" maxlength="100" />
      <br/>
   Password:
      </br>  
  <input class="input-lg" name="password" onkeypress="return validar(event)"  type="Password" class="form-group" id="password" size="30" maxlength="100" />
      </br> 
      Correo electronico:
      </br>  
  <input class="input-lg" name="Correo" onkeypress="return validar(event)"  type="Correo" class="form-group" id="correo" size="30" maxlength="100" />
      </br> 
       

                  <button type="submit" class="btn btn-primary">Registrarse</button>                  
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      
      </form>
    </div>
  </div>
</div>
</div>
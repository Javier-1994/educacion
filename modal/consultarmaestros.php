  <?php
    //if (isset($con))
    //{
  
  ?>
  <!-- Modal -->
  <div class="modal fade" id="dataConsult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#2A6968;">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="myModalLabel" style="color:#FFFFFF;"><i class='glyphicon glyphicon-plus' ></i> Consultar</h4>
      </div>
      <div class="modal-body">
      <form >
    <div id="actualizaDatos"></div>
  
<label for="user_name" class="col-sm-3 control-label">Identidad</label>
                <div class="controls col-md-8 ">
<input type="text" class="input-md textinput textInput form-control inp"  id="identidadp" name="identidadp"   placeholder="Identidad"  autocomplete="off" required tabindex="1" disabled>

<input type="hidden" class="input-md textinput textInput form-control inp"  id="idmaestro" name="idmaestro"   placeholder="idmaestro"  >
                </div>
                  
            
                <label for="user_name" class="col-sm-3 control-label">Nombre</label>
               <div class="controls col-md-8 ">
 <input type="text" class="form-control inp" id="nombrep" name="nombrep" placeholder="Nombre" autocomplete="off" required tabindex="" disabled>
                </div>
            
             
  <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Apellido</label>
                <div class="col-sm-8">
    <input type="text" class="form-control inp" id="apellidop" name="apellidop" placeholder="Apellido"  autocomplete="off" required tabindex="3" disabled>
                </div>
              </div>

       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Teléfono</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="telefonop" name="telefonop" placeholder="Telefono"  autocomplete="off" required tabindex="4" disabled>
                </div>
              </div>
  

         <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Estado</label>
                <div class="col-sm-8">
        <input type="text" class="form-control inp" id="estadop" name="estadop" placeholder="Estado"  autocomplete="off" required tabindex="4" disabled>
                </div>
              </div>      



              
  
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      
      </div>

      </form>
    </div>
    </div>
  </div>
  <?php

    //}
  ?>

  
  <script type="text/javascript" >
  
  
   $('#telefon').mask("0000-0000", {placeholder: "---- ----"});

$('#ip-field').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
        'Z': {
            pattern: /[0-9]/, optional: true
        }
    },
    placeholder: "___.___.___.___"
});
</script>
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
      <form class="form-horizontal" >
    <div id="actualizaDatos"></div>
  
       <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Nombre</label>
               <div class="col-sm-8 ">
 <input type="text" class="form-control input-sm" id="nombre_asigp" name="nombre_asigp" placeholder="Nombre" autocomplete="off" required tabindex="1" disabled>
                </div>
                </div>      


  <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Codigo</label>
               <div class="controls col-sm-8 ">
 <input type="text" class="form-control inp" id="codigo_asigp" name="codigo_asigp" placeholder="Codigo" autocomplete="off" required tabindex="2" disabled>

                </div>
                </div>     
             
  <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Curso</label>
               <div class="controls col-sm-8 ">
 <input type="text" class="form-control inp" id="idcursop" name="idcursop" placeholder="Curso" autocomplete="off" required tabindex="3" disabled>

                </div>
                </div>

          <div class="form-group">
                <label for="user_name" class="col-sm-3 control-label">Estado</label>
                <div class="col-sm-8">
        <select name="estadop" id="estadop" class="form-control input-sm" required tabindex="5" disabled>
            <option value="" selected>-Seleccione tipo-</option>
           <option value="1">Activo</option>
           <option value="0">Inactivo</option>
        </select> 
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
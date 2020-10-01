<div class="modal" id="nuevoProveedor" tabindex="-1" data-backdrop="false" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary">Nuevo Proveedor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" id="formNuevo">
			  <div class="form-group">
			    <input type="text" class="form-control" id="razon" placeholder="Razon Social..." name="razon_social" required maxlength="250"  style="text-transform:uppercase;" >
			  </div>
			  <div class="form-group">
			  	<select class="form-control custom-select mr-sm-2 col-6" name="tipo_cuenta" id="tipo_cuenta" required>
			  		<option value="Contado">Contado</option>
			  		<option value="Credito">Credito</option>
			  	</select>
			  </div>

			   <div class="form-group">
			    <input type="text" class="form-control" id="cod_postal" placeholder="Cod. Postal..." name="cod_postal" maxlength="10" required  style="text-transform:uppercase;">
			  </div>

			   <div class="form-group">
			    <input type="text" class="form-control col-6" id="provincia" placeholder="Provincia..." name="provincia" required maxlength="60"  style="text-transform:uppercase;" >
			  </div>

			  <div class="form-group">
			    <input type="text" class="form-control" id="localidad" placeholder="Localidad..." name="localidad" required maxlength="250"  style="text-transform:uppercase;" >
			  </div>

			   <div class="form-group">
			    <input type="text" class="form-control" id="direccion" placeholder="Direccion..." name="direccion" required maxlength="250"  style="text-transform:uppercase;">
			  </div>


               <div class="form-group">
			    <input type="text" class="form-control" id="cuit" placeholder="CUIT..." name="cuit"  style="text-transform:uppercase;" required>
			  </div>

			 	<select class="form-control custom-select mr-sm-2 col-6" name="tipo_iva" id="tipo_iva" required>
			  		<option value="RI">Responsable Inscripto</option>
			  		<option value="MO">Monotributista</option>
			  		<option value="EX">Exento</option>
			  	</select>

			  	<div class="form-group">
			  	  <input type="text" class="form-control" id="telefonos" placeholder="Telefonos..." name="telefonos" required maxlength="250"  style="text-transform:uppercase;">
			  	</div>

			  	<div class="form-group">
			  	  <input type="email" class="form-control" id="email" placeholder="Email..." name="email" required maxlength="250"  style="text-transform:uppercase;">
			  	</div>

			  	<div class="form-group">
			  	  <input type="text" class="form-control" id="contacto" placeholder="Contacto..." name="contacto" required maxlength="250"  style="text-transform:uppercase;">
			  	</div>

			  <div class="form-group text-right mt-5">
			  	<button type="button" class="btn btn-primary " onclick="proveedores_nuevo();">Guardar</button>
			 	 <button type="button" class="btn btn-danger t" data-dismiss="modal">Cancelar</button>
			  </div>
			  
			</form>
      </div>
    </div>
  </div>
</div>
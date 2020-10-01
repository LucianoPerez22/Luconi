
<div class="modal" id="editarProveedor" tabindex="-1" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" >Editar Proveedor</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="" id="formEditar">
        	<div class="form-group">
        		<input type="text" id="valor" class="form-control col-2" readonly>
        	</div>
			  <div class="form-group">
			  	<span>Razon Social</span>
			    <input type="text" class="form-control" id="razon_social" placeholder="Razon Social..." name="razon_social" required maxlength="250"  style="text-transform:uppercase;">
			  </div>
			  <div class="form-group">
			  	<span>Tipo Cuenta</span>
			  	<br />
			  	<select class="form-control custom-select mr-sm-2 col-6" name="tipo_cuenta" id="tipo_cuenta">
			  		<option value="Contado">Contado</option>
			  		<option value="Credito">Credito</option>
			  	</select>
			  </div>

			   <div class="form-group">
			   	<span>Cod. Postal</span>
			    <input type="text" class="form-control" id="cod_postal" placeholder="Cod. Postal..." name="cod_postal" maxlength="10" required  style="text-transform:uppercase;">
			  </div>

			   <div class="form-group">
			   	<span>Provincia</span>
			    <input type="text" class="form-control col-6" id="provincia" placeholder="Provincia..." name="provincia" required maxlength="60"  style="text-transform:uppercase;">
			  </div>

			  <div class="form-group">
			  	<span>Localidad</span>
			    <input type="text" class="form-control" id="localidad" placeholder="Localidad..." name="localidad" required maxlength="250"  style="text-transform:uppercase;">
			  </div>

			   <div class="form-group">
			   	<span>Direccion</span>
			    <input type="text" class="form-control" id="direccion" placeholder="Direccion..." name="direccion" required maxlength="250"  style="text-transform:uppercase;">
			  </div>


               <div class="form-group">
               	<span>Cuit</span>
			    <input type="text" class="form-control" id="cuit" placeholder="CUIT..." name="cuit"  style="text-transform:uppercase;">
			  </div>
			  	<span>Tipo Iva</span>
			  	<br />
			 	<select class="form-control custom-select mr-sm-2 col-6" name="tipo_iva" id="tipo_iva">
			  		<option value="RI">Responsable Inscripto</option>
			  		<option value="MO">Monotributista</option>
			  		<option value="EX">Exento</option>
			  	</select>

			  	<div class="form-group">
			  		<span>Telefonos</span>
			  	  <input type="text" class="form-control" id="telefonos" placeholder="Telefonos..." name="telefonos" required maxlength="250"  style="text-transform:uppercase;">
			  	</div>

			  	<div class="form-group">
			  		<span>E-mail</span>
			  	  <input type="text" class="form-control" id="email" placeholder="Email..." name="email" required maxlength="250"  style="text-transform:uppercase;">
			  	</div>

			  	<div class="form-group">
			  		<span>Contacto</span>
			  	  <input type="text" class="form-control" id="contacto" placeholder="Contacto..." name="contacto" required maxlength="250"  style="text-transform:uppercase;">
			  	</div>

			  <div class="form-group text-right mt-5">
			  	<button type="button" class="btn btn-primary " onclick="proveedores_editar()">Guardar</button>
			 	 <button type="button" class="btn btn-danger t" data-dismiss="modal">Cancelar</button>
			  </div>
			  
			</form>
      </div>
    </div>
  </div>
</div>

	

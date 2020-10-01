<div class="modal" id="nuevoCliente" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary">Nuevo Articulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
			  <div class="form-group">
			    <input type="text" class="form-control" id="razon" placeholder="Razon Social...">
			  </div>
			  <div class="form-group">
			  	<select class="form-control custom-select mr-sm-2 col-6" name="proveedor" id="tipo_cuenta">
			  		<option value="">Contado</option>
			  		<option value="">Cta. Cte.</option>
			  	</select>
			  </div>

			   <div class="form-group">
			    <input type="text" class="form-control" id="cod_postal" placeholder="Cod. Postal...">
			  </div>

			   <div class="form-group">
			    <input type="text" class="form-control col-6" id="provincia" placeholder="Provincia...">
			  </div>

			  <div class="form-group">
			    <input type="text" class="form-control" id="localidad" placeholder="Localidad...">
			  </div>

			   <div class="form-group">
			    <input type="text" class="form-control" id="direccion" placeholder="Direccion...">
			  </div>


				
               <div class="form-group">
			    <input type="text" class="form-control" id="cuit" placeholder="CUIT...">
			  </div>

			 	<select class="form-control custom-select mr-sm-2 col-6" name="marca" id="proveedor">
			  		<option value="RI">Responsable Inscripto</option>
			  		<option value="MO">Monotributista</option>
			  		<option value="EX">Exento</option>
			  	</select>

			  	<div class="form-group">
			  	  <input type="text" class="form-control" id="email" placeholder="Email...">
			  	</div>

			  	<div class="form-group">
			  	  <input type="text" class="form-control" id="contacto" placeholder="Contacto...">
			  	</div>

			  <div class="form-group text-right mt-5">
			  	<button type="submit" class="btn btn-primary ">Guardar</button>
			 	 <button type="button" class="btn btn-danger t">Cancelar</button>
			  </div>
			  
			</form>
      </div>
    </div>
  </div>
</div>
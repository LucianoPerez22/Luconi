<div class="modal" id="nuevoMarca" tabindex="-1" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary">Nueva Marca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" id="formNuevo">
			  <div class="form-group">
			  	<span>Proveedor</span>
			  	<select class="form-control custom-select" name="proveedor" id="proveedor" required>
			  				
			  	</select>
			  </div>

			   <div class="form-group">
			   	<span>Descripcion</span>
			    <input type="text" class="form-control" id="descripcion" placeholder="Nombre Marca..." name="descripcion" style="text-transform:uppercase;" required="">
			  </div>

			  <div class="form-group text-right mt-5">
			  	<button type="button" class="btn btn-primary " onclick="marcas_nuevo();">Guardar</button>
			 	 <button type="button" class="btn btn-danger t" data-dismiss="modal">Cancelar</button>
			  </div>
			  
			</form>
      </div>
    </div>
  </div>
</div>
<div class="modal" id="editarMarca" tabindex="-1" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary">Editar Marca</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formEditar" method="POST" action="">
			  <div class="form-group">
			  	<div class="form-group">
        			<input type="text" id="valor" class="form-control col-2" readonly>
        		</div>
        		<span>Proveedor</span>
			  	<select class="form-control custom-select" name="proveedor" id="editar_proveedor">
			  		
			  	</select>
			  </div>

			   <div class="form-group">
			   	<span>Descripcion</span>
			    <input type="text" class="form-control" id="editar_descripcion" placeholder="Nombre Marca..." name="editar_descripcion">
			  </div>

			  <div class="form-group text-right mt-5">
			  	<button type="button" class="btn btn-primary " onclick="marcas_editar();">Guardar</button>
			 	 <button type="button" class="btn btn-danger t"data-dismiss="modal">Cancelar</button>
			  </div>
			  
			</form>
      </div>
    </div>
  </div>
</div>
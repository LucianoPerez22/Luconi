<div class="modal" id="editarArticulo" tabindex="-1" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary">Editar Articulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formEditar" method="POST" action="">
			  <div class="form-group">
			  	<input type="text" class="form-control col-2" name="valor" id="edit_valor" placeholder="Codigo de articulo..." required style="text-transform:uppercase;" readonly>
			    <input type="text" class="form-control" name="cod_barra" id="edit_cod_barra" placeholder="Codigo de barra..." required style="text-transform:uppercase;">
			  </div>
			  <div class="form-group">
			  	<span>Proveedor</span>
			  	<select class="form-control custom-select" name="proveedor" id="edit_proveedor" onchange="llamar_marcas();"  required style="text-transform:uppercase;">
			  		
			  	</select>
			  </div>

			   <div class="form-group">
			   	<span>Marca</span>
			  	<select class="form-control custom-select" name="marca" id="edit_marca" required style="text-transform:uppercase;">
			  		
			  	</select>
			  </div>

			   <div class="form-group">
			   	<span>Descripcion</span>
			    <input type="text" class="form-control" name="descripcion" id="edit_descripcion" placeholder="Ingrese descripcion..." required style="text-transform:uppercase;">
			  </div>

			   <div class="form-group">
			   	<span>Ubicacion</span>
			    <input type="text" class="form-control col-6" name="ubicacion" id="edit_ubicacion" placeholder="Ubicacion..." required style="text-transform:uppercase;"> 
			  </div>

			  <div class="form-group">
			  	<span>Costo</span>
			    <input type="text" class="form-control col-6" name ="costo" id="edit_costo" placeholder="Costo..." required style="text-transform:uppercase;" onkeyup="calcular_precio_edit();"> 
			  </div>
			 	<span>Tipo Iva</span>
			 	<br />
			 	<select class="form-control custom-select  col-6" name="tipo_iva" id="edit_tipo_iva" required style="text-transform:uppercase;" onchange="calcular_precio_edit();">
			  		<option value="21">21%</option>
			  		<option value="10.5">10,5%</option>
			  		<option value="0">0%</option>
			  	</select>

			  	<div class="form-group">
			  		<span>Ganancia</span>
			  	  <input type="text" class="form-control col-6" name="ganancia" id="edit_ganancia" placeholder="Ganancia..." required style="text-transform:uppercase;" onkeyup="calcular_precio_edit();">
			  	</div>

			  	<div class="form-group">
			  		<span>P. S/IVA</span>
			  	  <input type="text" class="form-control col-6" name="p_siva" id="edit_p_siva" placeholder="Precio S/IVA..." required style="text-transform:uppercase;" readonly>
			  	</div>

			  	<div class="form-group">
			  		<span>P. C/IVA</span>
			  	  <input type="text" class="form-control col-6" name="p_iva" id="edit_p_iva" placeholder="Precio Venta..." required style="text-transform:uppercase;" readonly>
			  	</div>

			  	<div class="form-group">
			  		<span>Existencia Minima</span>
			  	  <input type="text" class="form-control col-6" name="existencia" id="edit_existencia" placeholder="Cantidad minima..." required style="text-transform:uppercase;">
			  	</div>
			  <div class="form-group text-right mt-5">
			  	<button type="button" class="btn btn-primary " onclick="articulos_editar();">Guardar</button>
			 	 <button type="button" class="btn btn-danger t" data-dismiss="modal">Cancelar</button>
			  </div>
			  
			</form>
      </div>
    </div>
  </div>
</div>
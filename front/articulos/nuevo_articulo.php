<div class="modal" id="nuevoArticulo" tabindex="-1" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary">Nuevo Articulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formNuevo" method="POST" action="">
			  <div class="form-group">
			    <input type="text" class="form-control" name="cod_barra" id="cod_barra" placeholder="Codigo de barra..." required style="text-transform:uppercase;">
			  </div>
			  <div class="form-group">
			  	<span>Proveedor</span>
			  	<select class="form-control custom-select" name="proveedor" id="proveedor" onchange="llamar_marcas();"  required style="text-transform:uppercase;">
			  		
			  	</select>
			  </div>

			   <div class="form-group">
			   	<span>Marca</span>
			  	<select class="form-control custom-select" name="marca" id="marca" required style="text-transform:uppercase;">
			  		
			  	</select>
			  </div>

			   <div class="form-group">
			    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese descripcion..." required style="text-transform:uppercase;">
			  </div>

			   <div class="form-group">
			    <input type="text" class="form-control col-6" name="ubicacion" id="ubicacion" placeholder="Ubicacion..." required style="text-transform:uppercase;"> 
			  </div>

			  <div class="form-group">
			    <input type="text" class="form-control col-6" name ="costo" id="costo" placeholder="Costo..." required style="text-transform:uppercase;" onkeyup="calcular_precio();"> 
			  </div>
			 	<span>Tipo Iva</span>
			 	<br />
			 	<select class="form-control custom-select  col-6" name="tipo_iva" id="tipo_iva" required style="text-transform:uppercase;" onchange="calcular_precio();">
			  		<option value="21">21%</option>
			  		<option value="10.5">10,5%</option>
			  		<option value="0">0%</option>
			  	</select>

			  	<div class="form-group">
			  	  <input type="text" class="form-control col-6" name="ganancia" id="ganancia" placeholder="Ganancia..." required style="text-transform:uppercase;" onkeyup="calcular_precio();">
			  	</div>

			  	<div class="form-group">
			  	  <input type="text" class="form-control col-6" name="p_siva" id="p_siva" placeholder="Precio S/IVA..." required style="text-transform:uppercase;" readonly>
			  	</div>

			  	<div class="form-group">
			  	  <input type="text" class="form-control col-6" name="p_iva" id="p_iva" placeholder="Precio Venta..." required style="text-transform:uppercase;" readonly>
			  	</div>

			  	<div class="form-group">
			  	  <input type="text" class="form-control col-6" name="existencia" id="existencia" placeholder="Cantidad minima..." required style="text-transform:uppercase;">
			  	</div>
			  <div class="form-group text-right mt-5">
			  	<button type="submit" class="btn btn-primary " onclick="articulos_nuevo();">Guardar</button>
			 	 <button type="button" class="btn btn-danger t" data-dismiss="modal">Cancelar</button>
			  </div>
			  
			</form>
      </div>
    </div>
  </div>
</div>
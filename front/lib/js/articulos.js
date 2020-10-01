function articulos_listar(){
  $.ajax({
      type: 'POST',
      data: '&id=2',
      url:   '../../back/articulos/funciones.php',
      dataType: 'json',
      
      success:  function (datos) {
        //console.log(datos)
        document.getElementById('tabla').innerHTML="";
        for ( i in datos) {
          document.getElementById('tabla').innerHTML+='<tr>'+
          "<td>" +  datos[i].codigo + "</td>"+
           "<td>" + datos[i].razon_social + "</td>"+
           "<td>" + datos[i].marca_desc + "</td>"+
           "<td>" + datos[i].descripcion + "</td>"+
           "<td>" + datos[i].ubicacion + "</td>"+
          "<td>" + datos[i].costo + "</td>"+
          "<td>" + datos[i].iva + "</td>"+
          "<td>" + datos[i].ganancia + "</td>"+
          "<td>" + datos[i].p_siva + "</td>"+
          "<td>" + datos[i].p_iva + "</td>"+
          "<td>" + datos[i].existencia + "</td>"+
          '<td>' + '<a href="#" onclick="articulos_ventana_editar(this)" ' + ' id="' +  datos[i].id + '"' + ' ><i class="fa fa-edit"></i></button>'+ ' | ' +
           '<a onclick="articulos_eliminar(this);"'  + 'id="' +  datos[i].id +'"'+ 'href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>' + '</td>'+
          '</tr>';            
          
        }
      }
    });

}

function articulos_ventana_editar( b ){ 
   $.ajax({
    type: 'POST',
      data: '&id=2' + '&art='+b.id,
      url:   '../../back/articulos/funciones.php',
      dataType: 'json',
      
      success:  function (datos) {
          console.log(datos)
          $(".modal-body #edit_valor").val(b.id)
          $(".modal-body #edit_cod_barra").val(datos[0].codigo)
          $(".modal-body #edit_proveedor").val(datos[0].id_proveedor)
          $(".modal-body #edit_marca").val(datos[0].id_marca)
          $(".modal-body #edit_descripcion").val(datos[0].descripcion)
          $(".modal-body #edit_ubicacion").val(datos[0].ubicacion)
          $(".modal-body #edit_costo").val(datos[0].costo)
          $(".modal-body #edit_tipo_iva").val(datos[0].iva)
          $(".modal-body #edit_ganancia").val(datos[0].ganancia)
          $(".modal-body #edit_p_siva").val(datos[0].p_siva)
          $(".modal-body #edit_p_iva").val(datos[0].p_iva)
          $(".modal-body #edit_existencia").val(datos[0].existencia)

          $('#editarArticulo').modal('show')     
        
      }
    });
   

  }

  function articulos_nuevo(){
    var cod_barra=document.getElementById('cod_barra').value;
    var proveedor=document.getElementById('proveedor').value;
    var marca=document.getElementById('marca').value;
    var descripcion=document.getElementById('descripcion').value;
    var ubicacion=document.getElementById('ubicacion').value;
    var costo=document.getElementById('costo').value;
    var tipo_iva=document.getElementById('tipo_iva').value;
    var ganancia=document.getElementById('ganancia').value;
    var p_siva=document.getElementById('p_siva');
    var p_iva=document.getElementById('p_iva');
    var existencia=document.getElementById('existencia').value;

    if (cod_barra.trim()=='' || proveedor.trim()=='' || marca.trim()=='' || descripcion.trim=='' || 
        ubicacion.trim()=='' || costo.trim()=='' || ganancia.trim()=='' || existencia.trim()=='') {
      alert("😡😡😡 Complete todos los campos antes de guardar");
    }else{
      jQuery.ajax({
          type: "POST",
          url: "../../back/articulos/funciones.php",
          data: $('#formNuevo').serialize() +  '&id=1',
          cache: false,
          success: function(response)
          {
            $("#nuevoArticulo .close").click()
            articulos_listar();
          }
        });                   

    }

    
  
}

  function articulos_editar(){
   var user=document.getElementById("edit_valor");

    jQuery.ajax({
          type: "POST",
          url: "../../back/articulos/funciones.php",
          data: $('#formEditar').serialize() + '&art='+user.value+ '&id=3',
          cache: false,
          success: function(response)
          {
            $("#editarArticulo").modal('hide');
            articulos_listar();
          }
        });                   
  
}

  function articulos_eliminar(b){
   var art=b.id;
   var confirma;
   confirma=confirm("¿Desea ELIMINAR el proveedor seleccionado?");

   if (confirma) {
      jQuery.ajax({
          type: "POST",
          url: "../../back/articulos/funciones.php",
          data:'&art='+art+ '&id=4',
          cache: false,
          success: function(response)
          {
            articulos_listar();
          }
        });          
   }       
  
}

function llamar_proveedores(){
  $.ajax({
      type: 'POST',
      data: '&id=5',
      url:   '../../back/articulos/funciones.php',
      dataType: 'json',
      
      success:  function (datos) {
        document.getElementById('proveedor').innerHTML=''
        document.getElementById('edit_proveedor').innerHTML=''
        
        console.log(datos)
        for ( i in datos) {
          document.getElementById('proveedor').innerHTML+='<option value=' + datos[i].id +'>' + datos[i].razon_social + '</option>>'
          document.getElementById('edit_proveedor').innerHTML+='<option value=' + datos[i].id +'>' + datos[i].razon_social + '</option>>'
          
        }
      }
    });

}

function llamar_marcas(){
   prov=document.getElementById('proveedor').value
  $.ajax({
      type: 'POST',
      data: '&id=6' + '&prov='+prov,
      url:   '../../back/articulos/funciones.php',
      dataType: 'json',
      
      success:  function (datos) {
        document.getElementById('marca').innerHTML=''
        
        
        for ( i in datos) {
          document.getElementById('marca').innerHTML+='<option value=' + datos[i].id +'>' + datos[i].descripcion + '</option>>'
      
          
        }
      }
    });

}

function llamar_marcas_edit(){
   //prov=document.getElementById('proveedor').value
  $.ajax({
      type: 'POST',
      data: '&id=6',
      url:   '../../back/articulos/funciones.php',
      dataType: 'json',
      
      success:  function (datos) {
      
        document.getElementById('edit_marca').innerHTML=''
        
        for ( i in datos) {
          document.getElementById('edit_marca').innerHTML+='<option value=' + datos[i].id +'>' + datos[i].descripcion + '</option>>'
          
        }
      }
    });

}


function calcular_precio(){
  costo=document.getElementById('costo').value;
  tipo_iva=document.getElementById('tipo_iva').value;
  ganancia=document.getElementById('ganancia').value;
  p_siva=document.getElementById('p_siva');
  p_iva=document.getElementById('p_iva');

  parcial=(parseFloat(costo)*parseFloat(ganancia)/100)+parseFloat(costo);
  parcial_iva=parseFloat(parcial)*parseFloat(tipo_iva)/100+parseFloat(parcial);

  p_siva.value=parcial;
  p_iva.value=parcial_iva;



}

function calcular_precio_edit(){
  let costo=document.getElementById('edit_costo').value;
  let tipo_iva=document.getElementById('edit_tipo_iva').value;
  let ganancia=document.getElementById('edit_ganancia').value;
  let p_siva=document.getElementById('edit_p_siva');
  let p_iva=document.getElementById('edit_p_iva');

  parcial=(parseFloat(costo)*parseFloat(ganancia)/100)+parseFloat(costo);
  parcial_iva=parseFloat(parcial)*parseFloat(tipo_iva)/100+parseFloat(parcial);

  p_siva.value=parcial;
  p_iva.value=parcial_iva;



}
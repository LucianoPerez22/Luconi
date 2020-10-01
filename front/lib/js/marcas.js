function marcas_listar(){
  $.ajax({
      type: 'POST',
      data: '&id=2',
      url:   '../../back/marcas/funciones.php',
      dataType: 'json',
      
      success:  function (datos) {
         document.getElementById('tabla').innerHTML='';
        for ( i in datos) {
          document.getElementById('tabla').innerHTML+='<tr>'+
          "<td>" +  datos[i].id + "</td>"+
           "<td>" + datos[i].razon_social + "</td>"+
           "<td>" + datos[i].descripcion + "</td>"+
           '<td>' + '<a href="#" onclick="marcas_ventana_editar(this)" ' + ' id="' +  datos[i].id + '"' + ' ><i class="fa fa-edit"></i></button>'+ ' | ' +
           '<a onclick="marcas_eliminar(this);"'  + 'id="' +  datos[i].id +'"'+ 'href=""><i class="fa fa-trash" aria-hidden="true"></i></a>' + '</td>'+
          '</tr>';            
          //data-toggle="modal" href="#editarProveedor" 
          //
        }
      }
    });

}

function marcas_ventana_editar( b ){ 
   $.ajax({
    type: 'POST',
      data: '&id=2' + '&marca='+b.id,
      url:   '../../back/marcas/funciones.php',
      dataType: 'json',
      
      success:  function (datos) {
        console.log(datos)
          $("#editarMarca .modal-body #valor").val(b.id)
          $("#editarMarca .modal-body #editar_proveedor").val(datos[0].id)
          $("#editarMarca .modal-body #editar_descripcion").val(datos[0].descripcion)


          $('#editarMarca').modal('show');     
        
      }
    });
   

  }

  function marcas_nuevo(){
    var proveedor=document.getElementById('proveedor').value;
    var descripcion=document.getElementById('descripcion').value;

    if (proveedor.trim()=='' || descripcion.trim()=='') {
      bootbox.alert("😡😡😡 Complete todos los datos, antes de Guardar");
      
    }else{
      jQuery.ajax({
          type: "POST",
          url: "../../back/marcas/funciones.php",
          data: $('#formNuevo').serialize() +  '&id=1',
          cache: false,
          success: function(response)
          {
           console.log(response)
            $("#nuevoMarca .close").click()
            marcas_listar();
          }
        });                

    }
       
  
}

  function marcas_editar(){
   var user=document.getElementById("valor");

    jQuery.ajax({
          type: "POST",
          url: "../../back/marcas/funciones.php",
          data: $('#formEditar').serialize() + '&marcas='+user.value+ '&id=3',
          cache: false,
          success: function(response)
          {
            $("#editarMarca").modal('hide');
            marcas_listar();
          }
        });                   
  
}

  function marcas_eliminar(b){
   var user=b.id;
   var confirma;
   confirma=confirm("¿Desea ELIMINAR el proveedor seleccionado?");

   if (confirma) {
      jQuery.ajax({
          type: "POST",
          url: "../../back/marcas/funciones.php",
          data:'&marca_id='+user+ '&id=4',
          cache: false,
          success: function(response)
          {
            marcas_listar();
          }
        });          
   }

             
  
}

function llamar_proveedores(){
  $.ajax({
      type: 'POST',
      data: '&id=5',
      url:   '../../back/marcas/funciones.php',
      dataType: 'json',
      
      success:  function (datos) {
        document.getElementById('proveedor').innerHTML=''
        document.getElementById('editar_proveedor').innerHTML=''
        console.log(datos)
        for ( i in datos) {
          document.getElementById('proveedor').innerHTML+='<option value=' + datos[i].id +'>' + datos[i].razon_social + '</option>>'
          document.getElementById('editar_proveedor').innerHTML+='<option value=' + datos[i].id +'>' + datos[i].razon_social + '</option>>'
          
        }
      }
    });

}

function proveedores_listar(){
  $.ajax({
      type: 'POST',
      data: '&id=2',
      url:   '../../back/proveedores/funciones.php',
      dataType: 'json',
      
      success:  function (datos) {
        document.getElementById('tabla').innerHTML="";
        for ( i in datos) {
          document.getElementById('tabla').innerHTML+='<tr>'+
          //"<td>" +  datos[i].fecha + "</td>"+
           "<td>" + datos[i].razon_social + "</td>"+
           //"<td>" + datos[i].tipo_cuenta+ "</td>"+
           //"<td>" + datos[i].cod_postal + "</td>"+
           "<td>" + datos[i].provincia + "</td>"+
           "<td>" + datos[i].localidad + "</td>"+
           "<td>" + datos[i].direccion + "</td>"+
           "<td>" + datos[i].cuit + "</td>"+
           "<td>" + datos[i].tipo_iva + "</td>"+
           "<td>" + datos[i].telefonos + "</td>"+
           "<td>" + datos[i].email + "</td>"+
           "<td>" + datos[i].contacto + "</td>"+
           '<td>' + '<a href="#" onclick="proveedores_ventana_editar(this)" ' + ' id="' +  datos[i].id + '"' + ' ><i class="fa fa-edit"></i></button>'+ ' | ' +
           '<a onclick="proveedores_eliminar(this);"'  + 'id="' +  datos[i].id +'"'+ 'href=""><i class="fa fa-trash" aria-hidden="true"></i></a>' + '</td>'+
          '</tr>';            
          //data-toggle="modal" href="#editarProveedor" 
          //
        }
      }
    });

}

function proveedores_ventana_editar( b ){ 
   $.ajax({
    type: 'POST',
      data: '&id=2' + '&prov='+b.id,
      url:   '../../back/proveedores/funciones.php',
      dataType: 'json',
      
      success:  function (datos) {
          let tipoIVA=""
          $(".modal-body #valor").val(datos[0].id)
          $(".modal-body #razon_social").val(datos[0].razon_social)

          tipoCta= datos[0].tipo_cuenta
          if(tipoCta=='CONTADO' || tipoCta=='Contado') {
            $(".modal-body #tipo_cuenta").val("Contado")
            }else{
                $(".modal-body #tipo_cuenta").val("Credito")
              }

          //$(".modal-body #tipo_cuenta").val(datos[0].tipo_cuenta)
          $(".modal-body #cod_postal").val(datos[0].cod_postal)
          $(".modal-body #provincia").val(datos[0].provincia)
          $(".modal-body #localidad").val(datos[0].localidad)
          $(".modal-body #direccion").val(datos[0].direccion)
          $(".modal-body #cuit").val(datos[0].cuit)

          
          tipoIVA=datos[0].tipo_iva
          if(tipoIVA=='RI') {
            $(".modal-body #tipo_iva").val("RI")
            }else if(tipoIVA=='MO'){
              $(".modal-body #tipo_iva").val("MO")

              }else{
                $(".modal-body #tipo_iva").val("EX")
              }
            

          //$(".modal-body #tipo_iva").val(datos[0].tipo_iva)
          $(".modal-body #telefonos").val(datos[0].telefonos)
          $(".modal-body #email").val(datos[0].email)
          $(".modal-body #contacto").val(datos[0].contacto)

          $('#editarProveedor').modal('show');     
        
      }
    });
   

  }

  function proveedores_nuevo(){

    var razon = document.getElementById('razon').value;
    
    var tipo_cuenta = document.getElementById('tipo_cuenta').value;
    
    var cod_postal = document.getElementById('cod_postal').value;
    
    var provincia = document.getElementById('provincia').value;
    
    var localidad = document.getElementById('localidad').value;
    
    var direccion = document.getElementById('direccion').value;
    
    var cuit = document.getElementById('cuit').value;
    
    var tipo_iva = document.getElementById('tipo_iva').value;
    
    var telefonos = document.getElementById('telefonos').value;
    
    var email = document.getElementById('email').value;
    
    var contacto = document.getElementById('contacto').value;
    

    if (razon.trim()=='' || tipo_cuenta.trim()=='' || cod_postal.trim()=='' || provincia.trim()=='' || 
        localidad.trim()=='' || direccion.trim()==''
        || cuit.trim()=='' || tipo_iva.trim()=='' || telefonos.trim()=='' || email.trim()=='' || 
          contacto.trim()=='') {

        bootbox.alert("😡😡😡 Complete todos los datos, antes de Guardar");
       
    }else{
      jQuery.ajax({
          type: "POST",
          url: "../../back/proveedores/funciones.php",
          data: $('#formNuevo').serialize() +  '&id=1',
          cache: false,
          success: function(response)
          {
            //$("#nuevoProveedor").modal('hide');
           //$('#nuevoProveedor').modal('toggle'); 
            $("#nuevoProveedor .close").click()
            proveedores_listar();
          }
        });                  

    }

     
  
}

  function proveedores_editar(){
   var user=document.getElementById("valor");

    jQuery.ajax({
          type: "POST",
          url: "../../back/proveedores/funciones.php",
          data: $('#formEditar').serialize() + '&user='+user.value+ '&id=3',
          cache: false,
          success: function(response)
          {
            $("#editarProveedor").modal('hide');
            proveedores_listar();
          }
        });                   
  
}

  function proveedores_eliminar(b){
   var user=b.id;
   var confirma;
   confirma=confirm("¿Desea ELIMINAR el proveedor seleccionado?");

   if (confirma) {
      jQuery.ajax({
          type: "POST",
          url: "../../back/proveedores/funciones.php",
          data:'&user='+user+ '&id=4',
          cache: false,
          success: function(response)
          {
            proveedores_listar();
          }
        });          
   }

             
  
}
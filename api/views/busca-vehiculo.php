<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
  <div class="container">
    <div class="card mt-5">
      <div class="card-header bg-dark">
        <h3 class="text-light text-center fw-bold">Buscador de Vehiculos</h3>
      </div>
      <div class="card-body">
        <form action="" id="formBusqueda" autocomplete="off">   
          <div class="card-body bg-light ">       
              <h1>Placa: </h1>          
              <div class="input-group mb-3">
                <input type="text" maxlength="7" class="form-control" placeholder="Placa Buscada" id="placa" autofocus>
                <button class="btn btn-lg btn-dark" type="button" id="buscar">Buscar placas</button>
              </div>
              <small id="status">No hay busquedas activas</small>
          </div>
          <div class="mb-3 mt-4">
            <label for="marca" class="form-label fw-bold">Marca:</label>
            <input type="text" id="marca" class="form-control" readonly>
          </div>
          <div class="mb-3">
            <label for="modelo" class="form-label fw-bold">Modelo:</label>
            <input type="text" id="modelo" class="form-control" readonly>
          </div>
          <div class="mb-3">
            <label for="color" class="form-label fw-bold">Color:</label>
            <input type="text" id="color" class="form-control" readonly>
          </div>
          <div class="mb-3">
            <label for="tipocombustible" class="form-label fw-bold">Tipo de Combustible:</label>
            <input type="text" id="tipocombustible" class="form-control" readonly>
          </div>
          <div class="mb-3">
            <label for="peso" class="form-label fw-bold">Peso:</label>
            <input type="text" id="peso" class="form-control" readonly>
          </div>
          <div class="mb-3">
            <label for="afabricacion" class="form-label fw-bold">Año de Fabricacion:</label>
            <input type="text" id="afabricacion" class="form-control" readonly>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", ()=>{

      function $(id) {return document.querySelector(id)}

      function buscarPlaca(){
        const placa = $("#placa").value

        if(placa != ""){
          const parametros = new FormData()
          parametros.append("operacion", "search")
          parametros.append("placa", placa)
          
          $("#status").innerHTML = "Buscando, por favor espere..."
          fetch(`../controllers/Vehiculo.controller.php`, {
            method: "POST",
            body: parametros
          })         
            .then(respuesta => respuesta.json())
            .then(datos => {              
              console.log(datos)
              if (!datos){
                $("#status").innerHTML = "No se encontro el registro 😂";
                $("#formBusqueda").reset()
                $("#placa").focus()
              }
              else{
                $("#status").innerHTML = "Vehiculo encontrado";
                $("#marca").value = datos.marca
                $("#modelo").value = datos.modelo
                $("#color").value = datos.color
                $("#tipocombustible").value = datos.tipocombustible
                $("#peso").value = datos.peso
                $("#afabricacion").value = datos.afabricacion
              }
            })
            .catch(e => {
              console.error(e)
            })
        }
      }

      $("#placa").addEventListener("keypress", (event)=>{
        if(event.keyCode == 13){
          buscarPlaca()
        }
      })


      $("#buscar").addEventListener("click", buscarPlaca)
        buscarPlaca()
      })
  </script>
  
  </body>
</html>

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
      <div
        class="modal fade"
        id="modalId1"
        tabindex="-1"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        
        role="dialog"
        aria-labelledby="modalTitleId"
        aria-hidden="true"
        >
        <div
          class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-dialog modal-lg modal-sm"
          role="document"
        >
          <div class="modal-content">
            <div class="modal-header bg-dark ">
              <h5 class="modal-title text-light text-center fw-bold" id="modalTitleId">
                Registrar
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="card">                        
                  <div class="card-body">
                    <form action="" id="formEmpleado" autocomplete="off">
                      <div class="mb-3 mt-4">
                        <label for="sede" class="form-label fw-bold">Sede:</label>
                        <select name="sede" id="sede" class="form-select" required>
                          <option value="">Seleccione</option>
                          
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="apellidos" class="form-label fw-bold">Apellidos:</label>
                        <input type="text" id="apellidos" class="form-control" required>
                      </div>
                      <div class="mb-3">
                        <label for="nombres" class="form-label fw-bold">Nombres:</label>
                        <input type="text" id="nombres" class="form-control" required>
                      </div>
                      <div class="mb-3">
                        <label for="nrodocumento" class="form-label fw-bold">Nº Documento:</label>
                        <input type="text" id="nrodocumento" class="form-control" maxlength="8" required>
                      </div>
                      <div class="mb-3">
                        <label for="fechanac" class="form-label fw-bold">Fecha Nacimiento:</label>
                        <input type="date" id="fechanac" class="form-control" required>
                      </div>
                      <div class="mb-3">
                        <label for="telefono" class="form-label fw-bold">Telefono:</label>
                        <input type="text" id="telefono" class="form-control" maxlength="9" required>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-danger"
                          data-bs-dismiss="modal"              
                        >
                          Cerrar
                        </button>
                        <button class="btn btn-secondary" id="btnReset">Resetear</button>
                        <button class="btn btn-primary" type="submit">Confirmar</button>
                        
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

      <div
        class="modal fade"
        id="modalId2"
        tabindex="-1"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        
        role="dialog"
        aria-labelledby="modalTitleId"
        aria-hidden="true"
        >
        <div
          class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-dialog modal-lg modal-sm"
          role="document"
        >
          <div class="modal-content">
            <div class="modal-header bg-dark ">
              <h5 class="modal-title text-light text-center fw-bold" id="modalTitleId">
                Buscar Empleado
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="card">                        
                  <div class="card-body">
                    <form action="" id="formEmpleadoBuscar" autocomplete="off">
                      <div class="card-body bg-light ">    
                        <div class="input-group mb-3">
                          <input type="text" maxlength="8" class="form-control" placeholder="Nº Documento" id="buscarNrodocumento" autofocus>
                          <button class="btn btn-lg btn-dark" type="button" id="btnBuscar">Buscar</button>
                        </div>
                        <small id="status">No hay busquedas activas</small>
                      </div>
                      <div class="mb-3">
                        <label for="sedeEmp" class="form-label fw-bold">Sede:</label>
                        <input type="text" id="sedeEmp" class="form-control" readonly>
                      </div>
                      <div class="mb-3">
                        <label for="apellidosEmp" class="form-label fw-bold">Apellidos:</label>
                        <input type="text" id="apellidosEmp" class="form-control" readonly>
                      </div>
                      <div class="mb-3">
                        <label for="nombresEmp" class="form-label fw-bold">Nombres:</label>
                        <input type="text" id="nombresEmp" class="form-control" readonly>
                      </div>
                      <div class="mb-3">
                        <label for="nrodocumentoEmp" class="form-label fw-bold">Nº Documento:</label>
                        <input type="text" id="nrodocumentoEmp" class="form-control" maxlength="8" readonly>
                      </div>
                      <div class="mb-3">
                        <label for="fechanacEmp" class="form-label fw-bold">Fecha Nacimiento:</label>
                        <input type="text" id="fechanacEmp" class="form-control" readonly>
                      </div>
                      <div class="mb-3">
                        <label for="telefonoEmp" class="form-label fw-bold">Telefono:</label>
                        <input type="text" id="telefonoEmp" class="form-control" maxlength="9" readonly>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-danger"
                          data-bs-dismiss="modal"
                          id="btnCerrarModalBuscarEmp"
                        >
                          Cerrar                        
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>

      <div class="card mt-2">
        <div class="card-header bg-light ">
          <div class="row p-4 ">                                                
            <button type="button" class="btn btn-success col-md-5 container" id="btnRegistrar" data-bs-toggle="modal"
            data-bs-target="#modalId1">Registrar</button>          
            <button type="button" class="btn btn-info col-md-5 container" data-bs-toggle="modal"
            data-bs-target="#modalId2">Buscar</button>            
          </div>          
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id Empleado</th>
                <th scope="col">Sede</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">N° Documento</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Telefono</th>
              </tr>
            </thead>
            <tbody id="empleadoTable">
                     
            </tbody>
          </table>
        </div>        
      </div> 

      <div class="container mt-3">
        <div class="bg-light">      
          <div class="card-body container fg-light" id="grafico" style="width: 600px; height: 400px;">
          </div>
        </div>
      </div>   

    </div>
    
    <script>
      document.addEventListener("DOMContentLoaded", ()=>{
        function $(id) {return document.querySelector(id)}
        let sedes = [];
        let empleadosPorSede = {};
        (function(){
          fetch(`../controllers/Empleado.controller.php?operacion=listar`, {})
            .then(respuesta => respuesta.json())
            .then(datos => {
              console.log(datos)
              
              datos.forEach(dato => {
                const empleadoRow = document.createElement("tr")
                
                Object.values(dato).forEach(value => {
                  const empleadoData = document.createElement("td")
                  empleadoData.innerHTML = value;
                  empleadoRow.appendChild(empleadoData);
                });
                console.log("los empleados: ", dato.sede)
                $("#empleadoTable").appendChild(empleadoRow)
                // Incrementar el contador por sede
                if (empleadosPorSede[dato.sede]) {
                  empleadosPorSede[dato.sede]++;
                } else {
                  empleadosPorSede[dato.sede] = 1;
                }
              });
              configGrafico();
            })
            .catch(e=>{
              console.error(e)
            })
        })();

        (function(){
          fetch(`../controllers/Sede.controller.php?operacion=listar`, {})
            .then(respuesta => respuesta.json())
            .then(datos => {
              console.log(datos)
              
              let tagOption;
              datos.forEach(dato => {         
                sedes.push(dato.sede)
                tagOption = document.createElement("option")
                tagOption.value = dato.idsede
                tagOption.innerHTML = dato.sede
                console.log("sede es: ", dato.sede)
                $("#sede").appendChild(tagOption)
                
              });
              configGrafico()
            })
            .catch(e=>{
              console.error(e)
            })
        })()
        console.log("las sedes: ", sedes)
        function buscarEmpleado(){
          const nrodocumentoEmpleado = $("#buscarNrodocumento").value

          if(nrodocumentoEmpleado != ""){
            const parametros = new FormData()
            parametros.append("operacion", "obtenerEmpleado")
            parametros.append("nrodocumento", nrodocumentoEmpleado)
            
            $("#status").innerHTML = "Buscando, por favor espere..."
            fetch(`../controllers/Empleado.controller.php`, {
              method: "POST",
              body: parametros
            })         
              .then(respuesta => respuesta.json())
              .then(datos => {              
                console.log(datos)
                if (!datos){
                  $("#status").innerHTML = "No se encontro el registro 😬";
                  $("#formEmpleadoBuscar").reset()
                  $("#buscarNrodocumento").focus()
                }
                else{
                  $("#status").innerHTML = "Empleado encontrado";
                  $("#sedeEmp").value = datos.sede
                  $("#apellidosEmp").value = datos.apellidos
                  $("#nombresEmp").value = datos.nombres
                  $("#nrodocumentoEmp").value = datos.nrodocumento
                  $("#fechanacEmp").value = datos.fechanac
                  $("#telefonoEmp").value = datos.telefono
                }
              })
              .catch(e => {
                console.error(e)
              })
          }
        }

        function configGrafico(){
          
          var myChart = echarts.init(document.querySelector('#grafico'));
          const nombresSedes = Object.keys(empleadosPorSede);
          const cantidadEmpleados = nombresSedes.map((sede) => empleadosPorSede[sede]);
          var option = {
            title: {
              text: 'Cantidad de empleados por sedes'
            },              
            tooltip: {},
            legend: {
              data: ['sales']
            },
            xAxis: {
              data: nombresSedes
            },
            yAxis: {},
            series: [
              {           
                type: 'bar',
                data: cantidadEmpleados
              }
            ]


            }
          myChart.setOption(option);
        }


        $("#formEmpleado").addEventListener("submit", (event)=>{
          //Evitamos el envio por ACTION
          event.preventDefault()
          
          //Enviare por AJAX (fetch)
          if(confirm("¿desea registrar este vehiculo?")){
            
            const parametros = new FormData()
            parametros.append("operacion", "add") //IMPORTATEEE
            //A partir de este punto las variables que requiere el SPU
            parametros.append("idsede", $("#sede").value)
            parametros.append("apellidos", $("#apellidos").value)
            parametros.append("nombres", $("#nombres").value)
            parametros.append("nrodocumento", parseInt($("#nrodocumento").value))
            parametros.append("fechanac", $("#fechanac").value)
            parametros.append("telefono", parseInt($("#telefono").value))

            fetch(`../controllers/Empleado.controller.php`, {
              method: 'POST',
              body: parametros
            })
              .then(respuesta => respuesta.json())
              .then(datos => {
                console.log(datos)
                const idEmpleado = datos.idempleado
                if(idEmpleado > 0){
                  $("#formEmpleado").reset()
                  console.log(idEmpleado)
                  alert(`Proceso terminado correctamente`)
                  window.location.reload()
                }              
              })
              .catch(e => {
                console.error(e);
              })
          }
        })

        $("#btnReset").addEventListener("click", (event)=>{
          $("#formEmpleado").reset()
          
        })

        $("#btnBuscar").addEventListener("click", ()=>{
          buscarEmpleado()
        })

        $("#buscarNrodocumento").addEventListener("keypress", (event)=>{
        if(event.keyCode == 13){
          buscarEmpleado()
        }

        $("#btnCerrarModalBuscarEmp").addEventListener("click", ()=>{
          $("#formEmpleadoBuscar").reset()
          $("#status").innerHTML = "No hay busquedas activas"
        })

      })

      })
    </script>

    <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
    ></script>

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"
    ></script>

    <script src="
    https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js
    "></script>

  </body>
</html>

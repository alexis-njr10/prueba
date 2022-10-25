<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body onload="init();">
     <div class="container table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Contact_no</th>
                <th scope="col">Lastname</th>
                <th scope="col">Createdtime</th>
              </tr>
            </thead>
            <tbody id="data">

            </tbody>
          </table>
          <button type="button" class="btn btn-success" onclick="data(true)">Listar datos</button>
          <button type="button" class="btn btn-danger" onclick="data(false)">Vaciar tabla</button>
     </div>

<script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>

<script>
  async function data(bandera) {
    if(bandera){
      document.getElementById("data").innerHTML=  await peticion();
    }else{       
      document.getElementById("data").innerHTML="Tabla vacia"
    }
  }
  function init(){
    document.getElementById("data").innerHTML="Tabla vacia"
  } 
</script>
</body>
</html>

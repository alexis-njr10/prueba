<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Errores</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container fluid mt-2">
<div class="card text-center">
  <div class="card-header error">
    Error
  </div>
  <div class="card-body">
    <h5 class="card-title">Se presento el siguiente error:</h5>
    <p class="card-text"><?php echo $this->mensaje;?></p>
    <a href="<?php echo constant('URL'); ?>" class="btn btn-primary">Regresar</a>
  </div>
  <div class="card-footer text-muted error">
  © prueba
  </div>
</div>
</div>
 
</body>
</html>
<style>
  .error{
    background-color: red;
  }
</style>

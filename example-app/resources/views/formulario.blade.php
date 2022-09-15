
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/app.css">
    <title>Formulario</title>
</head>
<body>
<div class="container">
<div class="abs-center">
<form action="/guardar" class="border p-3 form" method="POST">
  
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Nombre:</label>
    <div class="col-sm-10">
      <input name="nombre" type="text" class="form-control" id="inputNombre">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputTelefono" class="col-sm-2 col-form-label">Telefono:</label>
    <div class="col-sm-10">
      <input name="telefono" type="number" class="form-control" id="inputTelefono" >
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail" class="col-sm-2 col-form-label">Email:</label>
    <div class="col-sm-10">
      <input name="email" type="email" class="form-control" id="inputEmail">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Registrarse</button>
    </div>
  </div>
</form>
</div> 
</div>    
</body>
</html>
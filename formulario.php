
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body class="bg-info">
   <?php
      include_once "menu.php";
  ?>
  <br>
  <center><h1 class=" col-8 bg-dark text-white">Formulario datos personales</h1></center>
 <form class="row g-3">


  <div class="col-md-3">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" maxlength="25" id="apellido" onkeypress="return validar(event)" value="" placeholder="Ingrese apellidos"required>
  </div>
  <div class="col-md-3">
    <label for="correo" class="form-label">Correo Electronico</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="e-mail" class="form-control" id="correo"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-3">
    <label for="direcion" class="form-label">Direcion</label>
    <input type="text" class="form-control" id="direcion" onkeypress="return validar(event)" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">Estado civil</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Opciones</option>
      <option>Soltero</option>
      <option>Casado</option>
      <option>Viudo</option>
      <option>Divorsiado</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="fecha_n" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fecha_n" required>
  </div>
  <div class="col-md-3">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="number" maxlength="10" class="form-control" id="telefono" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Acepto los términos y condiciones
      </label>
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Aceptar</button>
  </div>
</form>
</body>
</html>
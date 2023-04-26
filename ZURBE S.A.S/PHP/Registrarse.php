<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../images/demo/Logo Zurbe Official.png" type="image/x-icon">
  <link rel="stylesheet" href="../layout/styles/Registrarse.css">
  <title>ZURBE--Registrarse</title>
</head>

<body>
  <header>
    <p id="titulo">
      REGISTRARSE
    </p>
  </header>
  <main>
    <form method="post" name="form" action="create.php" id="block">
    <div class="form-group">
        <input type="text" name="nrodocumento" class="form-control" placeholder="Nro De Documento" autocomplete="off" required>
      </div>
      <div class="form-group">
        <input type="text" name="nombreusuario" class="form-control" placeholder="Nombre De Usuario" autocomplete="off" required>
      </div>
      <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="Email" autocomplete="off" required>
      </div>
      <div class="form-group">
        <input type="text" name="password" class="form-control" placeholder="Contraseña" autocomplete="off" required>
      </div>
      <div class="form-group">
        <input type="text" name="departamento" class="form-control" placeholder="Departamento" autocomplete="off" required>
      </div>
      <div class="form-group">
        <input type="text" name="ciudad" class="form-control" placeholder="Ciudad" autocomplete="off" required>
      </div>
      <div class="form-group">
        <input type="text" name="direccion" class="form-control" placeholder="Direccion" autocomplete="off" required>
      </div>
      <div class="form-group">
        <input type="number" name="telefono" class="form-control" placeholder="Nro Telefono" autocomplete="off" required>
      </div>
      <input type="submit" class="btn btn-success btn-block" name="send" value="Registrarse" id="submit">
    </form>
  </main>
</body>
</html>
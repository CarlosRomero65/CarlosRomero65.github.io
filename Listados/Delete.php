<!DOCTYPE HTML>  
<html>
<head>
  <title>EJERCICIOS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");
  $registros = mysqli_query($conexion, "select DNI from alumnos
                        where DNI=".$_REQUEST['eliminar']) or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from alumnos where DNI=".$_REQUEST['eliminar']) or
      die("Problemas en el select:" . mysqli_error($conexion));
    header('Location:Listados2.php');
  } else {
    echo "No existe el alumno.";
  }
  mysqli_close($conexion);
  ?>
</body>

</html>
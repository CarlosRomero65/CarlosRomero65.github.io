<html>

<head>
  <title>Problema</title>
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #aeff00;
  }


  div {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #00ffa6;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    margin-top: 1%;
  }
  p{
    background-color: white;
    margin-top: -8%;
  }

</style>
<body>
<form action="../Formularios.html" method="post">
  <input type="submit" value="Regresa">
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select nombre,apellido1,apellido2,DNI,Nacimiento,email,Localidad,sexo,username
                        from alumnos") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "<div>";
    echo "<hr>";
    echo "<p>"."Nombre:" . $reg['nombre'] . "</p>"."<br>";
    echo "<hr>";
    echo "<p>"."apellido1:" . $reg['apellido1'] . "</p>". "<br>";
    echo "<hr>";
    echo "<p>"."apellido2:" . $reg['apellido2'] . "</p>". "<br>";
    echo "<hr>";
    echo "<p>"."DNI:" . $reg['DNI'] . "</p>". "<br>";
    echo "<hr>";
    echo "<p>"."Nacimiento:" . $reg['Nacimiento'] . "</p>". "<br>";
    echo "<hr>";
    echo "<p>"."email:" . $reg['email'] . "</p>". "<br>";
    echo "<hr>";
    echo "<p>"."Localidad:" . $reg['Localidad'] . "</p>". "<br>";
    echo "<hr>";
    echo "<p>"."sexo:" . $reg['sexo'] . "</p>". "<br>";
    echo "<hr>";
    echo "<p>"."username:" . $reg['username'] . "</p>". "<br>";
    echo "<br>";
    
    echo "</div>";
  }

  mysqli_close($conexion);
  ?>

</body>

</html>
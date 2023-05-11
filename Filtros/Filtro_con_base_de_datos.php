<html>

<head>
  <title>PHP-MySQL1</title>
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #aeff00;
  }

  h1 {
    color: #333;
    text-align: center;
  }


  form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #00ffa6;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }


  label {
    display: block;
    margin-bottom: 10px;
  }

  input[type=text] {
    padding: 10px;
    width: 100%;
    border-radius: 3px;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

</style>
<head>
  <title>Problema</title>
</head>
<?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select DISTINCT Localidad
                        from alumnos;") or
    die("Problemas en el select:" . mysqli_error($conexion));
    
    
    ?>
<body>
  <form action="Base_de_datos.php" method="post">
    Ingrese tu Localidad:
    <select name="Localidad">
        <?php
        while($reg = mysqli_fetch_array($registros)){
          echo($reg['Localidad']);
          $salida=$reg['Localidad'];
          echo ('<option value="'.$salida.'">'.$salida.'</option>');
        };
        ?>

    <input type="submit" value="Filtrar">
    
    <br>
    Ingrese el genero que pertenezcas:
    <select name="sexo">
        <option value="Hombre">Hombre</option>
        <option value="Mujer">Mujer</option>
        <option value="Paloma tactica">Paloma tactica</option>
        <option value="otros:">otros</option>
    
  </form>
</body>

</html>
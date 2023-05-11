<html>

<head>
  <title>Problema</title>
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
<body>

  <?php

  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select * from alumnos
                        where email='$_REQUEST[emailEditar]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    ?>

    <form action="cambio.php" method="post">
      
      
      Ingrese nombre:
    <input type="text" pattern="^[A-ZÁÉÍÓÚÑ][a-záéíóúñ\s]*$" maxlength="40" name="nombre" required value="<?php echo $reg['nombre'] ?>"><br><br>
    Ingrese Apellidos:
    <input type="text" name="apellido1" pattern="^[A-ZÁÉÍÓÚÑ][a-záéíóúñ\s]*$" required value="<?php echo $reg['apellido1'] ?>">
    <br>
    <input type="text" name="apellido2" pattern="^[A-ZÁÉÍÓÚÑ][a-záéíóúñ\s]*$" required value="<?php echo $reg['apellido2'] ?>"><br><br>
    <br>
    
    Ingrese DNI:
    <input type="tel"  name="DNI" placeholder="12345678X" pattern="^[0-9]{8}[A-Z]{1}$" required value="<?php echo $reg['DNI'] ?>"><br><br>
    <br>
    
    Ingrese fecha de nacimiento:
    <input type="date" name="Nacimiento" value="<?php echo $reg['Nacimiento'] ?>"><br><br>
    <br>
    Ingrese el email:
      <input type="text" name="email" value="<?php echo $reg['email'] ?>"><br>
      <br>

    Introduce tu Localidad:
    <input type="text" name="Localidad" value="<?php echo $reg['Localidad'] ?>"><br><br>
    <br>
    ¿Cual es tu genero?
    <select id="sexo" name="sexo">
  <?php 
        if ($reg['sexo']=='Hombre'){
          echo "<option value='Hombre' selected>Hombre</option>";
        }else{
          echo "<option value='Hombre'>Hombre</option>";
        }
        if ($reg['sexo']=='Mujer'){
          echo "<option value='Mujer' selected>Mujer</option>";
        }else{
          echo "<option value='Mujer'>Mujer</option>";
        }
        if ($reg['sexo']=='Paloma tactica'){
          echo "<option value='Paloma tactica' selected>Paloma tactica</option>";
        }else{
          echo "<option value='Paloma tactica'>Paloma tactica</option>";
        }
        if ($reg['sexo']=='otros'){
          echo "<option value='otros' selected>otros</option>";
        }else{
          echo "<option value='otros'>otros</option>";
        }
        ?>
  Cuenta de twitter:
  <input type="text" name="username" pattern="^@([A-Za-z0-9_]{1,15})$" required value="<?php echo $reg['username'] ?>"><br><br>
  <input type="submit" value="Actualizar">

    </form>

    
  <?php
  } else
    echo "No existe alumno con dicho mail";
  ?>
</body>

</html>
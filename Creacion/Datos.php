<html>
<head>
  <title>PHP-MySQL1</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
      body {
        font-family: Arial, sans-serif;
        background-color: #aeff00;
      }

      h2 {
        color: #333;
        background-color:white;
        text-align: center;
        border-style: solid;
        margin-left:20%;
        margin-right:20%;
      }
      p {
        color: #333;
        background-color:white;
        text-align: center;
        border-style: solid;
        margin-left:20%;
        margin-right:20%;
      }

      img{
        margin-left:30%;
      }
      button{
        margin-left:50%;
      }

    </style>
<body>
<div class="w3-container">
  <h2>Felicidades</h2>
  <p>Gracias por completar el registros si quieres ver tus registros selecciona el boton con el nombre "VER"</p>
  <img src="icegif-3602.gif" alt="Trulli" width="500" height="333">.<br>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">VER</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById('id01').style.display='none'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Registros</h2>
      </header>
      <div class="w3-container">
      <?php

		$nombre = $_POST['nombre'];
		$apellido1 = $_POST['apellido1'];
		$apellido2 = $_POST['apellido2'];
		$nif = $_POST['DNI'];
		$fecha_nacimiento = $_POST['Nacimiento'];
		$email = $_POST['email'];
		$localidad = $_POST['Localidad'];
    $sexo = $_POST['sexo'];
		$cuenta = $_POST['username'];

			echo "<ul>";

			echo "<li>Nombre: $nombre</li>";

			echo "<li>Primer Apellido: $apellido1</li>";

			echo "<li>Segundo Apellido: $apellido2</li>";

			echo "<li>NIF: $nif</li>";

			echo "<li>Fecha Nacimiento: $fecha_nacimiento</li>";

			echo "<li>Email: $email</li>";

			echo "<li>Localidad: $localidad</li>";

      echo "<li>Sexo: $sexo</li>";
      
			echo "<li>Cuenta de Twitter: $cuenta</li>";

			echo "</ul>";

    ?>
</div>
      <footer class="w3-container w3-teal">
        <p>Modelo de datos</p>
      </footer>
    </div>
  </div>
</div>
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") 
    or die("Problemas con la conexión");

  mysqli_query($conexion, "insert into alumnos(nombre,apellido1,apellido2,DNI,Nacimiento,email,Localidad,sexo,username) values 
                       ('$_REQUEST[nombre]','$_REQUEST[apellido1]','$_REQUEST[apellido2]','$_REQUEST[DNI]','$_REQUEST[Nacimiento]','$_REQUEST[email]','$_REQUEST[Localidad]','$_REQUEST[sexo]','$_REQUEST[username]')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);
  ?>
</body>
</html>
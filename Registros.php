<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registro</title>
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

      button[type=submit] {
        background-color: #4CAF50;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 3px;
        cursor: pointer;
      }

    </style>
  </head>
  <body>
    <h1>REGISTRO</h1>
    <form method="POST" action="Registros.php">

      First name: <input type="text" id="nombre" name="nombre" pattern="^[A-ZÁÉÍÓÚÑ][a-záéíóúñ\s]*$" required><br><br><br>

        Last name 1:  <input type="text" name="apellido1" pattern="^[A-ZÁÉÍÓÚÑ][a-záéíóúñ\s]*$" required><br><br><br>
        Last name 2:  <input type="text" name="apellido2" pattern="^[A-ZÁÉÍÓÚÑ][a-záéíóúñ\s]*$" required><br><br><br>

      
        <label for="phone">NIF:</label><br>
        <input type="tel"  name="DNI" placeholder="12345678X" pattern="^[0-9]{8}[A-Z]{1}$" required><br><br>

        <label for="birthday">Nacimiento:</label><br>
        <input type="date" name="Nacimiento"><br><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email"><br><br>

        <label for="fname"> Localidad:</label><br>
        <input type="text" name="Localidad"><br><br>

      <label for="sexo">Sexo:</label>
		    <select id="sexo" name="sexo" required>
			    <option value="">Seleccione su género</option>
			    <option value="Hombre">Hombre</option>
			    <option value="Mujer">Mujer</option>
			    <option value="Paloma tactica">Paloma tactica</option>
          <option value="otros:">otros</option>
		  </select><br><br>
      Otros:<input type="text" id="nombre" name="otros"><br><br><br><br>

        <label for="username">Username:</label><br>
        <input type="text" name="username" pattern="^@([A-Za-z0-9_]{1,15})$" required><br><br>
        <label for="pwd">Password:</label><br>
        <input type="password" name="pwd"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nombre = $_POST['nombre'];
		$apellido1 = $_POST['apellido1'];
		$apellido2 = $_POST['apellido2'];
		$nif = $_POST['DNI'];
		$fecha_nacimiento = $_POST['Nacimiento'];
		$email = $_POST['email'];
		$localidad = $_POST['Localidad'];
    $sexo = $_POST['sexo'];
    $otros = $_POST['otros'];
		$cuenta = $_POST['username'];

    $nombre_comprobante = preg_match('/^[A-ZÁÉÍÓÚÑ][a-záéíóúñ\s]*$/', $nombre);

		$apellido1_comprobante = preg_match('/^[A-ZÁÉÍÓÚÑ][a-záéíóúñ\s]*$/', $apellido1);

		$apellido2_comprobante = preg_match('/^[A-ZÁÉÍÓÚÑ][a-záéíóúñ\s]*$/', $apellido2);

		$nif_comprobante = preg_match('/^[0-9]{8}[A-Z]{1}$/', $nif);

		$cuenta_comprobante = preg_match('/^@([A-Za-z0-9_]{1,15})$/', $cuenta);

    if (!$nombre_comprobante) {
			echo "<p>El nombre introducido no es válido. Debe comenzar con mayúscula y solo puede contener letras, espacios y tildes.</p>";
		}

		if (!$apellido1_comprobante) {
			echo "<p>El primer apellido introducido no es válido. Debe comenzar con mayúscula y solo puede contener letras, espacios y tildes.</p>";
		}

		if (!$apellido2_comprobante) {
			echo "<p>El segundo apellido introducido no es válido. Debe comenzar con mayúscula y solo puede contener letras, espacios y tildes.</p>";
		}

		if (!$nif_comprobante) {
			echo "<p>El DNI introducido no es válido. Debe tener 8 dígitos seguidos de una letra como se indica en a pista.</p>";
		}

		if (!$cuenta_comprobante) {
			echo "<p>La cuenta no es válida. Debe de comenzar con @.</p>";
		}

    if ($nombre_comprobante && $apellido1_comprobante && $apellido2_comprobante && $nif_comprobante) {
      


			echo "<h2>Los registros son:</h2>";
			echo "<ul>";

			echo "<li>Nombre: $nombre</li>";

			echo "<li>Primer Apellido: $apellido1</li>";

			echo "<li>Segundo Apellido: $apellido2</li>";

			echo "<li>NIF: $nif</li>";

			echo "<li>Fecha Nacimiento: $fecha_nacimiento</li>";

			echo "<li>Email: $email</li>";

			echo "<li>Localidad: $localidad</li>";

      if ($otros) {
        echo "<li>Sexo: $otros</li>";
      }
      else {
        echo "<li>Sexo: $sexo</li>";
      }
      
      

			echo "<li>Cuenta de Twitter: $cuenta</li>";

			echo "</ul>";
      
		}
	}
    ?>

  </body>
</html>

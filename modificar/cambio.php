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

  img{
        margin-left:30%;
      }

</style>
<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");
    
    $nombre = $_REQUEST['nombre'];
    $apellido1 = $_REQUEST['apellido1'];
    $apellido2 = $_REQUEST['apellido2'];
    $DNI = $_REQUEST['DNI'];
    $Nacimiento = $_REQUEST['Nacimiento'];
    $email= $_REQUEST['email'];
    $Localidad = $_REQUEST['Localidad'];
    $sexo= $_REQUEST['sexo'];
    $username = $_REQUEST['username'];



    
mysqli_query($conexion, "update alumnos
                        set nombre='$nombre',
                        apellido1='$apellido1',
                        apellido2='$apellido2',
                        DNI='$DNI',
                        Nacimiento='$Nacimiento',
                        email='$email',
                        Localidad='$Localidad',
                        sexo='$sexo',
                        username='$username'
                        
                    where email='$_REQUEST[email]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

      
    ?>

    <h1>Felicidades has relizado los cambios de este usuario correctamente</h1>
   
    <img src=" 4mlG.gif" alt="Trulli" width="500" height="333">.<br>
    
    <form action="../Formularios.html" method="post">
    <input type="submit" value="Regresar">
    </form>

</body>

</html>
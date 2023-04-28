<html>

<head>
  <title>Problema</title>
</head>
<style>
      body {
        font-family: Arial, sans-serif;
        background-color: #aeff00;
      }
      div{
         background-color: #00ffa6;
         border-radius: 5px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
          margin:5%;
          padding: 2%;
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

  $registros = mysqli_query($conexion, "select * from alumnos
                        where email='$_REQUEST[email]'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    mysqli_query($conexion, "delete from alumnos where email='$_REQUEST[email]'") or
      die("Problemas en el select:" . mysqli_error($conexion));
      
    echo "<div>"."Se efectuó el borrado del alumno con dicho email."."</div>";
  } else {
    echo "<div>"."No existe un alumno con ese email."."</div>";
  }
  mysqli_close($conexion);
  ?>
  <img src="over.gif" alt="Trulli" width="500" height="333">.<br>
</body>

</html>
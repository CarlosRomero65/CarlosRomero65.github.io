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
    background-color: #00ffa6;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }
  table, th, td {
  border: 1px solid black;
  
  padding-right:1%;
  background-color:white;
  
}



</style>
<body>
<form action="../Formularios.html" method="post">
  <input type="submit" value="Regresa">
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $Localidad2 = $_REQUEST['Localidad'];
    $sexo2 = $_REQUEST['sexo'];

  $registros = mysqli_query($conexion, "select nombre,apellido1,apellido2,DNI,Nacimiento,email,Localidad,sexo,username
                        from alumnos where Localidad='$Localidad2' and sexo='$sexo2'") or
    die("Problemas en el select:" . mysqli_error($conexion));
    ?>
    <table class="default">
    <tr>
  
      <th>Nombre</th>
      <th>apellido1</th>
      <th>apellido2</th>
      <th>DNI</th>
      <th>Nacimiento</th>
      <th>email</th>
      <th>Localidad</th>
      <th>sexo</th>
      <th>username</th>
  
    </tr>
    <?php
  while ($reg = mysqli_fetch_array($registros)) {
    
    
?>

  
  <tr>
    
    <td><?php echo $reg['nombre']?></td>
    <td><?php echo $reg['apellido1']?></td>
    <td><?php echo $reg['apellido2']?></td>
    <td><?php echo $reg['DNI']?></td>
    <td><?php echo $reg['Nacimiento']?></td>
    <td><?php echo $reg['email']?></td>
    <td><?php echo $reg['Localidad']?></td>
    <td><?php echo $reg['sexo']?></td>
    <td><?php echo $reg['username']?></td>
    <?php
    echo "<td> <a href='../Eliminacion/Delete.php?email=$reg[email]'>
    <img src='../goma.jpg' alt='Borar' width='30'/>
    </a> </td>";
    echo "<td> <a href='../modificar/modificacion.php?emailEditar=$reg[email]'>
    <img src='../lapiz.jpg' alt='Editar' width='30'/>
    </a> </td>";
    ?>
  </tr>


<?php
    echo "</div>";
  }

  mysqli_close($conexion);
  ?>
</table>
</body>

</html>
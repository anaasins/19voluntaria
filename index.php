<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <table>
      <tr>
        <td><a href="formulariodiscos.html">Discos</a></td>
        <td><a href="formulariocancion.html">Canciones</a></td>
        <td><a href="formularioletra.html">Letras</a></td>
      </tr>
    </table>
    <table border="1px">
      <tr>
        <th>ID ARTISTA</th>
        <th>NOMBRE</th>
        <th>PERIODO DE PRODUCCION</th>
        <th>GENERO</th>
        <th>CIUDAD</th>
        <th>PAIS</th>
      </tr>

    <?php
    include 'basedatos.php';
    $music=new Musica();
    $artistas=$music->artistas();
    while ($fila=$artistas->fetch_assoc()) {
      echo "<tr><td>".$fila["id_artista"] ."</td><td>" .$fila["Nombre"]."</td><td>" .$fila["Periodo"]."</td><td>" .$fila["Genero"]."</td><td>" .$fila["Ciudad"]."</td><td>" .$fila["Pais"]."</td></tr>";
      }
     ?>
     </table>
  </body>
</html>

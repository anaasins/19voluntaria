<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Canciones del disco seleccionado.</title>
  </head>
  <body>
    <table>
      <tr>
        <td><a href="index.php">Index</a></td>
        <td><a href="formulariodiscos.html">Discos</a></td>
        <td><a href="formularioletra.html">Letras</a></td>
      </tr>
    </table>
    <?php
      include 'basedatos.php';
      $music=new Musica();
     $cancion=$music->canciones($_POST["disco"]);
     while ($fila=$cancion->fetch_assoc()) {
       echo "<p>" .$fila["Titulo"] ."</p><hr>";
       }
     ?>
     </table>
  </body>
</html>

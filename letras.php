<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Letra de la cancion seleccionada</title>
  </head>
  <body>
    <table>
      <tr>
        <td><a href="index.php">Index</a></td>
        <td><a href="formulariodiscos.html">Discos</a></td>
        <td><a href="formulariocancion.html">Canciones</a></td>
      </tr>
    </table>
    <?php
      include 'basedatos.php';
      $music=new Musica();
     $letra=$music->letras($_POST["cancion"]);
     while ($fila=$letra->fetch_assoc()) {
       echo "<p>" .$fila["letra"] ."</p>";
       }
     ?>
  </body>
</html>

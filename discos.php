<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pagina de discos por artista.</title>
  </head>
  <body>
    <table>
      <tr>
        <td><a href="index.php">Index</a></td>
        <td><a href="formulariocancion.html">Canciones</a></td>
        <td><a href="formularioletra.html">Letras</a></td>
      </tr>
    </table>
    <table border="1px">
      <tr>
        <th>TITULO</th>
        <th>GENERO</th>
        <th>AÑO</th>
      </tr>

    <?php
      include 'basedatos.php';
      $music=new Musica();
     $disco=$music->discos($_POST["artista"]);
     while ($fila=$disco->fetch_assoc()) {
       echo "<tr><td>" .$fila["Titulo"] ."</td><td>" .$fila["Genero"] ."</td><td>" .$fila["Anyo"] ."</td></tr>";
       }
     ?>
     </table>
  </body>
</html>

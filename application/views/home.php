<html>
<head>
<title>Portada de mi sitio</title>
</head>
<body>
<h1>Bienvenido a mi web</h1>
<p>Esta es la portada de página web, basada en la publicación de artículos interesantes.</p>
<?php
while ($fila = mysql_fetch_array($listar)){
   echo '<p>';
   echo '<a href="' . site_url('/libros/muestra/' . $fila['id']) . '">' . $fila['titulo'] . '</a>';
   echo '</p>';
}
?>

</body>
</html> 

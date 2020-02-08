<html>
 <head>
  <title>Prueba Heroku Mateo</title>
 </head>
 <body>
 <?php echo '<p>Hola Mateo</p>'; ?>
 <?php
echo '¡Hola ' . htmlspecialchars($_GET["name"]) . '!';
?>
 </body>
</html>
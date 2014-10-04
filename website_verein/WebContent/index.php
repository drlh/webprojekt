<!DOCTYPE html>
 
<html>
 
<head>
    <title>Beispiel HTML5 Grundgerüst - www.html-seminar.de</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Kurzbeschreibung" />
 
    <link href="style.css" type="text/css" rel="stylesheet" />
 
</head>
 
<body>
 <?php 
    $in = "".$_GET['user'];
    echo "<h1>Hi</h1>";
    echo "<h1>".$in."</h1>";
    phpinfo();
    
 ?>
</body>
</html>
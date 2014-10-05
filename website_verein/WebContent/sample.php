<!DOCTYPE html>

<html>

	<head>
		<title>Verein Name</title>
		<meta charset="UTF-8" />
		<meta name="description" content="Kurzbeschreibung" />



	</head>

	<body>
		<a href="?page=home">Home</a>
		<a href="?page=nav1">Nav 1</a>
		<a href="?page=nav2">nav 2</a>
		<a href="?page=nav3">nav 3</a>

		<?php
        if (!isset($_GET['page']) or $_GET['page'] == "") 
        {
            $id = "home";
        } else {
            $id = "" . $_GET['page'];
        }
        
                    switch ($id) {
                case 'home' :
                    echo "<h1>home</h1>";
                    break;
                case 'nav1' :
                    echo "<h1>1</h1>";
                    break;
                case 'nav2' :
                    echo "<h1>2</h1>";
                    break;
                case 'nav3' :
                    echo "<h1>3</h1>";
                    break;
            }
		?>
	</body>
</html>
<div id="content" class="container">

	<?php
    if (!isset($_GET['id']) or $_GET['id'] == "") {
        $id = "home";
    } else {
        $id = "" . $_GET['id'];
    }

    include 'pages/' . $id . '.php';
	?>
	
</div>
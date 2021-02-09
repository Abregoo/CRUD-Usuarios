<?php $indexController = new IndexController(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pagina - <?php echo isset($_GET['action']) ? $_GET['action'] : "Login"; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<?php include("Imports/ImportCss.php"); ?>
</head>
<body class="bg-white-light">
	<?php $module = $indexController->actionListener(); ?>
	<?php include($module); ?>

	<?php include("Imports/ImportScripts.php"); ?>
</body>
</html>
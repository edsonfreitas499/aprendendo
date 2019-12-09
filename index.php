<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Exemplo</title>
</head>
<body>
	<h1>
		<?php
			if(isset($_GET["user name 1234"])) {
				echo base64_decode($_GET["user999999"]);
			} else {
				header("location:formulario.php");
			}
		?>
	</h1>
</body>
</html>
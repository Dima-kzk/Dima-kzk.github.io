<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="windows-1251">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHPTEST</title>
	</head>
	<body>
		<?php
		define('MYCONST','<h1>Прувэт!!!</h1>');
		echo '<br/>'.__LINE__.'<br/>';
		echo MYCONST;
		echo '<br/>';
		echo __FILE__;
		require 'partCod.php';
		?>
	</body>
</html>
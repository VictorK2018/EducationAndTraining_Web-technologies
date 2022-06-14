<?php
	error_reporting( error_reporting() & ~E_NOTICE )
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Counter</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<h1 class="title">Counter</h1>
		<form method="post" target="plus" action="plus.php">
			<input 	id="id_number" value="<?= $counter ?>"
					class="number" type="text" /> 
			<input 	name="submit" class="button1" type="submit" />
		<!--	
		    <input 	name="clear" class="button2" type="reset" />  
		-->
		
		</form>
		<iframe name="plus"></iframe
		<!-- 
		onclick="document.getElementById('id_number').value++;" />  
		-->	
	</body>
</html>
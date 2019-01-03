

<!DOCTYPE html>
<html>
<head>
	<title>Testing</title>
</head>
<body>
	<?php  
		if(isset($_REQUEST['submit_btn'])) {
			echo " <p> Hola {$_POST['nombre']} {$_POST['apellido']} !</p> ";
			include('validate_file.php');
		}
		else {
	?>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="text" name="nombre" required="">
		<input type="text" name="apellido" required="">
		<br>
		<input type="file" name="fileToUpload" required="">
		<br>
		<input type="submit" name="submit_btn">
		
	</form>
<?php 
	} 
?>

</body>
</html>
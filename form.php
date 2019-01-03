

<!DOCTYPE html>
<html>
<head>
	<title>Testing</title>
</head>
<body>
	<form action="handler.php" method="post" enctype="multipart/form-data">
		<input type="text" name="nombre" required="">
		<input type="text" name="apellido" required="">
		<br>
		<input type="file" name="fileToUpload" required="">
		<br>
		<input type="submit" name="submit_btn">
	</form>
</body>
</html>
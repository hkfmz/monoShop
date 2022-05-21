
<!DOCTYPE html>
<html>
<head>
	<title>ImageUpload</title>
</head>
<body style="zoom: 180%">
	<form method="post" enctype="multipart/form-data">
		<label>Username</label>
		<input type="text" name="username">
		<br>
		<label>UploadImage</label>
		<input type="file" name='myfile'>
		<br/>
		<input type="submit" name="upload" value="Envoyer">
	</form>
</body>
</html>

<?php

if(isset($_POST['upload'])){

	$user=$_POST['username'];
	$image=$_FILES['myfile'];

	echo "Hello $user <br/>";
	echo "File Name<b>::</b> ".$image['name'];

	move_uploaded_file($image['tmp_name'],"img/".$image['name']);

    
}

?>
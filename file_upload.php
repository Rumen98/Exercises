<?php 
	if (file_exists("upload/" . $_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"] . " already exists. ";
}
else
{
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
}

 ?>










<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
	<form action="<?=$_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data"> 
		<label for="file">Filename:</label>
		<input type="file" name="file" id="file" size="20"><br>
		<input type="submit" name="submit" value="Submit">

	</form>
</body>
</html>


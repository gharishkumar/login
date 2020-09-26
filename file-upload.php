<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form method="post" enctype="multipart/form-data">
    <label>Title</label>
    <input type="text" name="title">
    <label>File Upload</label>
    <input type="File" name="file">
    <input type="submit" name="submit">
 
 
</form>
 
</body>
</html>
 
<?php 
$conn = odbc_connect("fileinfo","", "");
if (isset($_POST["submit"]))
 {
	$title = $_POST["title"];
	$pname = rand(1000,10000)."-".$_FILES["file"]["name"];
	$tname = $_FILES["file"]["tmp_name"];
	$uploads_dir = 'images';
	move_uploaded_file($tname, $uploads_dir.'/'.$pname);
	$sql="insert into fileup (title, image) VALUES ('".$title."','".$pname."');";
	if(odbc_exec($conn,$sql))
	{
		echo "File Sucessfully uploaded";
	}
	else
	{
		echo "Error";
	}
}
 
 
?>
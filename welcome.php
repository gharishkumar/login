<?php
session_start();
if(isset($_SESSION['log']))
{
?>
<html>
<head>
	<title>Welcome</title>
</head>
<script>
document.addEventListener('DOMContentLoaded', function() {
 if (!Notification) {
  alert('Desktop notifications not available in your browser. Try Chromium.');
  return;
 }

 if (Notification.permission !== 'granted')
  Notification.requestPermission();
});


function notifyMe() {
 if (Notification.permission !== 'granted')
  Notification.requestPermission();
 else {
  var notification = new Notification('Notification title', {
   icon: 'favicon.png',
   body: 'Hey there! You\'ve new msg!',
  });
  notification.onclick = function() {
   window.open('http://localhost/welcome.php');
  };
 }
}
</script>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<h1>Welcome
	<?php 
	echo $_SESSION['log'];
	?></h1>
	<a href="index.php"><button>Logout</button></a>
	<button onclick="notifyMe()">Notify me!</button>
	<br>
	<form method="post" enctype="multipart/form-data">
    <label>Title</label>
    <input type="text" name="title">
    <label>File Upload</label>
    <input type="File" name="file">
    <input type="submit" name="submit">
</body>
</html>
<?php
}
else{
	echo "Invalid request";
	header("refresh:2;url=index.php");
}
?>
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

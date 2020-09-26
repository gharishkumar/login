<?php
session_start();
if(isset($_POST['submit']))
{
	$uname=$_POST['email'];
	$password=$_POST['password'];
	$con=odbc_connect("studentinfo","", "");
	$sql="select * from info where username='".$uname."' and password='".$password."'";
	$result=odbc_exec($con, $sql);
	$count=odbc_fetch_row($result);
	$studname=odbc_result($result, "studname");
	
	if($count==1)
		{
			echo "Login Success <br> Please Wait";
			$_SESSION['log']=$studname;
			header("refresh:2;url=welcome.php");
		}
		elseif($count==null)
		{
			echo "Invalid user";
			header("refresh:2;url=index.php");
		}

}
else
{
	echo "Invalid Request";
	header("refresh:2;url=index.php");
}
?>
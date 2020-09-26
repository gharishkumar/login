<?php
session_start();
if(isset($_POST['submit']))
{
	$uname=$_POST['email'];
	$password=$_POST['password'];
	$studname=$_POST['studname'];
	$con=odbc_connect("studentinfo","", "");
	$sql="select * from info where username='".$uname."'";
	$result=odbc_exec($con, $sql);
	$count=odbc_fetch_row($result);
	$studnamedb=odbc_result($result, "studname");
	
	if($count==1)
		{
			echo $uname," is already in use by ",$studnamedb;
			header("refresh:2;url=new.php");
		}
		elseif($count==null)
		{
			$cret="insert into info (username, password, studname) VALUES ('".$uname."','".$password."','".$studname."');";
			odbc_exec($con, $cret);
			echo "User created Success <br> Please Wait";
			header("refresh:2;url=index.php");
		}

}
else
{
	echo "Invalid Request";
	header("refresh:2;url=index.php");
}
?>
<?php
	$con=mysqli_connect("localhost","id20443869_lazypanda","Panda@123456","id20443869_wd");
	$a=$_POST['user'];
	$b=$_POST['password'];
	$c=$_POST['fname'];
	$d=$_POST['lname'];
	$e=$_POST['a'];
	$f=$_POST['b'];
               
  if(!$con)
	{
	  die("unable to connect");
	}
	mysqli_select_db($con,"id20443869_wd");
	$query="insert into student values('$a','$b','$c','$d','$e','$f')";

	if(mysqli_query($con,$query))
	{
	  echo "Data inserted ";
	}
	mysqli_close($con);
?>
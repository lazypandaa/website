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
// 	$query="update student set 401='$b',402='$c',403='$d',404='$e',405='$f' where name='$a' ";
// 	$query="update student set pin='$b',name='$c',branch='$d',percent='$e' where pin='$a'";
$query="UPDATE `student` SET `name`='$b',`401`='$c',`402`='$d',`403`='$e',`404`='$f' WHERE pin='$a'";
	if(mysqli_query($con,$query))
	{
	  echo "Data updated ";
	}
	mysqli_close($con);
?>
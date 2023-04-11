<?php
$con=mysqli_connect("localhost","id20443869_lazypanda","Panda@123456","id20443869_wd");

if(!$con)
{
die("unable to connect");
}
$a=$_POST['user'];
$b=$_POST['password'];

mysqli_select_db($con,"id20443869_wd");

$query="select * from user where user='$a' and password='$b'";
$result=mysqli_query($con,$query);
$c=mysqli_num_rows($result);
if($c>0)
{
   header("Location:admin.html"); 
}
else
{
echo "login unsuccess";
}

mysqli_close($con);
?>
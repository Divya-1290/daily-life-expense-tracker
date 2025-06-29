<?php
session_start();
//error_reporting(0);
$con=mysqli_connect("localhost","root","","expense_tracker");


    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $sql ="SELECT * FROM tbladmin WHERE UserName='$uname' and Password='$pass'";
    $query=mysqli_query($con,$sql);
    $rowcount=mysqli_num_rows($query);
	
    if ($rowcount > 0)
{
	
while($result = $query->fetch_assoc())
{
	
$_SESSION['id']=$result['ID'];
$_SESSION['user']=$result['AdminName'];
echo "<script>alert('Login Sucessful');</script>";
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
}
} else{
echo "<script>alert('Invalid Details');</script>";
echo "<script type='text/javascript'> document.location ='index.php'; </script>";
}


?>
<?php


$db_hostname='localhost';
$db_database='profiles';
$db_username='root';
$db_password='';
$connection=new mysqli($db_hostname,$db_username,$db_password,$db_database);
if($connection->connect_error)die($connection->connect_error);
$Email=$_POST['email_box'];
$Password=$_POST['password'];
if(isset($_POST['but']))
{
  $query="SELECT * FROM identities WHERE Email='$Email' && Password='$Password' ";
  $result=$connection->query($query);
  
 $rows=mysqli_num_rows($result);
  if(!$rows==0) {
       $array=mysqli_fetch_array($result);
       $user=$array[0];
       $last=$array[1];
       $email=$array[2];
       $pass=$array[3];
	session_start();
	$_SESSION['username'] = $user;
	$_SESSION['lastname'] = $last;
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $pass;

      header ("Location: user.php");
}
  else
      header ("Location: login.php");
}

 ?>

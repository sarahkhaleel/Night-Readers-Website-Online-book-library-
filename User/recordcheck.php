<?php
header ("Location: user.html");

$db_hostname='localhost';
$db_database='profiles';
$db_username='root';
$db_password='';
$connection=new mysqli($db_hostname,$db_username,$db_password,$db_database);
if($connection->connect_error)die($connection->connect_error);
$Email=$_POST['email_box'];
$Passsword=$_POST['password'];
if(isset($_POST['but']))
{
  $query="SELECT first_name FROM identities WHERE Email='$Email' ";
  $result=$connection->query($query);
  
  if($result) echo "registered user";
  else
    echo "Incorrect email or password..";
}

 ?>
